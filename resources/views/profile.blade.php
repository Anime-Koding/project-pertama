<!DOCTYPE html>
@layout(1)
<html lang="en" class="crt crt-side-box-on crt-nav-on crt-nav-type2 crt-main-nav-on crt-sidebar-on crt-layers-1">
@endlayout
@layout(2)
<html lang="en" class="crt crt-nav-on crt-nav-type1 crt-main-nav-on crt-sidebar-on crt-layers-3">
@endlayout
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Resume {{ $user->profile->first_name ." ". $user->profile->last_name  }}</title>
      <meta name="description" content="">
      <link rel="apple-touch-icon" href="apple-touch-icon.png">
      <link rel="shortcut icon" href="favicon.ico">
      <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
      
      <link href="{{ asset("assets/resume/casual") }}/assets/css/style.min.css" rel="stylesheet">

      @layout(1)
      <link href="{{ asset("assets/resume/casual") }}/assets/fonts/icomoon/style.css" rel="stylesheet">
      <link href="{{ asset("assets/resume/casual") }}/assets/css/plugins.min.css" rel="stylesheet">
      <link href="{{ asset("assets/resume/casual") }}/assets/css/style.min.css" rel="stylesheet">
      @endlayout
      @layout(2)
      <link href="{{ asset("assets/resume/formal") }}/assets/fonts/icomoon/style.css" rel="stylesheet">
      <link href="{{ asset("assets/resume/formal") }}/assets/css/plugins.min.css" rel="stylesheet">
      <link href="{{ asset("assets/resume/formal") }}/assets/css/style.min.css" rel="stylesheet">
      @endlayout
      <script type="text/javascript" src="{{ asset("assets/resume/casual") }}/assets/js/vendor/modernizr-3.3.1.min.js"></script>
      {{-- <link rel="stylesheet" href="{{ asset("assets/resume") }}/modal.css"> --}}
      <style>
          .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.9);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
            z-index: 99;
        }
        .overlay:target {
            visibility: visible;
            opacity: 1;
        }
        
        .popup {
            margin: 70px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 30%;
            position: relative;
            transition: all 5s ease-in-out;
        }
        
        .popup h3 {
            margin-top: 0;
            color: #333;
            font-family: Tahoma, Arial, sans-serif;
        }
        .popup .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }
        .popup .close:hover {
            color: #06d85f;
        }
        .popup .content {
            max-height: 30%;
            overflow: auto;
        }
        
        @media screen and (max-width: 700px) {
            .box {
                width: 70%;
            }
            .popup {
                width: 70%;
            }
        }
      </style>
      
   </head>
   <body class="">
      @layout(1)
      <div class="crt-wrapper">
         <header id="crt-header">
            <div class="crt-head-inner crt-container">
               <div class="crt-container-sm">
                  <div class="crt-head-row">
                     <div id="crt-head-col1" class="crt-head-col text-left">
                        <a id="crt-logo" class="crt-logo" href="{{ route("profile",$user->username) }}">
                        <img src="{{ asset("assets/resume/casual") }}/assets/images/uploads/brand/logo.svg" alt="certy resume"><span>.Certy</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <nav id="crt-nav-sm" class="crt-nav hidden-lg hidden-md">
               <ul class="clear-list">
                  <li>
                     <a href="{{ route("profile",$user->username) }}#about" data-tooltip="Home"><img class="avatar avatar-42" src="{{ $user->profile_photo_path ? url("storage/".$user->profile_photo_path) : "https://ui-avatars.com/api/?name=".$user->profile->first_name. " " . $user->profile->last_name ."&color=7F9CF5&background=EBF4FF" }}"alt=""></a>
                  </li>
                  
                  @countdata($experiences)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#experience" data-tooltip="Experience"><span class="crt-icon crt-icon-experience"></span></a>
                  </li>
                  @endcountdata

                  @countdata($educations)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#education" data-tooltip="Education"><span class="crt-icon crt-icon-suitcase"></span></a>
                  </li>
                  @endcountdata

                  @countdata($award)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#award" data-tooltip="Awards"><span class="crt-icon crt-icon-trophy"></span></a>
                  </li>
                  @endcountdata

                  @countdata($testimonial)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#testimonial" data-tooltip="Testimonials"><span class="crt-icon crt-icon-headphones"></span></a>
                  </li>
                  @endcountdata

                  @countdata($service)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#service" data-tooltip="Services"><span class="crt-icon crt-icon-search"></span></a>
                  </li>
                  @endcountdata

                  @countdata($portfolio)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#portfolio" data-tooltip="Portfolio"><span class="crt-icon crt-icon-portfolio"></span></a>
                  </li>
                  @endcountdata

                  @countdata($references)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#references" data-tooltip="References"><span class="crt-icon crt-icon-references"></span></a>
                  </li>
                  @endcountdata

                  @countdata($clients)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#client" data-tooltip="Client"><span class="crt-icon crt-icon-user"></span></a>
                  </li>
                  @endcountdata

                  @countdata($blog)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#blog" data-tooltip="Blogs"><span class="crt-icon crt-icon-blog"></span></a>
                  </li>
                  @endcountdata

                  @countdata($interest)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#interest" data-tooltip="Interest"><span class="crt-icon crt-icon-heart-o"></span></a>
                  </li>
                  @endcountdata

                  @groupfeature('Appointments System')
                  <li>
                     <a href="{{ route("profile",$user->username) }}#appointment" data-tooltip="Appointment"><span class="crt-icon crt-icon-calendar"></span></a>
                  </li>
                  @endgroupfeature

                  @groupfeature('Contact System')
                  <li>
                     <a href="{{ route("profile",$user->username) }}#contact" data-tooltip="Contact"><span class="crt-icon crt-icon-contact"></span></a>
                  </li>
                  @endgroupfeature
               </ul>
            </nav>
         </header>
         <div id="crt-container" class="crt-container">
            <div id="crt-side-box-wrap" class="crt-sticky">
               <div id="crt-side-box">
                  <div class="crt-side-box-item">
                     <div class="crt-card bg-primary text-center">
                        <div class="crt-card-avatar">
                           <img class="avatar avatar-195" src="{{ $user->profile_photo_path ? url("storage/".$user->profile_photo_path) : "https://ui-avatars.com/api/?name=".$user->profile->first_name. " " . $user->profile->last_name ."&color=7F9CF5&background=EBF4FF" }}" width="195" height="195" alt="">
                        </div>
                        <div class="crt-card-info">
                            <h2 class="text-upper">{{ $user->profile->first_name . " " . $user->profile->last_name }}</h2>
                            <p class="text-muted">{{ $user->profile->designation }}</p>
                           <ul class="crt-social clear-list">
                              @if($user->profile->facebook)
                              <li><a href="{{ $user->profile->facebook }}"><span class="crt-icon crt-icon-facebook"></span></a></li>
                              @endif

                              @if($user->profile->twitter)
                              <li><a href="{{ $user->profile->twitter }}"><span class="crt-icon crt-icon-twitter"></span></a></li>
                              @endif

                              @if($user->profile->whatapp)
                              <li><a href="{{ $user->profile->whatapp }}"><span class="crt-icon crt-icon-whatsapp"></span></a></li>
                              @endif

                              @if($user->profile->instagram)
                              <li><a href="{{ $user->profile->instagram }}"><span class="crt-icon crt-icon-instagram"></span></a></li>
                              @endif

                              @if($user->profile->linkedin)
                              <li><a href="{{ $user->profile->linkedin }}"><span class="crt-icon crt-icon-linkedin"></span></a></li>
                              @endif
                           </ul>
                        </div>
                     </div>
                     @if($user->profile->thumb)
                     <div class="crt-side-box-btn">
                        <a class="btn btn-default btn-lg btn-block btn-thin btn-upper" href="{{ url("storage/".$user->profile->thumb) }}">Download Resume</a>
                     </div>
                     @endif
                  </div>
               </div>
            </div>
            <div id="crt-nav-wrap" class="hidden-sm hidden-xs">
               <div id="crt-nav-inner">
                  <div class="crt-nav-cont">
                     <div id="crt-nav-scroll">
                        <nav id="crt-nav" class="crt-nav">
                           <ul class="clear-list">
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#about" data-tooltip="Home"><img class="avatar avatar-42" src="{{ $user->profile_photo_path ? url("storage/".$user->profile_photo_path) : "https://ui-avatars.com/api/?name=".$user->profile->first_name. " " . $user->profile->last_name ."&color=7F9CF5&background=EBF4FF" }}" alt=""></a>
                              </li>
                              @countdata($experiences)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#experience" data-tooltip="Experience"><span class="crt-icon crt-icon-experience"></span></a>
                              </li>
                              @endcountdata

                              @countdata($educations)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#education" data-tooltip="Education"><span class="crt-icon crt-icon-suitcase"></span></a>
                              </li>
                              @endcountdata

                              @countdata($award)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#award" data-tooltip="Awards"><span class="crt-icon crt-icon-trophy"></span></a>
                              </li>
                              @endcountdata
                              
                              @countdata($service)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#service" data-tooltip="Services"><span class="crt-icon crt-icon-search"></span></a>
                              </li>
                              @endcountdata

                              @countdata($testimonial)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#testimonial" data-tooltip="Testimonials"><span class="crt-icon crt-icon-headphones"></span></a>
                              </li>
                              @endcountdata

                              @countdata($portfolio)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#portfolio" data-tooltip="Portfolio"><span class="crt-icon crt-icon-portfolio"></span></a>
                              </li>
                              @endcountdata

                              @countdata($references)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#references" data-tooltip="References"><span class="crt-icon crt-icon-references"></span></a>
                              </li>
                              @endcountdata

                              @countdata($clients)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#client" data-tooltip="Client"><span class="crt-icon crt-icon-user"></span></a>
                              </li>
                              @endcountdata

                              @countdata($blog)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#blog" data-tooltip="Blogs"><span class="crt-icon crt-icon-blog"></span></a>
                              </li>
                              @endcountdata

                              @countdata($interest)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#interest" data-tooltip="Interest"><span class="crt-icon crt-icon-heart-o"></span></a>
                              </li>
                              @endcountdata

                              @groupfeature('Appointments System')
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#appointment" data-tooltip="Appointment"><span class="crt-icon crt-icon-calendar"></span></a>
                              </li>
                              @endgroupfeature

                              @groupfeature('Contact System')
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#contact" data-tooltip="Contact"><span class="crt-icon crt-icon-contact"></span></a>
                              </li>
                              @endgroupfeature
                           </ul>
                        </nav>
                     </div>
                     <div id="crt-nav-tools" class="hidden">
                        <span class="crt-icon crt-icon-dots-three-horizontal"></span>
                        <button id="crt-nav-arrow" class="clear-btn">
                        <span class="crt-icon crt-icon-chevron-thin-down"></span>
                        </button>
                     </div>
                  </div>
                  <div class="crt-nav-btm"></div>
               </div>
            </div>
            <div class="crt-container-sm">
               <div id="about" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <section class="section brd-btm padd-box">
                           <div class="row">
                              @if (session('success'))
                              <div class="col-sm-12 clear-mrg" style="margin-bottom: 20px;background-color: #00b894;border-radius:10px;padding:20px">
                                 {{ session('success') }}
                              </div>
                              @endif
                              <div class="col-sm-12">
                                 <h2 class="text-upper">About Me</h2>
                                 <div class="text-box">
                                    <p><b>Helo, I’m {{ $user->profile->first_name . " " . $user->profile->last_name }}!</b><br>
                                        {{ $user->profile->about_me }}
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <section class="section padd-box">
                           <div class="row">
                              <div class="col-sm-6 clear-mrg">
                                 <h2 class="title-thin text-muted">personal information</h2>
                                 <dl class="dl-horizontal clear-mrg">
                                    <dt class="text-upper">Full Name</dt>
                                    <dd>{{ $user->profile->first_name . " " . $user->profile->last_name }}</dd>
                                    
                                    @if($user->profile->country)
                                    <dt class="text-upper">Nationality</dt>
                                    <dd>{{ $user->profile->country->name }}</dd>
                                    @endif
                                    
                                    @if($user->profile->address)
                                    <dt class="text-upper">address</dt>
                                    <dd>{{ $user->profile->address }}
                                    </dd>
                                    @endif
                                    
                                    @if($user->profile->email)
                                    <dt class="text-upper">e-mail</dt>
                                    <dd><a href="{{ $user->profile->email }}"><span class="__cf_email__" data-cfemail="c0b2afa2a5b2b4b3ada9b4a880a3afadb0a1aeb9eea3afad">{{ $user->profile->email }}</span></a></dd>
                                    @endif

                                    @if($user->phone)
                                    <dt class="text-upper">phone</dt>
                                    <dd>{{ $user->profile->phone }}</dd>
                                    @endif
                                 </dl>
                              </div>
                              @countdata($languages)
                              <div class="col-sm-6 clear-mrg">
                                 <h2 class="title-thin text-muted">languages</h2>
                                 @foreach ($languages as $item) 
                                 <div class="progress-bullets crt-animate" role="progressbar" aria-valuenow="{{ $item->level }}" aria-valuemin="0" aria-valuemax="{{ $item->level }}">
                                    <strong class="progress-title">{{ $item->title }}</strong>
                                    <span class="progress-bar">
                                    @for ($i = 0; $i < 10; $i++)
                                        @if($i."0" < $item->level)
                                        <span class="bullet fill"></span>
                                        @else
                                        <span class="bullet"></span>
                                        @endif
                                    @endfor
                                    </span>
                                    <span class="progress-text text-muted">native</span>
                                 </div>
                                 @endforeach
                              </div>
                              @endcountdata
                           </div>
                           @countdata($skill)
                           <div class="row" style="margin-top: 50px">
                              <div class="col-sm-12 clear-mrg">
                                 <h2 class="title-thin text-muted">professional skills</h2>
                                 @foreach ($skill as $item)
                                 <p>{{ $item->skill_name }}</p>
                                    @foreach ($item->skill as $skill_set)
                                    <div class="progress-line crt-animated" role="progressbar" aria-valuenow="{{ $skill_set->skill_level }}" aria-valuemin="0" aria-valuemax="100">
                                       <strong class="progress-title">{{ $skill_set->skill_name }}</strong>
                                       <div class="progress-bar" data-text="{{ $skill_set->skill_level }}%" data-value="0.5" style="position: relative;">
                                          <svg viewBox="0 0 100 4" preserveAspectRatio="none" style="width: 100%; height: 100%;">
                                             <path d="M 0,2 L 100,2" stroke="rgba(0,0,0,0.07)" stroke-width="4" fill-opacity="0"></path>
                                             <path d="M 0,2 L 100,2" stroke="#c0e3e7" stroke-width="4" fill-opacity="0" style="stroke-dasharray: {{ $skill_set->skill_level }}, 100; stroke-dashoffset: 0;"></path>
                                          </svg>
                                          <div class="progress-text" style="top: -25px; right: 0px; color: inherit; position: absolute; margin: 0px; padding: 0px; transform: translate(0px, 0px);">{{ $skill_set->skill_level }}%</div>
                                       </div>
                                    </div>
                                    @endforeach
                                 @endforeach
                              </div>
                           </div>
                           @endcountdata
                        </section>
                     </div>
                  </div>
               </div>
               @countdata($experiences)
               <div id="experience" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <section class="section padd-box">
                           <h2 class="text-upper">work experience</h2>
                           <div class="education">
                              
                            @foreach ($experiences as $item)
                                <div class="education-box">
                                    <time class="education-date" datetime="2014-01T2016-03">
                                    <span>@php $exp = new DateTime($item->from_date); echo $exp->format("Y"); @endphp</strong> - 
                                       @php 
                                          if($item->to_date){
                                             $exp = new DateTime($item->to_date); 
                                             echo $exp->format("Y"); 
                                          }else{
                                             echo "Present";
                                          }
                                       @endphp</span>
                                    </time>
                                    <h3>{{ $item->job_title }}</h3>
                                    <span class="education-company">{{ $item->company_name }}</span>
                                    <p>
                                        {{ $item->detail }}
                                    </p>
                                </div>    
                            @endforeach

                           </div>
                        </section>
                     </div>
                  </div>
               </div>
               @endcountdata
               
               @countdata($educations)
               <div id="education" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <section class="section padd-box">
                           <h2 class="text-upper">Education</h2>
                           <div class="education">
                              
                            @foreach ($educations as $item)
                                <div class="education-box">
                                    <time class="education-date" datetime="2014-01T2016-03">
                                       <span>@php $edu = new DateTime($item->from_date); echo $edu->format("Y"); @endphp</strong> - 
                                          @php 
                                             if($item->to_date){
                                                $edu = new DateTime($item->to_date); 
                                                echo $edu->format("Y"); 
                                             }else{
                                                echo "Present";
                                             }
                                          @endphp</span>
                                    </time>
                                    <h3>{{ $item->degree_name }}</h3>
                                    <span class="education-company">{{ $item->institution_name }}</span>
                                    <p>
                                        {{ $item->detail }}
                                    </p>
                                </div>    
                            @endforeach

                           </div>
                        </section>
                     </div>
                  </div>
               </div>
               @endcountdata

               @countdata($award)
               <div id="award" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <section class="section padd-box">
                           <h2 class="text-upper">Award</h2>
                           <table class="table table-borderless text-center">
                              <thead>
                                 @foreach ($award as $item)
                                    <tr>
                                       <th>
                                          <i class="{{ $item->icon }}"></i>
                                          <h3>{{ $item->title }}</h3>
                                          <p>{{ $item->detail }}</p>
                                       </th>
                                    </tr>                
                                 @endforeach
                              </thead>
                           </table>
                        </section>
                     </div>
                  </div>
               </div>
               @endcountdata

               @countdata($testimonial)
               <div id="testimonial" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <section class="section padd-box">
                           <h2 class="text-upper">Testimonials</h2>
                           <table class="table table-borderless text-center">
                              <thead>
                                 @foreach ($testimonial as $item)
                                    <tr>
                                       <th>
                                          <div class="">
                                             @if($item->thumb)
                                             <img src="{{ url("storage/".$item->thumb) }}">
                                             @endif
                                             <div class="">
                                                <h3>{{ $item->client_name }} - {{ $item->feedback_title }}</h3>
                                                <p>{{ $item->feedback }}</p>
                                             </div>
                                          </th>
                                          </div>
                                    </tr>                
                                 @endforeach
                              </thead>
                           </table>
                        </section>
                     </div>
                  </div>
               </div>
               @endcountdata

               @countdata($service)
               <div id="service" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <section class="section padd-box">
                           <h2 class="text-upper">Services</h2>
                           <table class="table table-borderless text-center">
                              <thead>
                                 @foreach ($service as $item)
                                    <tr>
                                       <th>
                                          <div>
                                             <i class="{{ $item->icon }}"></i>
                                             <h3>{{ $item->service_name }}</h3>
                                             <p>{{ $item->details }}</p>
                                          </div>
                                       </th>
                                    </tr>                
                                 @endforeach
                              </thead>
                           </table>
                        </section>
                     </div>
                  </div>
               </div>
               @endcountdata

               @countdata($portfolio)
               <div id="portfolio" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <section class="section padd-box">
                           <h2 class="text-upper">portfolio</h2>
                           <div class="pf-wrap">
                              <div class="pf-filter padd-box">
                                  <button data-filter="*">all</button>
                                  @foreach ($category_portfolio as $item)
                                  <button data-filter=".{{ str_replace(" ","_",$item->category_name) }}">{{ $item->category_name }}</button>
                                  @endforeach
                              </div>
                              <div class="pf-grid">
                                 <div class="pf-grid-sizer"></div>
                                 @foreach ($portfolio as $item)
                                 <div class="pf-grid-item {{ str_replace(" ","_",$item->portfolio_category->category_name) }}">
                                    <a class="pf-project" href="#pf-popup-1">
                                       <figure class="pf-figure">
                                          <img src="{{ url("storage/".$item->thumbnail) }}" alt="{{ $item->project_name }}">
                                       </figure>
                                       <div class="pf-caption text-center">
                                          <div class="valign-table">
                                             <div class="valign-cell">
                                                <h2 class="pf-title text-upper">{{ $item->project_name }}</h2>
                                                <div class="pf-text clear-mrg">
                                                   <p>{{ $item->details }}</p>
                                                </div>
                                                <button class="pf-btn btn btn-primary">View More</button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                    <div id="pf-popup-1" class="pf-popup clearfix">
                                       <div class="pf-popup-col2">
                                          <div class="pf-popup-info">
                                             <h2 class="pf-popup-title text-upper">{{ $item->project_name }}</h2>
                                             <div class="text-muted"><strong>{{ $item->portfolio_category->category_name }}</strong></div>
                                             <dl class="dl-horizontal">
                                                <dt>Date:</dt>
                                                <dd>{{ $item->from_date }}</dd>
                                                <dt>Site link:</dt>
                                                <dd><a href="{{ $item->project_url }}">{{ $item->project_url }}</a></dd>
                                                <dt>To date:</dt>
                                                <dd>{{ $item->to_date ?? "Present" }}</dd>
                                             </dl>
                                             <p>
                                                 {{ $item->details }}
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
               @endcountdata

               @countdata($references)
               <div id="references" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <section class="section padd-box">
                           <h2 class="text-upper">References</h2>
                           <div class="padd-box-sm clear-mrg">
                               @foreach ($references as $item)
                               <div class="ref-box brd-btm hreview">
                                <div class="ref-avatar">
                                    <img alt="" src="{{ "https://ui-avatars.com/api/?name=".$item->name."&color=7F9CF5&background=EBF4FF" }}" class="avatar avatar-54 photo" height="54" width="54">
                                 </div>
                                <div class="ref-info">
                                   <div class="ref-author">
                                      <strong>{{ $item->name }}</strong>
                                      <span>{{ $item->email }}</span>
                                      <span>{{ $item->phone }}</span>
                                    </div>
                                   <blockquote class="ref-cont clear-mrg">
                                      <p>{{ $item->details }}</p>
                                   </blockquote>
                                </div>
                             </div>
                               @endforeach
                           </div>
                        </section>
                     </div>
                  </div>
               </div>   
               @endcountdata

               @countdata($clients)
               <div id="client"  class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                           <section class="section padd-box">
                              <h2 class="text-upper">Clients</h2>
                              <div class="padd-box-sm">
                                 <ul class="clients">
                                    @foreach ($clients as $item)
                                    <li>
                                       <a target="_blank" href="{{ $item->url }}">
                                       @if($item->thumbnail)
                                       <img src="{{ asset("storage/".$item->thumbnail) }}" alt="{{ $item->client_name }}">
                                       @endif
                                       {{ $item->client_name }}</a>
                                    </li>
                                    @endforeach
                                 </ul>
                              </div>
                           </section>
                        </div>
                     </div>
                  </div>
               @endcountdata

               @countdata($blog)
               <div id="blog" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <section class="section padd-box">
                           <h2 class="text-upper">Blogs</h2>
                           <div class="padd-box-sm clear-mrg">
                              @foreach ($blog as $item)
                              <div class="ref-box brd-btm hreview">
                                 <a target="_blank" href="{{ $item->url }}">
                                    @if($item->thumbnail)
                                    <div class="ref-avatar">
                                       <img src="{{ url("storage/".$item->thumbnail) }}" class="avatar avatar-54 photo" height="54" width="54">
                                    </div>
                                    @endif
                                    <div class="ref-info">
                                       <div class="ref-author">
                                          <strong>{{ $item->title }}</strong>
                                          <span>{{ $item->blog_categories->category_name }}</span>
                                          <span>{{ $item->tags }}</span>
                                       </div>
                                       <blockquote class="ref-cont clear-mrg">
                                          <p>{{ $item->description }}</p>
                                       </blockquote>
                                    </div>
                                 </a>
                              </div>
                              @endforeach
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
               @endcountdata

               @countdata($interest)
               <div id="interest" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <section class="section padd-box">
                           <h2 class="text-upper">Interest</h2>
                           <table class="table table-borderless text-center">
                              <thead>
                                 @foreach ($interest as $item)
                                 <tr>
                                    <th>
                                       <div class="">
                                          <h5>{{ $item->title }}</a>
                                          <p style="margin-top: 10px">{{ $item->details }}</p>
                                       </div>
                                    </th>
                                 </tr> 
                              @endforeach
                              </thead>
                           </table>
                        </section>
                     </div>
                  </div>
               </div>
               @endcountdata


               @groupfeature('Appointments System')
               <div id="appointment" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <div class="padd-box" id="contact">
                           <h2 class="title-lg title-thin text-muted">Appointment</h2>
                           <div class="padd-box-xs">
                              <header class="contact-head">
                                 <h3 class="title text-upper">fell free to set appointment</h3>
                              </header>
                           </div>
                           <div class="padd-box-sm">
                              <form action="{{ route("appointment_store",$user->username) }}" method="post" class="contact-form">
                                 @csrf
                                 <div class="form-group">
                                    <label class="form-label" for="title">Title</label>
                                    <div class="form-item-wrap">
                                       <input id="title" value="{{ old("title") }}" name="title" class="form-item" type="text" required>
                                       @error('title')
                                           <small style="color: red">{{ $message }}</small>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="email">Your E-mail</label>
                                    <div class="form-item-wrap">
                                       <input id="email" value="{{ old("email") }}" name="email" class="form-item" type="email" required="required">
                                       @error('email')
                                           <small style="color: red">{{ $message }}</small>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="book_date">Date</label>
                                    <div class="form-item-wrap">
                                       <input id="book_date" value="{{ old("book_date") }}" name="book_date" class="form-item" type="date" required="required">
                                       @error('book_date')
                                           <small style="color: red">{{ $message }}</small>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="book_time_start">From time</label>
                                    <div class="form-item-wrap">
                                       <input id="book_time_start" value="{{ old("book_time_start") }}" name="book_time_start" class="form-item" type="time" required="required">
                                       @error('book_time_start')
                                           <small style="color: red">{{ $message }}</small>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="book_time_end">To time</label>
                                    <div class="form-item-wrap">
                                       <input id="book_time_end" value="{{ old("book_time_end") }}" name="book_time_end" class="form-item" type="time" required="required">
                                       @error('book_time_end')
                                           <small style="color: red">{{ $message }}</small>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-submit form-item-wrap">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Send appointment">
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endgroupfeature

               @groupfeature('Contact System')
               <div id="contact" class="crt-paper-layers crt-animate">
                  <div class="crt-paper clearfix">
                     <div class="crt-paper-cont paper-padd clear-mrg">
                        <div class="padd-box">
                           <h2 class="text-upper">contact me</h2>
                           <div class="padd-box-xs">
                              <header class="contact-head">
                                 <ul class="crt-social clear-list text-primary">
                                    @if($user->profile->facebook)
                                    <li><a href="{{ $user->profile->facebook }}"><span class="crt-icon crt-icon-facebook"></span></a></li>
                                    @endif
      
                                    @if($user->profile->twitter)
                                    <li><a href="{{ $user->profile->twitter }}"><span class="crt-icon crt-icon-twitter"></span></a></li>
                                    @endif
      
                                    @if($user->profile->whatapp)
                                    <li><a href="{{ $user->profile->whatapp }}"><span class="crt-icon crt-icon-whatsapp"></span></a></li>
                                    @endif
      
                                    @if($user->profile->instagram)
                                    <li><a href="{{ $user->profile->instagram }}"><span class="crt-icon crt-icon-instagram"></span></a></li>
                                    @endif
      
                                    @if($user->profile->linkedin)
                                    <li><a href="{{ $user->profile->linkedin }}"><span class="crt-icon crt-icon-linkedin"></span></a></li>
                                    @endif
                                 </ul>
                                 <h3 class="title text-upper">fell free to contact me the core of your marketing</h3>
                              </header>
                           </div>
                           <div class="padd-box-sm">
                              <form action="{{ route("contact_store",$user->username) }}" method="post" class="contact-form">
                                 @csrf
                                 <div class="form-group">
                                    <label class="form-label" for="name">Your Name</label>
                                    <div class="form-item-wrap">
                                       <input id="name" value="{{ old("name") }}" name="name" class="form-item" type="text" required>
                                       @error('name')
                                           <small style="color: red">{{ $message }}</small>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="email">Your E-mail</label>
                                    <div class="form-item-wrap">
                                       <input id="email" value="{{ old("email") }}" name="email" class="form-item" type="email" required="required">
                                       @error('email')
                                           <small style="color: red">{{ $message }}</small>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="subject">Subject</label>
                                    <div class="form-item-wrap">
                                       <input id="subject" value="{{ old("subject") }}" class="form-item" type="text" name="subject">
                                       @error('subject')
                                           <small style="color: red">{{ $message }}</small>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="message">Message</label>
                                    <div class="form-item-wrap">
                                       <textarea id="message" name="message" class="form-item">{{ old("message") }}</textarea>
                                       @error('message')
                                           <small style="color: red">{{ $message }}</small>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-submit form-item-wrap">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Send">
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endgroupfeature
            </div>
         </div>
         <footer id="crt-footer" class="crt-container-lg">
            <div class="crt-container">
               <div class="crt-container-sm clear-mrg text-center">
                  <p>Resumenya @ All Rights Reserved 2022</p>
               </div>
            </div>
         </footer>
         <svg id="crt-bg-shape-1" class="hidden-sm hidden-xs" height="519" width="758">
            <polygon class="pol" points="0,455,693,352,173,0,92,0,0,71" />
         </svg>
         <svg id="crt-bg-shape-2" class="hidden-sm hidden-xs" height="536" width="633">
            <polygon points="0,0,633,0,633,536" />
         </svg>
      </div>
      @endlayout
      @layout(2)
      <div class="crt-wrapper">
         <header id="crt-header">
            <div class="crt-head-inner crt-container">
               <div class="crt-container-sm">
                  <div class="crt-head-row">
                     <div id="crt-head-col1" class="crt-head-col text-left">
                        <a id="crt-logo" class="crt-logo" href="{{ route("profile",$user->username) }}">
                        <img src="{{ asset("assets/resume/formal") }}/assets/images/uploads/brand/logo.svg" alt="certy resume"><span>.Certy</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <nav id="crt-nav-sm" class="crt-nav hidden-lg hidden-md"> 
               <ul class="clear-list">
                  <li>
                     <a href="{{ route("profile",$user->username) }}" data-tooltip="Home"><img class="avatar avatar-42" src="{{ $user->profile_photo_path ? url("storage/".$user->profile_photo_path) : "https://ui-avatars.com/api/?name=".$user->profile->first_name. " " . $user->profile->last_name ."&color=7F9CF5&background=EBF4FF" }}"></a>
                  </li>
                  @countdata($experiences)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#experience" data-tooltip="Experience"><span class="crt-icon crt-icon-experience"></span></a>
                  </li>
                  @endcountdata
                  @countdata($educations)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#education" data-tooltip="Education"><span class="crt-icon crt-icon-suitcase"></span></a>
                  </li>
                  @endcountdata
                  @countdata($award)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#award" data-tooltip="Awards"><span class="crt-icon crt-icon-trophy"></span></a>
                  </li>
                  @endcountdata
                  @countdata($service)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#service" data-tooltip="Services"><span class="crt-icon crt-icon-search"></span></a>
                  </li>
                  @endcountdata
                  @countdata($testimonial)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#testimonial" data-tooltip="Testimonials"><span class="crt-icon crt-icon-headphones"></span></a>
                  </li>
                  @endcountdata
                  @countdata($portfolio)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#portfolio" data-tooltip="Portfolio"><span class="crt-icon crt-icon-portfolio"></span></a>
                  </li>
                  @endcountdata
                  @countdata($references)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#references" data-tooltip="References"><span class="crt-icon crt-icon-references"></span></a>
                  </li>
                  @endcountdata
                  @countdata($clients)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#client" data-tooltip="Client"><span class="crt-icon crt-icon-user"></span></a>
                  </li>
                  @endcountdata
                  @countdata($blog)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#blog" data-tooltip="Blogs"><span class="crt-icon crt-icon-blog"></span></a>
                  </li>
                  @endcountdata
                  @countdata($interest)
                  <li>
                     <a href="{{ route("profile",$user->username) }}#interest" data-tooltip="Interest"><span class="crt-icon crt-icon-heart-o"></span></a>
                  </li>
                  @endcountdata
                  @groupfeature('Appointments System')
                  <li>
                     <a href="{{ route("profile",$user->username) }}#appointment" data-tooltip="Appointment"><span class="crt-icon crt-icon-calendar"></span></a>
                  </li>
                  @endgroupfeature

                  @groupfeature('Contact System')
                  <li>
                     <a href="{{ route("profile",$user->username) }}#contact" data-tooltip="Contact"><span class="crt-icon crt-icon-contact"></span></a>
                  </li>
                  @endgroupfeature
               </ul>
            </nav>
         </header>
         <div id="crt-container" class="crt-container">
            <div id="crt-nav-wrap" class="hidden-sm hidden-xs">
               <div id="crt-nav-inner">
                  <div class="crt-nav-cont">
                     <div id="crt-nav-scroll">
                        <nav id="crt-nav" class="crt-nav">
                           <ul class="clear-list">
                              <li>
                                 <a href="{{ route("profile",$user->username) }}" data-tooltip="Home"><img class="avatar avatar-42" src="{{ $user->profile_photo_path ? url("storage/".$user->profile_photo_path) : "https://ui-avatars.com/api/?name=".$user->profile->first_name. " " . $user->profile->last_name ."&color=7F9CF5&background=EBF4FF" }}" alt=""></a>
                              </li>
                              @countdata($experiences)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#experience" data-tooltip="Experience"><span class="crt-icon crt-icon-experience"></span></a>
                              </li>
                              @endcountdata
                              @countdata($educations)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#education" data-tooltip="Education"><span class="crt-icon crt-icon-suitcase"></span></a>
                              </li>
                              @endcountdata
                              @countdata($award)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#award" data-tooltip="Awards"><span class="crt-icon crt-icon-trophy"></span></a>
                              </li>
                              @endcountdata
                              @countdata($service)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#service" data-tooltip="Services"><span class="crt-icon crt-icon-search"></span></a>
                              </li>
                              @endcountdata
                              @countdata($testimonial)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#testimonial" data-tooltip="Testimonials"><span class="crt-icon crt-icon-headphones"></span></a>
                              </li>
                              @endcountdata
                              @countdata($portfolio)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#portfolio" data-tooltip="Portfolio"><span class="crt-icon crt-icon-portfolio"></span></a>
                              </li>
                              @endcountdata
                              @countdata($references)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#references" data-tooltip="References"><span class="crt-icon crt-icon-references"></span></a>
                              </li>
                              @endcountdata
                              @countdata($clients)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#client" data-tooltip="Client"><span class="crt-icon crt-icon-user"></span></a>
                              </li>
                              @endcountdata
                              @countdata($blog)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#blog" data-tooltip="Blogs"><span class="crt-icon crt-icon-blog"></span></a>
                              </li>
                              @endcountdata
                              @countdata($interest)
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#interest" data-tooltip="Interest"><span class="crt-icon crt-icon-heart-o"></span></a>
                              </li>
                              @endcountdata
                              @groupfeature('Appointments System')
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#appointment" data-tooltip="Appointment"><span class="crt-icon crt-icon-calendar"></span></a>
                              </li>
                              @endgroupfeature

                              @groupfeature('Contact System')
                              <li>
                                 <a href="{{ route("profile",$user->username) }}#contact" data-tooltip="Contact"><span class="crt-icon crt-icon-contact"></span></a>
                              </li>
                              @endgroupfeature
                           </ul>
                        </nav>
                     </div>
                     <div id="crt-nav-tools" class="hidden">
                        <span class="crt-icon crt-icon-dots-three-horizontal"></span>
                        <button id="crt-nav-arrow" class="clear-btn">
                        <span class="crt-icon crt-icon-chevron-thin-down"></span>
                        </button>
                     </div>
                  </div>
                  <div class="crt-nav-btm"></div>
               </div>
            </div>
            <div class="crt-container-sm">
               <div class="crt-paper-layers">
                  <div class="crt-paper clear-mrg">
                     <section class="section">
                        <div class="crt-card crt-card-wide bg-primary text-center">
                           <div class="crt-card-avatar">
                              <img class="avatar avatar-195" src="{{ $user->profile_photo_path ? url("storage/".$user->profile_photo_path) : "https://ui-avatars.com/api/?name=".$user->profile->first_name. " " . $user->profile->last_name ."&color=7F9CF5&background=EBF4FF" }}" width="195" height="195" alt="">
                           </div>
                           <div class="crt-card-info">
                              <h2 class="text-upper">{{$user->profile->first_name}} {{ $user->profile->last_name }}</h2>
                              {{-- <p class="text-muted">Florist | Decorator</p> --}}
                              <ul class="crt-social clear-list">
                                 @if($user->profile->facebook)
                                 <li><a href="{{ $user->profile->facebook }}"><span class="crt-icon crt-icon-facebook"></span></a></li>
                                 @endif
   
                                 @if($user->profile->twitter)
                                 <li><a href="{{ $user->profile->twitter }}"><span class="crt-icon crt-icon-twitter"></span></a></li>
                                 @endif
   
                                 @if($user->profile->whatapp)
                                 <li><a href="{{ $user->profile->whatapp }}"><span class="crt-icon crt-icon-whatsapp"></span></a></li>
                                 @endif
   
                                 @if($user->profile->instagram)
                                 <li><a href="{{ $user->profile->instagram }}"><span class="crt-icon crt-icon-instagram"></span></a></li>
                                 @endif
   
                                 @if($user->profile->linkedin)
                                 <li><a href="{{ $user->profile->linkedin }}"><span class="crt-icon crt-icon-linkedin"></span></a></li>
                                 @endif
                              </ul>
                           </div>
                        </div>
                     </section>
                     <section class="section brd-btm padd-box">
                        <div class="row">
                           @if (session('success'))
                           <div class="col-sm-12 clear-mrg" style="margin-bottom: 20px;background-color: #00b894;border-radius:10px;padding:20px">
                              {{ session('success') }}
                           </div>
                           @endif
                           <div class="col-sm-12 clear-mrg text-box">
                              <h2 class="title-lg text-upper">About Me</h2>
                              <p><b>Helo, I’m {{$user->profile->first_name}} {{ $user->profile->last_name }}!</b><br>
                                 {{ $user->profile->about_me }}
                              </p>
                           </div>
                           <div class="col-sm-12" style="margin-top: 20px">
                              <div class="row">
                                 <div class="col-sm-6 clear-mrg">
                                    <h2 class="title-thin text-muted">personal information</h2>
                                    <dl class="dl-horizontal clear-mrg">
                                       <dt class="text-upper">Full Name</dt>
                                          <dd>{{ $user->profile->first_name . " " . $user->profile->last_name }}</dd>
                                          
                                          @if($user->profile->country)
                                          <dt class="text-upper">Nationality</dt>
                                          <dd>{{ $user->profile->country->name }}</dd>
                                          @endif
                                          @if($user->profile->address)
                                          <dt class="text-upper">address</dt>
                                          <dd>{{ $user->profile->address }}
                                          </dd>
                                          @endif
                                          
                                          @if($user->profile->email)
                                          <dt class="text-upper">e-mail</dt>
                                          <dd><a href="{{ $user->profile->email }}"><span class="__cf_email__" data-cfemail="c0b2afa2a5b2b4b3ada9b4a880a3afadb0a1aeb9eea3afad">{{ $user->profile->email }}</span></a></dd>
                                          @endif
      
                                          @if($user->phone)
                                          <dt class="text-upper">phone</dt>
                                          <dd>{{ $user->profile->phone }}</dd>
                                          @endif
                                    </dl>
                                 </div>
                                 @countdata($languages)
                                    <div class="col-sm-6 clear-mrg">
                                       <h2 class="title-thin text-muted">languages</h2>
                                       @foreach ($languages as $item) 
                                       <div class="progress-bullets crt-animate" role="progressbar" aria-valuenow="{{ $item->level }}" aria-valuemin="0" aria-valuemax="{{ $item->level }}">
                                          <strong class="progress-title">{{ $item->title }}</strong>
                                          <span class="progress-bar">
                                          @for ($i = 0; $i < 10; $i++)
                                              @if($i."0" < $item->level)
                                              <span class="bullet fill"></span>
                                              @else
                                              <span class="bullet"></span>
                                              @endif
                                          @endfor
                                          </span>
                                          <span class="progress-text text-muted">native</span>
                                       </div>
                                       @endforeach
                                    </div>
                                 @endcountdata
                              </div>
                           </div>
                        </div>
                     </section>
                     @countdata($skill)
                     <section class="section brd-btm padd-box" id="skill">
                        <div class="row">
                           <div class="col-sm-12 clear-mrg" style="margin-bottom: 20px">
                              <h2 class="title-thin text-muted">professional skills</h2>
                           </div>
                           @foreach ($skill as $item)
                           <div class="col-sm-6 clear-mrg">
                              <p>{{ $item->skill_name }}</p>
                              @foreach ($item->skill as $skill_set)
                              <div class="progress-line crt-animate" role="progressbar" aria-valuenow="{{ $skill_set->skill_level }}" aria-valuemin="0" aria-valuemax="100">
                                 <strong class="progress-title">{{ $skill_set->skill_name }}</strong>
                                 <div class="progress-bar" data-text="{{ $skill_set->skill_level }}%" data-value="{{ $skill_set->skill_level/100 }}"></div>
                              </div>
                              @endforeach
                           </div>
                           @endforeach
                        </div>
                     </section>
                     @endcountdata

                     @countdata($experiences)
                     <section class="section padd-box" id="experience">
                        <h2 class="text-upper">work experience</h2>
                        <div class="education">
                           
                         @foreach ($experiences as $item)
                             <div class="education-box">
                                 <time class="education-date" datetime="2014-01T2016-03">
                                 <span>@php $exp = new DateTime($item->from_date); echo $exp->format("Y"); @endphp</strong> - 
                                    @php 
                                       if($item->to_date){
                                          $exp = new DateTime($item->to_date); 
                                          echo $exp->format("Y"); 
                                       }else{
                                          echo "Present";
                                       }
                                    @endphp</span>
                                 </time>
                                 <h3>{{ $item->job_title }}</h3>
                                 <span class="education-company">{{ $item->company_name }}</span>
                                 <p>
                                     {{ $item->detail }}
                                 </p>
                             </div>    
                         @endforeach

                        </div>
                     </section>
                     @endcountdata
                     
                     @countdata($educations)
                        <section class="section padd-box" id="education">
                           <h2 class="text-upper">Education</h2>
                           <div class="education">
                              
                           @foreach ($educations as $item)
                              <div class="education-box">
                                    <time class="education-date" datetime="2014-01T2016-03">
                                    <span>@php $edu = new DateTime($item->from_date); echo $edu->format("Y"); @endphp</strong> - 
                                       @php 
                                          if($item->to_date){
                                             $edu = new DateTime($item->to_date); 
                                             echo $edu->format("Y"); 
                                          }else{
                                             echo "Present";
                                          }
                                       @endphp</span>
                                    </time>
                                    <h3>{{ $item->degree_name }}</h3>
                                    <span class="education-company">{{ $item->institution_name }}</span>
                                    <p>
                                       {{ $item->detail }}
                                    </p>
                              </div>    
                           @endforeach

                           </div>
                        </section>
                     @endcountdata

                     @countdata($interest)
                     <section class="section brd-btm padd-box" id="interest">
                        <div class="row">
                           <div class="col-sm-12 clear-mrg">
                              <h2 class="title-thin text-muted">interests</h2>
                              <ul class="icon-list icon-list-col3 clearfix">
                                 @foreach ($interest as $item)
                                 <li><span class="{{ $item->icon }}"></span> <h5>{{ $item->title }}</h5></li>
                                 @endforeach
                              </ul>
                           </div>
                        </div>
                     </section>
                     @endcountdata
                     
                     @countdata($award)
                     <section class="section padd-box" id="award">
                        <h2 class="title-thin text-muted">Awards and Achievements</h2>
                        <div class="row">
                           <div class="col-sm-12 clear-mrg">
                              <table class="table table-borderless text-center">
                                 <thead>
                                    @foreach ($award as $item)
                                       <tr>
                                          <th>
                                             <i class="{{ $item->icon }}"></i>
                                             <h5>{{ $item->title }}</h5>
                                             <p>{{ $item->detail }}</p>
                                          </th>
                                       </tr>                
                                    @endforeach
                                 </thead>
                              </table>
                           </div>
                        </div>
                     </section>
                     @endcountdata

                     @countdata($testimonial)
                     <section class="section padd-box" id="testimonial">
                        <h2 class="title-thin text-muted">Testimonials</h2>
                        <div class="row">
                           <div class="col-sm-12 clear-mrg">
                              <table class="table table-borderless text-center">
                                 <thead>
                                    @foreach ($testimonial as $item)
                                       <tr>
                                          <th>
                                             <div class="">
                                                @if($item->thumb)
                                                <img src="{{ url("storage/".$item->thumb) }}">
                                                @endif
                                                <div class="">
                                                   <h3>{{ $item->client_name }} - {{ $item->feedback_title }}</h3>
                                                   <p>{{ $item->feedback }}</p>
                                                </div>
                                             </th>
                                             </div>
                                       </tr>                
                                    @endforeach
                                 </thead>
                              </table>
                           </div>
                        </div>
                     </section>
                     @endcountdata

                     @countdata($service)
                     <section class="section padd-box" id="service">
                        <h2 class="title-thin text-muted">Services</h2>
                        <div class="row">
                           <div class="col-sm-12 clear-mrg">
                              <table class="table table-borderless text-center">
                                 <thead>
                                    @foreach ($service as $item)
                                       <tr>
                                          <th>
                                             <div>
                                                <i class="{{ $item->icon }}"></i>
                                                <h5>{{ $item->service_name }}</h5>
                                                <p>{{ $item->details }}</p>
                                             </div>
                                          </th>
                                       </tr>                
                                    @endforeach
                                 </thead>
                              </table>
                           </div>
                        </div>
                     </section>
                     @endcountdata

                     @countdata($portfolio)
                     <section class="section" id="portfolio">
                        <h2 class="title-lg text-upper title-thin text-muted padd-box">portfolio</h2>
                        <div class="pf-wrap">
                           <div class="pf-filter padd-box">
                              <button data-filter="*" class="active">all</button>
                              @foreach ($category_portfolio as $item)
                                  <button data-filter=".{{ str_replace(" ","_",$item->category_name) }}">{{ $item->category_name }}</button>
                              @endforeach
                           </div>
                           <div class="pf-grid">
                              <div class="pf-grid-sizer"></div>
                              @foreach ($portfolio as $item)
                              <div class="pf-grid-item {{ str_replace(" ","_",$item->portfolio_category->category_name) }}">
                                 <a class="pf-project" href="#pf-popup-1">
                                    <figure class="pf-figure">
                                       <img src="{{ url("storage/".$item->thumbnail) }}" alt="{{ $item->project_name }}">
                                    </figure>
                                    <div class="pf-caption text-center">
                                       <div class="valign-table">
                                          <div class="valign-cell">
                                             <h2 class="pf-title text-upper">{{ $item->project_name }}</h2>
                                             <div class="pf-text clear-mrg">
                                                <p>{{ $item->details }}</p>
                                             </div>
                                             <button class="pf-btn btn btn-primary">View More</button>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                                 <div id="pf-popup-1" class="pf-popup clearfix">
                                    <div class="pf-popup-col2">
                                       <div class="pf-popup-info">
                                          <h2 class="pf-popup-title text-upper">{{ $item->project_name }}</h2>
                                          <div class="text-muted"><strong>{{ $item->portfolio_category->category_name }}</strong></div>
                                          <dl class="dl-horizontal">
                                             <dt>Date:</dt>
                                             <dd>{{ $item->from_date }}</dd>
                                             <dt>Site link:</dt>
                                             <dd><a href="{{ $item->project_url }}">{{ $item->project_url }}</a></dd>
                                             <dt>To date:</dt>
                                             <dd>{{ $item->to_date ?? "Present" }}</dd>
                                          </dl>
                                          <p>
                                              {{ $item->details }}
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </section>
                     @endcountdata

                     @countdata($references)
                        <section class="section padd-box" id="references">
                           <h2 class="title-thin text-muted">References</h2>
                           <div class="padd-box-sm clear-mrg">
                               @foreach ($references as $item)
                               <div class="ref-box brd-btm hreview">
                                <div class="ref-avatar">
                                    <img alt="" src="{{ "https://ui-avatars.com/api/?name=".$item->name."&color=7F9CF5&background=EBF4FF" }}" class="avatar avatar-54 photo" height="54" width="54">
                                 </div>
                                <div class="ref-info">
                                   <div class="ref-author">
                                      <strong>{{ $item->name }}</strong>
                                      <span>{{ $item->email }}</span>
                                      <span>{{ $item->phone }}</span>
                                    </div>
                                   <blockquote class="ref-cont clear-mrg">
                                      <p>{{ $item->details }}</p>
                                   </blockquote>
                                </div>
                             </div>
                               @endforeach
                           </div>
                        </section>
                     @endcountdata
                     
                     @countdata($clients)
                        <section id="client" class="section clear-mrg padd-box">
                           <h2 class="title-thin text-muted">Clients</h2>
                           <div class="padd-box-sm">
                              <ul class="clients">
                                @foreach ($clients as $item)
                                 <li>
                                    <a target="_blank" href="{{ $item->url }}">
                                    @if($item->thumbnail)
                                    <img src="{{ asset("storage/".$item->thumbnail) }}" alt="{{ $item->client_name }}">
                                    @endif
                                    {{ $item->client_name }}</a>
                                 </li>
                                 @endforeach
                              </ul>
                           </div>
                        </section>
                     @endcountdata

                     @countdata($blog)
                        <section id="blog" class="section clear-mrg padd-box">
                           <h2 class="title-thin text-muted">Blogs</h2>
                           <div class="padd-box-sm clear-mrg">
                              @foreach ($blog as $item)
                              <div class="ref-box brd-btm hreview">
                                 <a target="_blank" href="{{ $item->url }}">
                                    @if($item->thumbnail)
                                    <div class="ref-avatar">
                                       <img src="{{ url("storage/".$item->thumbnail) }}" class="avatar avatar-54 photo" height="54" width="54">
                                    </div>
                                    @endif
                                    <div class="ref-info">
                                       <div class="ref-author">
                                          <strong>{{ $item->title }}</strong>
                                          <span>{{ $item->blog_categories->category_name }}</span>
                                          <span>{{ $item->tags }}</span>
                                       </div>
                                       <blockquote class="ref-cont clear-mrg">
                                          <p>{{ $item->description }}</p>
                                       </blockquote>
                                    </div>
                                 </a>
                              </div>
                              @endforeach
                          </div>
                        </section>
                     @endcountdata
                     
                     @groupfeature('Appointments System')
                     <div class="padd-box" id="appointment">
                        <h2 class="title-lg title-thin text-muted">Appointment</h2>
                        <div class="padd-box-xs">
                           <header class="contact-head">
                              <h3 class="title text-upper">fell free to set appointment</h3>
                           </header>
                        </div>
                        <div class="padd-box-sm">
                           <form action="{{ route("appointment_store",$user->username) }}" method="post" class="contact-form">
                              @csrf
                              <div class="form-group">
                                 <label class="form-label" for="title">Title</label>
                                 <div class="form-item-wrap">
                                    <input id="title" value="{{ old("title") }}" name="title" class="form-item" type="text" required>
                                    @error('title')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="form-label" for="email">Your E-mail</label>
                                 <div class="form-item-wrap">
                                    <input id="email" value="{{ old("email") }}" name="email" class="form-item" type="email" required="required">
                                    @error('email')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="form-label" for="book_date">Date</label>
                                 <div class="form-item-wrap">
                                    <input id="book_date" value="{{ old("book_date") }}" name="book_date" class="form-item" type="date" required="required">
                                    @error('book_date')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="form-label" for="book_time_start">From time</label>
                                 <div class="form-item-wrap">
                                    <input id="book_time_start" value="{{ old("book_time_start") }}" name="book_time_start" class="form-item" type="time" required="required">
                                    @error('book_time_start')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="form-label" for="book_time_end">To time</label>
                                 <div class="form-item-wrap">
                                    <input id="book_time_end" value="{{ old("book_time_end") }}" name="book_time_end" class="form-item" type="time" required="required">
                                    @error('book_time_end')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                 </div>
                              </div>
                              <div class="form-submit form-item-wrap">
                                 <input class="btn btn-primary btn-lg" type="submit" value="Send appointment">
                              </div>
                           </form>
                        </div>
                     </div>
                     @endgroupfeature

                     @groupfeature('Contact System')
                     <div class="padd-box" id="contact">
                        <h2 class="title-lg title-thin text-muted">contact me</h2>
                        <div class="padd-box-xs">
                           <header class="contact-head">
                              <ul class="crt-social clear-list text-primary">
                                 @if($user->profile->facebook)
                                 <li><a href="{{ $user->profile->facebook }}"><span class="crt-icon crt-icon-facebook"></span></a></li>
                                 @endif
   
                                 @if($user->profile->twitter)
                                 <li><a href="{{ $user->profile->twitter }}"><span class="crt-icon crt-icon-twitter"></span></a></li>
                                 @endif
   
                                 @if($user->profile->whatapp)
                                 <li><a href="{{ $user->profile->whatapp }}"><span class="crt-icon crt-icon-whatsapp"></span></a></li>
                                 @endif
   
                                 @if($user->profile->instagram)
                                 <li><a href="{{ $user->profile->instagram }}"><span class="crt-icon crt-icon-instagram"></span></a></li>
                                 @endif
   
                                 @if($user->profile->linkedin)
                                 <li><a href="{{ $user->profile->linkedin }}"><span class="crt-icon crt-icon-linkedin"></span></a></li>
                                 @endif
                              </ul>
                              <h3 class="title text-upper">fell free to contact me the core of your marketing</h3>
                           </header>
                        </div>
                        <div class="padd-box-sm">
                           <form action="{{ route("contact_store",$user->username) }}" method="post" class="contact-form">
                              @csrf
                              <div class="form-group">
                                 <label class="form-label" for="name">Your Name</label>
                                 <div class="form-item-wrap">
                                    <input id="name" value="{{ old("name") }}" name="name" class="form-item" type="text" required>
                                    @error('name')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="form-label" for="email">Your E-mail</label>
                                 <div class="form-item-wrap">
                                    <input id="email" value="{{ old("email") }}" name="email" class="form-item" type="email" required="required">
                                    @error('email')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="form-label" for="subject">Subject</label>
                                 <div class="form-item-wrap">
                                    <input id="subject" value="{{ old("subject") }}" class="form-item" type="text" name="subject">
                                    @error('subject')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="form-label" for="message">Message</label>
                                 <div class="form-item-wrap">
                                    <textarea id="message" name="message" class="form-item">{{ old("message") }}</textarea>
                                    @error('message')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                 </div>
                              </div>
                              <div class="form-submit form-item-wrap">
                                 <input class="btn btn-primary btn-lg" type="submit" value="Send">
                              </div>
                           </form>
                        </div>
                     </div>
                     @endgroupfeature
                  </div>
               </div>
            </div>
         </div>
         <footer id="crt-footer" class="crt-container-lg">
            <div class="crt-container">
               <div class="crt-container-sm clear-mrg text-center">
                  <p>Resumenya @ All Rights Reserved 2022</p>
               </div>
            </div>
         </footer>
         <svg id="crt-bg-shape-1" class="hidden-sm hidden-xs" height="519" width="758">
            <polygon class="pol" points="0,455,693,352,173,0,92,0,0,71" />
         </svg>
         <svg id="crt-bg-shape-2" class="hidden-sm hidden-xs" height="536" width="633">
            <polygon points="0,0,633,0,633,536" />
         </svg>
      </div>
      @endlayout

      <div id="popup1" class="overlay" @if(request()->session()->get('visitor') == null) style="visibility: visible !important;opacity:1" @endif>
         <div class="popup" style="color:#333">
            <h3>Fill the form</h3>
            <div class="content">
               <div style="margin-bottom: 30px">
                  Masukan nama dan telp yang sama jika sudah pernah mengunjungi profile ini
              </div>
              <form method="POST" action="{{ route("visitor_store",$user->username) }}">
                  @csrf
                  <div class="form-group">
                     <div class="">
                        <label for="nama">Masukan nama</label>
                        <input id="nama" value="{{ old("nama") }}" name="nama" class="form-item" style="background-color: white !important;border-color:#95a5a6;border-radius:10px" placeholder="Masukan nama" type="text" required>
                        @error('nama')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="">
                        <label for="whatapp">Masukan nomor whatsapp</label>
                        <input id="whatapp" value="{{ old("whatapp") }}" name="whatapp" class="form-item" style="background-color: white !important;border-color:#95a5a6;border-radius:10px" placeholder="Masukan nomor whatsapp" type="text" required>
                        @error('whatapp')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                     </div>
                  </div>
                  <div style="display: flex;justify-content:end;margin-top:30px">
                     <input class="btn btn-primary btn-lg" type="submit" value="Send">
                  </div>
              </form>
            </div>
         </div>
      </div>

      <script>window.jQuery || document.write('<script src="{{ asset("assets/resume/formal") }}/assets/js/vendor/jquery-1.12.4.min.js"><\/script>')</script>
      @layout(1)
      <script type="text/javascript" src="{{ asset("assets/resume/casual") }}/assets/js/plugins.min.js"></script>
      <script type="text/javascript" src="{{ asset("assets/resume/casual") }}/assets/js/theme.min.js"></script>
      @endlayout
      @layout(2)
      <script type="text/javascript" src="{{ asset("assets/resume/formal") }}/assets/js/plugins.min.js"></script>
      <script type="text/javascript" src="{{ asset("assets/resume/formal") }}/assets/js/theme.min.js"></script>
      @endlayout
   </body>
</html>