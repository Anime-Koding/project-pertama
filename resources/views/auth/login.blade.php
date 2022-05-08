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
    <title> Masuk atau Daftar | Resumenya</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset("assets/dash/src") }}/assets/css/dashlite.css">
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
                                        <h5 class="nk-block-title">Isi Akunmu</h5>
                                        <div class="nk-block-des">
                                            <p>Lanjut Kelola Profil Resumenya dan Tingkatkan Jenjang Karir sesuai Penilaian Diri.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form action="{{ route("login") }}" method="POST" class="form-validate is-alter" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="username">Nama Pengguna</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="#">Butuh Bantuan?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input autocomplete="off" name="email" type="text" class="form-control form-control-lg" id="username" placeholder="Isi Nama Pengguna Unik Anda yang Terdaftar">
                                            @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Kata Sandi</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="{{ route("password.request") }}">Lupa Kata Sandi?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input autocomplete="new-password" name="password" type="password" class="form-control form-control-lg" id="password" placeholder="Isi Kata Sandi yang Tepat">
                                            @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Masuk</button>
                                    </div>
                                </form><!-- form -->
                                <div class="form-note-s2 pt-4"> Belum punya akun? <a href="{{ route("register") }}">Buat Akun Sekarang</a>
                                </div>
                            </div><!-- .nk-block -->
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
