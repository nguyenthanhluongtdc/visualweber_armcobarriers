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
                    <img src="" alt="" class="logo__link-image" />
                </a>
            </div>
            <nav class="nav">
                <ul class="nav__menu">
                    <li class="nav__menu-item">
                        <a href="#" class="nav__menu-link">Homepage</a>
                    </li>
                    <li class="nav__menu-item">
                        <a href="#" class="nav__menu-link">Product</a>
                    </li>
                </ul>
            </nav>
            <div class="toolbar">
                <ul class="toolbar__box">
                    <li class="toolbar__item"></li>
                    <li class="toolbar__item"></li>
                    <li class="toolbar__item"></li>
                    <li class="toolbar__item"></li>
                    <li class="toolbar__item"></li>
                </ul>
            </div>
        </header>
      
