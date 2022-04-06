<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ["site_name","site_title","favicon","logo","keywords","description","footer_about","admin_email","mobile","copyright","email_from","smtp_host","smtp_port","smtp_user","smtp_pass","facebook","instagram","twitter","linkedin","enable_captcha","enable_registration","is_show_user_profile","recaptcha_site_key","recaptcha_secret_key","recaptcha_lang","language","paypal_is_sandbox","paypal_sandbox_url","paypal_live_url","paypal_email","paypal_cur_code","stripe_secret_key","stripe_publish_key","default_language"];
}
