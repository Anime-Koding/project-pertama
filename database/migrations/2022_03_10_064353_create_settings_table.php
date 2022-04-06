<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("site_name")->nullable();
            $table->string("site_title")->nullable();
            $table->string("favicon")->nullable();
            $table->string("logo")->nullable();
            $table->string("keywords")->nullable();
            $table->string("description")->nullable();
            $table->string("footer_about")->nullable();
            $table->string("admin_email")->nullable();
            $table->string("mobile")->nullable();
            $table->string("copyright")->nullable();
            
            $table->string("email_from");
            
            $table->string("smtp_host")->nullable();
            $table->string("smtp_port")->nullable();
            $table->string("smtp_user")->nullable();
            $table->string("smtp_pass")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("twitter")->nullable();
            $table->string("linkedin")->nullable();
            
            $table->boolean("enable_captcha");
            $table->boolean("enable_registration");
            $table->boolean("is_show_user_profile");
            
            $table->string("recaptcha_site_key")->nullable();
            $table->string("recaptcha_secret_key")->nullable();

            $table->string("recaptcha_lang");
            $table->string("language");

            $table->boolean("paypal_is_sandbox")->nullable();
            $table->string("paypal_sandbox_url")->nullable();
            $table->string("paypal_live_url")->nullable();
            $table->string("paypal_email")->nullable();
            $table->string("paypal_cur_code")->nullable();
            $table->string("stripe_secret_key")->nullable();
            $table->string("stripe_publish_key")->nullable();
            $table->string("default_language")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
