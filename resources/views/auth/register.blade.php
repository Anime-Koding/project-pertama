<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    {{-- <base href=".{{ asset("assets/dash/src") }}/.{{ asset("assets/dash/src") }}/.{{ asset("assets/dash/src") }}/"> --}}
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset("assets/resume") }}/favicon.png">  
    <!-- Page Title  -->
    <title>Daftar Akun Pengguna Baru | Resumenya</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset("assets/dash/src") }}/assets/css/dashlite.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="{{ asset("assets/dash/src") }}/assets/css/theme.css?ver=2.9.1">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content "style="max-width:970px!important;margin:0px auto">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="/" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="{{ asset("assets/resume") }}/logo_gray.png" srcset="{{ asset("assets/resume") }}/logo_gray100.png 2x" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="{{ asset("assets/resume") }}/logo_resume.png" srcset="{{ asset("assets/resume") }}/logo_resume100.png 2x" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Daftar Akun Baru</h5>
                                        <div class="nk-block-des">
                                            <p>Jadi Pengguna Baru Resumenya dengan mendaftarkan akun dan Permudah Kelola CV & Resume mu.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->

                                @if($errors->any())
                                    <div class="alert alert-icon alert-danger" role="alert">
                                    <em class="icon ni ni-cross-circle"></em>
                                        <strong>Register error</strong>.
                                        <ul class="list">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route("register") }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="first_name">Nama Depan</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control form-control-lg " id="first_name" name="first_name" placeholder="Isi Nama Depanmu" value="" required="" autocomplete="first_name" autofocus=""></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="last_name">Nama Belakang</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control form-control-lg " id="last_name" name="last_name" placeholder="Isi Nama Belakangmu" value="" required="" autocomplete="last_name" autofocus=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="username">Nama Pengguna</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg " id="username" name="username" placeholder="Isi dengan Nama Pengguna yang Unik" value="" required="" autocomplete="username" autofocus=""></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Alamat Email</label>
                                        <div class="form-control-wrap">
                                            <input type="email" class="form-control form-control-lg " id="email" placeholder="Isi dengan Email Pribadimu" name="email" value="" required="" autocomplete="email"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Kata Kunci</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg " id="password" placeholder="Isi dengan Kata Kunci Unik Pilihan Kamu" name="password" required="" autocomplete="new-password"></div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="password-confirm">Pastikan Kata Kunci</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password-confirm">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg " id="password-confirm" placeholder="Isi ulang dengan Kata Kunci Sebelumnya" name="password_confirmation" required="" autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox" required="">
                                            <label class="custom-control-label" for="checkbox"> Dengan ini saya Menyetujui <a tabindex="-1" href="{{ route("privacy") }}">Kebijakan Privasi </a> &amp; <a tabindex="-1" href="{{ route("terms") }}">Persyaratan</a> Resumenya yang berlaku.</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Proses Daftar</button>
                                    </div>
                                </form><!-- form -->
                                <div class="form-note-s2 pt-4"> Sudah punya Akun Pengguna? <a href="{{ route("login") }}"><strong>Masuk Segera</strong></a>
                                </div>
                            </div>
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                    <ul class="nav nav-sm">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route("terms") }}">Syarat dan Ketentuan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route("privacy") }}">Kebijakan Privasi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route("help") }}">Bantuan</a>
                                        </li>
                                    </ul><!-- .nav -->
                                </div>
                                <div class="mt-3">
                                    <p>&copy; 2022 Resumenya. Segala Hak Cipta Berlaku.</p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 m-auto"style="padding:0px!important">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":true}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset("assets/resume") }}/Vector01.png"  srcset="{{ asset("assets/resume") }}/Vector01_300px.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Profil Baru untuk Segala Urusan</h4>
                                                <p>Media Profil yang dapat dilengkapi data Resume, Portofolio, Website ataupun Lapak Bisnis kamu. Jadi ga perlu lagi cetak dan kasih Kartu Nama.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset("assets/resume") }}/Vector02.png"  srcset="{{ asset("assets/resume") }}/Vector02_300px.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Berikan Akses Seperlunya</h4>
                                                <p>Mulai Lindungi dan batasi penyebaran data diri kamu dengan memberikan akses seperlunya ke orang yang tepat sesuai kebutuhan.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset("assets/resume") }}/Vector03.png" srcset="{{ asset("assets/resume") }}/Vector03_300px.png 2x"  alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Bangun Jenjang Karir yang Sesuai</h4>
                                                <p>Ikuti Penilaian Diri yang membantu memberikan rekomendasi Pekerjaan, Budaya Perusahaan dan Pengembangan yang tepat sesuai dengan Diri Kamu.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset("assets/dash/src") }}/assets/js/bundle.js?ver=2.9.1"></script>
    <script src="{{ asset("assets/dash/src") }}/assets/js/scripts.js?ver=2.9.1"></script>

</html>

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="username" value="{{ __('Username') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
 --}}
