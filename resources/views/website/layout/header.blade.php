 <!-- header begin -->
 <div class="header header-style-1">
     <div class="top-header">
         <div class="container">
             <div class="row">
                 <div class="col-xl-9 col-lg-9">
                     <div class="top-left">
                         <div class="d-sm-flex">
                             <div class="header-txt pr-30"><i class="icofont-clock-time"></i>
                                 {{ site_setting('opening_time') }}
                             </div>
                             <div class="header-txt px-30"><a href="tel:+80012345676587"><i class="icofont-phone"></i>
                                     {{ site_setting('social_phone') }}</a></div>
                             <div class="header-txt pl-30"><i class="icofont-google-map"></i>
                                 {{ site_setting('location') }}</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-3">
                     <div class="top-right">
                         <div class="d-flex justify-content-lg-end justify-content-center">
                             {{-- Facebook --}}
                             @if (site_setting('social_fb'))
                                 <a href="{{ site_setting('social_fb') }}" class="header-right-txt" target="_blank">
                                     <i class="icofont-facebook-messenger"></i>
                                 </a>
                             @endif

                             {{-- Twitter --}}
                             @if (site_setting('social_twitter'))
                                 <a href="{{ site_setting('social_twitter') }}" class="header-right-txt"
                                     target="_blank">
                                     <i class="icofont-twitter"></i>
                                 </a>
                             @endif

                             {{-- Vimeo --}}
                             @if (site_setting('social_vimeo'))
                                 <a href="{{ site_setting('social_vimeo') }}" class="header-right-txt" target="_blank">
                                     <i class="icofont-vimeo"></i>
                                 </a>
                             @endif

                             {{-- Skype --}}
                             @if (site_setting('social_skype'))
                                 <a href="{{ site_setting('social_skype') }}" class="header-right-txt" target="_blank">
                                     <i class="icofont-skype"></i>
                                 </a>
                             @endif

                             {{-- RSS --}}
                             @if (site_setting('social_rss'))
                                 <a href="{{ site_setting('social_rss') }}" class="header-right-txt" target="_blank">
                                     <i class="icofont-rss"></i>
                                 </a>
                             @endif
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="bottom-header">
         <div class="container">
             <div class="row g-0 align-items-center">
                 <div class="col-xl-2 col-lg-2">
                     <div class="row align-items-center">
                         <div class="col-lg-12 col-6">
                             <div class="logo">
                                 <a href="/">
                                     <img src="{{ site_logo('logo_image') }}"
                                         alt="{{ site_setting('site_name', 'My Site') }}">
                                 </a>
                             </div>
                         </div>
                         <div class="d-lg-none d-flex justify-content-end col-6">
                             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                 aria-expanded="false" aria-label="Toggle navigation">
                                 <i class="icofont-navigation-menu"></i>
                             </button>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-8 col-lg-7">
                     <nav class="navbar navbar-expand-lg p-0">
                         <div class="container-fluid p-0">
                             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                 <ul class="navbar-nav m-auto p-30">
                                     <li class="nav-item">
                                         <a href="/">
                                             Home
                                         </a>

                                     </li>
                                     <li class="nav-item">
                                         <a href="/about">
                                             About
                                         </a>
                                     </li>
                                     <li class="nav-item
                                             dropdown">
                                         <a href="destinations" id="classDropdown" role="button"
                                             data-bs-toggle="dropdown" aria-expanded="false">
                                             Destinations
                                         </a>
                                         <ul class="dropdown-menu" aria-labelledby="classDropdown">
                                             @foreach (sub_menu('destination') as $destination)
                                                 <li><a
                                                         href="/destination/{{ $destination->slug }}">{{ $destination->title }}</a>
                                                 </li>
                                             @endforeach

                                         </ul>
                                     </li>
                                     <li class="nav-item
                                             dropdown">
                                         <a href="services" id="classDropdown" role="button" data-bs-toggle="dropdown"
                                             aria-expanded="false">
                                             Services
                                         </a>
                                         <ul class="dropdown-menu" aria-labelledby="classDropdown">
                                             @foreach (sub_menu('service') as $service)
                                                 <li><a href="/service/{{ $service->slug }}">{{ $service->title }}</a>
                                                 </li>
                                             @endforeach

                                         </ul>
                                     </li>
                                     <li class="nav-item">
                                         <a href="/contact">Contact</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </nav>
                 </div>

             </div>
         </div>
     </div>
 </div>
 <!-- header end -->
