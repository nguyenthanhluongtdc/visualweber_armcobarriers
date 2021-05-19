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
            <div class="logo">
                <a href="#" class="logo__link">
                    <img src="{{ Theme::asset()->url('images/header/logo.png') }}" alt="">
                </a>
            </div>
            <nav class="nav">
                <ul class="nav__menu">
                    <li class="nav__menu-item">
                        <a href="#" class="nav__menu-link">Homepage</a>
                    </li>
                    <li class="nav__menu-item">
                        <a href="#" class="nav__menu-link">About Us</a>
                    </li>
                    <li class="nav__menu-item">
                        <a href="#" class="nav__menu-link">Products</a>
                    </li>
                    <li class="nav__menu-item">
                        <a href="#" class="nav__menu-link">Service</a>
                    </li>
                    <li class="nav__menu-item">
                        <a href="#" class="nav__menu-link">Applications</a>
                    </li>
                    <li class="nav__menu-item">
                        <a href="#" class="nav__menu-link">Gallery</a>
                    </li>
                    <li class="nav__menu-item">
                        <a href="#" class="nav__menu-link">News,Events &Media</a>
                    </li>
                    <li class="nav__menu-item">
                        <a href="#" class="nav__menu-link">Contact Us</a>
                    </li>
                </ul>
            </nav>
            <div class="toolbar">
                    <div class="left">
                        <div class="left-1">
                            <img src="{{ Theme::asset()->url('images/header/iconphone.png') }}" alt="">
                            <span>1800 808 619</span>
                        </div>
                        <div class="left-2">
                            <img src="{{ Theme::asset()->url('images/header/iconfind.png') }}" alt="">
    
                        </div>
                    </div>
                    <div class="right">
                        <img src="{{ Theme::asset()->url('images/header/icon.png') }}" alt="">
                        <img src="{{ Theme::asset()->url('images/header/iconpeople.png') }}" alt="">
                        <img src="{{ Theme::asset()->url('images/header/iconfb.png') }}" alt="">
                    </div>
            </div>
        </header>
      
