
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    {{-- <base href=".{{ asset("asset/>dsash/src") }}">/ --}}
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $settings->description }}">
    <meta name="keyword" content="{{ $settings->keywords }}">
    <link rel="shortcut icon" href="{{ $settings->favicon ? url("storage/".$settings->favicon) : asset("assets/dash/src/images/favicon.png") }}">
    <title>@if( isset($header)) {{ $header }} @else {{ "Company" }} | @endif{{ $settings->site_title }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset("assets/dash/src") }}/assets/css/dashlite.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="{{ asset("assets/dash/src") }}/assets/css/theme.css?ver=2.9.1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
    @livewireStyles
    @stack('css')
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <a href="/" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="{{ $settings->logo ? url("storage/".$settings->logo) : asset("assets/dash/src/images/logo.png") }}" srcset="{{ $settings->logo ? url("storage/".$settings->logo) : asset("assets/dash/src/images/logo2x.png") }} 2x" alt="logo">
                            <img class="logo-dark logo-img" src="{{ $settings->logo ? url("storage/".$settings->logo) : asset("assets/dash/src/images/logo-dark.png") }}" srcset="{{ $settings->logo ? url("storage/".$settings->logo) : asset("assets/dash/src/images/logo-dark2x.png") }} 2x" alt="logo-dark">
                        </a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Main menu</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route("dashboard") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route("experience.index") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-building"></em></span>
                                        <span class="nk-menu-text">Experience</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route("education.index") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-book"></em></span>
                                        <span class="nk-menu-text">Education</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route("skill.index") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                                        <span class="nk-menu-text">Skill</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route("service.index") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-todo"></em></span>
                                        <span class="nk-menu-text">Service</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">Portfolio</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route("pcategory.index") }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Category</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="{{ route("portfolio.index") }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Portfolio</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route("interest.index") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-heart"></em></span>
                                        <span class="nk-menu-text">Interest</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route("award.index") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-flag"></em></span>
                                        <span class="nk-menu-text">Award</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route("language.index") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-hot"></em></span>
                                        <span class="nk-menu-text">Language</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-blogger"></em></span>
                                        <span class="nk-menu-text">Blog</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route("bcategory.index") }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Category</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="{{ route("blog.index") }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Post</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route("client.index") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">Client</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route("testimonial.index") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chat"></em></span>
                                        <span class="nk-menu-text">Testimonial</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route("reference.index") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-sort-v"></em></span>
                                        <span class="nk-menu-text">Reference</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                {{-- <li class="nk-menu-item">
                                    <a href="{{ route("layout.index") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-property-blank"></em></span>
                                        <span class="nk-menu-text">Layout (admin)</span>
                                    </a>
                                </li><!-- .nk-menu-item --> --}}
                                <li class="nk-menu-item">
                                    <a href="{{ route("setlayout") }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-property-blank"></em></span>
                                        <span class="nk-menu-text">Public layout</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-calendar"></em></span>
                                        <span class="nk-menu-text">Guest book</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route("contact.index") }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Chat history</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="{{ route("appointment.index") }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Appointment</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-lock"></em></span>
                                        <span class="nk-menu-text">Privilage</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route("group.index") }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Group</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="{{ route("visitor.index") }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Visitor</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <form action="{{ route("logout") }}" method="POST">
                                        @csrf
                                        <button class="nk-menu-link" style="background-color: none;background: none;border: none">
                                            <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                                            <span class="nk-menu-text ml-1">Signout</span>
                                        </button>
                                    </form>
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">

                            <div class="btn btn-primary">
                                <a href="/company" style="padding: 5px 10px;">
                                    <span class="nk-menu-icon"><em class="icon ni ni-building text-white"></em></span>
                                    <span class="nk-menu-text text-white">Experience</span>
                                </a>
                            </div>

                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="{{ asset("assets/dash/src") }}/images/logo.png" srcset="{{ asset("assets/dash/src") }}/images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="{{ asset("assets/dash/src") }}/images/logo-dark.png" srcset="{{ asset("assets/dash/src") }}/images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <img src="{{ auth()->user()->profile_photo_path ? url("storage/".auth()->user()->profile_photo_path) : "https://ui-avatars.com/api/?name=".auth()->user()->username."&color=7F9CF5&background=EBF4FF" }}">
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status">User</div>
                                                    <div class="user-name dropdown-indicator">{{ auth()->user()->username }}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ auth()->user()->username }}</span>
                                                        <span class="sub-text">{{ auth()->user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ route("dashboard") }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <form action="{{ route("logout") }}" method="POST">
                                                            @csrf
                                                            <button style="background-color: none;background: none;border: none;color:#8094ae">
                                                                <em class="icon ni ni-signout"></em>
                                                                <span class="nk-menu-text">Logout</span>
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class=@if ( isset($header) ) {{ "nk-block-head nk-block-head-sm" }} @else {{ "hidden" }} @endif>
                                    <div class="card card-preview">
                                        <div class="card-body">
                                            <div class="nk-block-between">
                                                @if (isset($header))
                                                    <div class="nk-block-head-content">
                                                        <h3 class="nk-block-title page-title">{{ $header }}</h3>
                                                        @if (isset($desc))
                                                            <div class="nk-block-des text-soft">
                                                                <p>{{ $desc }}</p>
                                                            </div>
                                                        @endif
                                                    </div><!-- .nk-block-head-content -->
                                                @endif
                                                
                                                @if (isset($act))
                                                <div class="nk-block-head-content">
                                                    <div class="toggle-wrap nk-block-tools-toggle">
                                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                        <div class="toggle-expand-content" data-content="pageMenu">
                                                            <ul class="nk-block-tools g-3">
                                                                {{ $act }}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                {{-- alert --}}
                                @if (session('success'))
                                    <x-alert type="primary" message="{{ session('success') }}"></x-alert>
                                @endif
                                @if (session('danger'))
                                    <x-alert type="danger" message="{{ session('danger') }}"></x-alert>
                                @endif
                                @if (session('warning'))
                                    <x-alert type="warning" message="{{ session('warning') }}"></x-alert>
                                @endif
                                @if (session('info'))
                                    <x-alert type="info" message="{{ session('info') }}"></x-alert>
                                @endif
                                {{-- end alert --}}
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 Resumenya.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <script src="{{ asset("assets/dash/src") }}/assets/js/bundle.js?ver=2.9.1"></script>
    <script src="{{ asset("assets/dash/src") }}/assets/js/scripts.js?ver=2.9.1"></script>
    <script src="{{ asset("assets/dash/src") }}/assets/js/libs/datatable-btns.js?ver=2.9.1"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.js"></script>
    @livewireScripts
    @stack('scripts')
</body>

</html>