<x-dashboard>
    
    <x-slot name="header">
        Settings
    </x-slot>

    <x-slot name="desc">
        Menu setting adalah menu pengaturan site.
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("setting.update") }}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                    <div class="row g-gs">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="site_name">Site name</label>
                                <input type="text" name="site_name" id="site_name" class="form-control" value="{{ old("site_name",$settings->site_name) }}" placeholder="Site name">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="site_title">Site title</label>
                                <input type="text" name="site_title" id="site_title" class="form-control" value="{{ old("site_title",$settings->site_title) }}" placeholder="Site title">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="favicon">Favicon</label>
                                <input type="file" name="favicon" id="favicon" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="logo">Logo</label>
                                <input type="file" name="logo" id="logo" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="keywords">Keyword</label>
                                <input type="text" name="keywords" id="keywords" class="form-control" value="{{ old("keywords",$settings->keywords) }}" placeholder="keywords">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control" value="{{ old("mobile",$settings->mobile) }}" placeholder="Mobile">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" placeholder="description">{{ old("description",$settings->description) }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="footer_about">Footer about</label>
                                <textarea class="form-control" name="footer_about" id="footer_about" placeholder="footer about">{{ old("footer_about",$settings->footer_about) }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="copyright">Copyright</label>
                                <textarea class="form-control" name="copyright" id="copyright" placeholder="copyright">{{ old("copyright",$settings->copyright) }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="admin_email">Admin email</label>
                                <input type="email" name="admin_email" id="admin_email" class="form-control" value="{{ old("admin_email",$settings->admin_email) }}" placeholder="Admin email">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="email_from">Email from</label>
                                <input type="text" name="email_from" id="email_from" class="form-control" value="{{ old("email_from",$settings->email_from) }}" placeholder="Email from">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="smtp_host">SMTP host</label>
                                <input type="text" name="smtp_host" id="smtp_host" class="form-control" value="{{ old("smtp_host",$settings->smtp_host) }}" placeholder="SMTP host">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="smtp_port">SMTP port</label>
                                <input type="text" name="smtp_port" id="smtp_port" class="form-control" value="{{ old("smtp_port",$settings->smtp_port) }}" placeholder="SMTP port">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="smtp_user">SMTP user</label>
                                <input type="text" name="smtp_user" id="smtp_user" class="form-control" value="{{ old("smtp_user",$settings->smtp_user) }}" placeholder="SMTP user">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="smtp_pass">SMTP pass</label>
                                <input type="text" name="smtp_pass" id="smtp_pass" class="form-control" value="{{ old("smtp_pass",$settings->smtp_pass) }}" placeholder="SMTP pass">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="facebook">Facebook</label>
                                <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old("facebook",$settings->facebook) }}" placeholder="Facebook">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="instagram">Instagram</label>
                                <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old("instagram",$settings->instagram) }}" placeholder="Instagram">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="twitter">Twitter</label>
                                <input type="text" name="twitter" id="twitter" class="form-control" value="{{ old("twitter",$settings->twitter) }}" placeholder="Twitter">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="linkedin">Linkedin</label>
                                <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ old("linkedin",$settings->linkedin) }}" placeholder="Linkedin">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="custom-control-lg custom-switch">
                                <input value="1" name="enable_captcha" {{ old("enable_captcha",$settings->enable_captcha) == "1" ? "checked" : "" }} type="checkbox" class="custom-control-input" id="enable_captcha">
                                <label class="custom-control-label" for="enable_captcha">enable captcha</label>
                            </div>
                        </div>          
                        <div class="col-lg-3 col-6">
                            <div class="custom-control-lg custom-switch">
                                <input value="1" {{ old("enable_registration",$settings->enable_registration) == "1" ? "checked" : "" }} name="enable_registration" type="checkbox" class="custom-control-input" id="enable_registration">
                                <label class="custom-control-label" for="enable_registration">enable registration</label>
                            </div>
                        </div>          
                        <div class="col-lg-3 col-6">
                            <div class="custom-control-lg custom-switch">
                                <input value="1" {{ old("is_show_user_profile",$settings->is_show_user_profile) == "1" ? "checked" : "" }} name="is_show_user_profile" type="checkbox" class="custom-control-input" id="is_show_user_profile">
                                <label class="custom-control-label" for="is_show_user_profile">show user profile</label>
                            </div>
                        </div>          
                        <div class="col-lg-3 col-6">
                            <div class="custom-control-lg custom-switch">
                                <input value="1" {{ old("paypal_is_sandbox",$settings->paypal_is_sandbox) == "1" ? "checked" : "" }} name="paypal_is_sandbox" type="checkbox" class="custom-control-input" id="paypal_is_sandbox">
                                <label class="custom-control-label" for="paypal_is_sandbox">paypal sandbox</label>
                            </div>
                        </div>       
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="recaptcha_site_key">Recaptcha key</label>
                                <input type="text" name="recaptcha_site_key" id="recaptcha_site_key" class="form-control" value="{{ old("recaptcha_site_key",$settings->recaptcha_site_key) }}"placeholder="Recaptcha key">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="recaptcha_secret_key">Recaptcha secret key</label>
                                <input type="text" name="recaptcha_secret_key" id="recaptcha_secret_key" class="form-control" value="{{ old("recaptcha_secret_key",$settings->recaptcha_secret_key) }}" placeholder="Recaptcha secret key">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="recaptcha_lang">Recaptcha lang</label>
                                <input type="text" name="recaptcha_lang" id="recaptcha_lang" class="form-control" 
                                value="{{ old("recaptcha_lang",$settings->recaptcha_lang) }}" placeholder="Recaptcha lang">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="language">Languange</label>
                                <input type="text" name="language" id="language" class="form-control"
                                value="{{ old("language",$settings->language) }}" placeholder="Languange">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="paypal_sandbox_url">Paypal sandbox url</label>
                                <input type="text" name="paypal_sandbox_url" id="paypal_sandbox_url" class="form-control" 
                                value="{{ old("paypal_sandbox_url",$settings->paypal_sandbox_url) }}" placeholder="Paypal sandbox url">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="paypal_live_url">Paypal live url</label>
                                <input type="text" name="paypal_live_url" id="paypal_live_url" class="form-control" 
                                value="{{ old("paypal_live_url",$settings->paypal_live_url) }}" placeholder="Paypal live url">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="paypal_email">Paypal email</label>
                                <input type="text" name="paypal_email" id="paypal_email" class="form-control" value="{{ old("paypal_email",$settings->paypal_email) }}" placeholder="Paypal email">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="paypal_cur_code">Paypal cur code</label>
                                <input type="text" name="paypal_cur_code" id="paypal_cur_code" class="form-control" value="{{ old("paypal_cur_code",$settings->paypal_cur_code) }}" placeholder="Paypal cur code">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="stripe_secret_key">Stripe secret key</label>
                                <input type="text" name="stripe_secret_key" id="stripe_secret_key" class="form-control" value="{{ old("stripe_secret_key",$settings->stripe_secret_key) }}" placeholder="Stripe secret key">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="stripe_publish_key">Stripe publish key</label>
                                <input type="text" name="stripe_publish_key" id="stripe_publish_key" class="form-control" value="{{ old("stripe_publish_key",$settings->stripe_publish_key) }}" placeholder="Stripe publish key">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="default_language">Default language</label>
                                <input type="text" name="default_language" id="default_language" class="form-control" value="{{ old("default_language",$settings->default_language) }}" placeholder="Default language">
                            </div>
                        </div>   
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
