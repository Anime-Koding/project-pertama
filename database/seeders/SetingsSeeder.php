<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                "site_name" => "resumenya",
                "site_title" => "title resumenya",
                "favicon" => "",
                "logo" => "",
                "keywords" => "resumenya keyword",
                "description" => "description resume",
                "footer_about" => "",
                "admin_email" => "",
                "mobile" => "",
                "copyright" => "",
                "email_from" => "",
                "smtp_host" => "",
                "smtp_port" => "",
                "smtp_user" => "",
                "smtp_pass" => "",
                "facebook" => "",
                "instagram" => "",
                "twitter" => "",
                "linkedin" => "",
                "enable_captcha" => 1,
                "enable_registration" => 1,
                "is_show_user_profile" => 1,
                "recaptcha_site_key" => "",
                "recaptcha_secret_key" => "",
                "recaptcha_lang" => "",
                "language" => "",
                "paypal_is_sandbox" => 1,
                "paypal_sandbox_url" => "",
                "paypal_live_url" => "",
                "paypal_email" => "",
                "paypal_cur_code" => "",
                "stripe_secret_key" => "",
                "stripe_publish_key" => "",
                "default_language" => "en"
            ],
        ]);
    }
}
