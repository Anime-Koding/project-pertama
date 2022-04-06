<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->foreignId("country_id")->nullable()->constrained()->cascadeOnDelete();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("phone")->nullable();
            $table->string("thumb")->nullable();
            $table->string("designation")->nullable();
            $table->string("about_me")->nullable();
            $table->string("province")->nullable();
            $table->string("city")->nullable();
            $table->string("address")->nullable();
            $table->string("skype")->nullable();
            $table->string("whatapp")->nullable();
            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("instagram")->nullable();
            $table->string("resume")->nullable();

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
        Schema::dropIfExists('profiles');
    }
};
