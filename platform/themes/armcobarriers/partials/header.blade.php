<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}" rel="stylesheet" type="text/css">
        <!-- CSS Library-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script  type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <style>
            :root {
                --primary-color: {{ theme_option('primary_color', '#ff2b4a') }};
                /* --primary-font: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif; */
            }
        </style>

        {!! Theme::header() !!}
    </head>
    <body class="contaier-fluid-customize" @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
        {!! apply_filters(THEME_FRONT_BODY, null) !!}
        <header class="header">
            <div class="contaier-fluid-customize">     
                        {{-- <nav class="navbar navbar-expand-lg">
                            <a href="/" class="logo__link">
                                <img src="{{ Theme::asset()->url('images/header/logo.png') }}" alt="">
                            </a>
                            
                            <div class="toolbar-mobile">
                              <ul class="list-tool">
                                  <li>
                                    <a href="tel:1800 808 619">
                                        <i class="fas fa-phone-alt"></i>
                                   
                                    </a>
                                  </li>
                                  <li>
                                    <a href="">
                                        <i class="fas fa-search"></i>
                                    </a>
                                  </li>
                                  <li>   
                                    <a href="{{route('public.cart')}}">
                                        <i class="fal fa-shopping-cart"></i>
                                        <span class="header__cart-notice">0</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="">
                                        <i class="fal fa-user"></i>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                  </li>
                              </ul>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            
                                <li class="nav-link nav-item active">
                                    <a href="/" class="nav__menu-link">Homepage</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/about-us" class="nav__menu-link">About Us</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/products" class="nav__menu-link">Products</a>
                                </li>
                                <li class="nav-link nav-item dropdown dmenu">
                                    <a id="nav-bar-dropdown" class=" nav__menu-link dropdown-toggle" data-toggle="dropdown" href="/product">Products</a>
                                    <div class="dropdown-menu sm-menu">
                                        <div class="row">
                                            <div class="col-md-12">
                                               <div class="title-product">
                                                <p>ARMCO® Barriers can provide all of your barrier and protection requirements with our vast and readily available product range.
                                                   
                                                </p>
                                                <p> We are the specialists in custom designing barrier systems for unusual and non-standard applications.</p>
                                                <p>
                                                    Please browse through our product range and select the product of interest from the menu above. 
                                                </p> 
                                               </div>
                                            </div>
                        
                                
                                        </div>
                                        <div class="row">
                                           <div class="col-md-12">
                                               <div class="row">
                                                   <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li class="active">
                                                              <div class="category-type">
                                                                  <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Guardrail - Railgard TM </a>
                                                                <i class="fal fa-angle-right"></i>
                                                              </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#Bollards" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Bollards</a>
                                                              <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Bridge Rail - Bridgegard TM</a>
                                                              <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Wire Rope</a>
                                                              <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Post & Post with Base</a>
                                                              <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cornagard TM</a>
                                                              <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Wheelgard TM</a>
                                                              <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Speedgard TM</a>
                                                              <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Floorgard TM</a>
                                                              <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Handrail </a>
                                                              <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pipegard TM</a>
                                                              <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Delineators</a>
                                                              <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                        <li class="">
                                                            <div class="category-type">
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Temporary Barrier</a>
                                                                <i class="fal fa-angle-right"></i>
                                                            </div> 
                                                        </li>
                                                    </ul>
                                                   </div>
                                                   <div class="col-md-4 ">
                                                        <ul class="list-unstyled list-categories collapse show" id="homeSubmenu" style="">
                                                            <li>
                                                                <a href="#">Guardrail - RailgardTM-Curving </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Guardrail - Railgard curvature details</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Guardrail - Measuring Curvature</a>
                                                            </li>
                                                            <li>
                                                            <a href="#">Guardrail -  RailgardTM-Drawings</a>
                                                            </li>
                                                            <li>
                                                            <a href="#">Multiple Height Guardrail</a>
                                                            </li>
                                                            <li>
                                                            <a href="#">Guardrail End Treatments</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">National Guardrail Applications</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Armco Corner Treatments</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Armco End Treatments</a>
                                                            </li>
                                                        </ul>
                                                   </div>
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/services" class="nav__menu-link">Services</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/applications" class="nav__menu-link">Applications</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/gallery" class="nav__menu-link">Gallery</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/news-media" class="nav__menu-link">News,Events &Media</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/contact-us" class="nav__menu-link">Contact Us</a>
                                </li>
                            </ul>             
                            </div>
                        </nav> --}}
                        {!!
                            Menu::renderMenuLocation('main-menu', [
                                'options' => [],
                                'theme' => true,
                                'view' => 'custom-menu',
                            ])
                        !!}
                        <div class="toolbar">
                            <div class="left">
                                <div class="left-1">
                                    <a href="tel:1800 808 619">
                                        <i class="fas fa-phone-alt"></i>
                                        <span>1800 808 619</span>
                                    </a>
                                </div>
                                <div class="left-2">
                                    <a href="">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="right">
                                <a href="{{route('public.cart')}}">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span class="header__cart-notice">0</span>
                                </a>
                                <a href="">
                                    <i class="fal fa-user"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                        </div>
            </div>
        </header>
        <div class="overlay_background"></div>    

      
