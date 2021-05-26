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
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <i class="fas fa-bars"></i>
                            </button>
                            <a href="#" class="logo__link">
                                <img src="{{ Theme::asset()->url('images/header/logo.png') }}" alt="">
                            </a>
                          
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                {{-- <li class="nav-item active">
                                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link disabled" href="#">Disabled</a>
                                </li> --}}
                                <li class="nav-link nav-item">
                                    <a href="/" class="nav__menu-link">Homepage</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/about" class="nav__menu-link">About Us</a>
                                </li>
                                <li class="nav-link nav-item dropdown dmenu">
                                    <a href="/product" class="nav__menu-link">Products</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/service" class="nav__menu-link">Service</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/application" class="nav__menu-link">Applications</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/gallery" class="nav__menu-link">Gallery</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/news" class="nav__menu-link">News,Events &Media</a>
                                </li>
                                <li class="nav-link nav-item ">
                                    <a href="/contact-us" class="nav__menu-link">Contact Us</a>
                                </li>
                            </ul>             
                            </div>
                        </nav>
                        <div class="toolbar">
                            <div class="left">
                                <div class="left-1">
                                    <a href="">
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
                                <a href="">
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
      
