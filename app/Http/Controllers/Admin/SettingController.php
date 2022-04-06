<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view("admin.settings.index",compact("settings"));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
                "site_name" => "nullable",
                "site_title" => "nullable",
                "favicon" => "nullable|image",
                "logo" => "nullable|image",
                "keywords" => "nullable",
                "description" => "nullable",
                "footer_about" => "nullable",
                "admin_email" => "nullable",
                "mobile" => "nullable",
                "copyright" => "nullable",
                "email_from" => "required",
                "smtp_host" => "nullable",
                "smtp_port" => "nullable",
                "smtp_user" => "nullable",
                "smtp_pass" => "nullable",
                "facebook" => "nullable",
                "instagram" => "nullable",
                "twitter" => "nullable",
                "linkedin" => "nullable",
                "enable_captcha" => "required",
                "enable_registration" => "required",
                "is_show_user_profile" => "required",
                "recaptcha_site_key" => "nullable",
                "recaptcha_secret_key" => "nullable",
                "recaptcha_lang" => "nullable",
                "language" => "required",
                "paypal_is_sandbox" => "required",
                "paypal_sandbox_url" => "nullable",
                "paypal_live_url" => "nullable",
                "paypal_email" => "nullable",
                "paypal_cur_code" => "nullable",
                "stripe_secret_key" => "nullable",
                "stripe_publish_key" => "nullable",
                "default_language" => "nullable"
        ]);
        $settings = Setting::first();
        if (!File::exists(public_path('/storage/webassets'))) {
            File::makeDirectory(public_path('/storage/webassets'),0777,true);
        }
        if($request->hasFile("favicon")){
            File::delete(public_path('storage/'.$settings->favicon));
            $favicon = $request->file('favicon');
            $validated["favicon"] = $favicon->store('webassets','public');
        }
        if($request->hasFile("logo")){
            File::delete(public_path('storage/'.$settings->logo));
            $logo = $request->file('logo');
            $validated["logo"] = $logo->store('webassets','public');
        }
        $settings->update($validated);
        return redirect()->back()->with("success","Berhasil update setting");
    }
}
