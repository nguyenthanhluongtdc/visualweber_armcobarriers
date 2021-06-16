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
                        {!!
                            Menu::renderMenuLocation('main-menu', [
                                'options' => [],
                                'theme' => true,
                                'view' => 'custom-menu',
                            ])
                        !!}
                        <div class="toolbar">
                           <div class="topp">
                            <div class="left">
                                <div class="left-1">
                                    <a href="tel:{{theme_option('hotline')}}">
                                        <i class="fas fa-phone-alt"></i>
                                        <span>{{theme_option('hotline')}}</span>
                                    </a>
                                </div>
                                <div class="left-2 hover_search">
                                      
                                    <i class="fas fa-search"></i>
                              
                                </div>
                                <div class="left-2 close_search">
                                
                                    <i class="fas fa-times"></i>
                            
                                </div>
                            </div>
                            <div class="right">
                                <a href="{{route('public.cart')}}" id="link-cart">
                                   <div id="reload"> 
                                       <i class="fal fa-shopping-cart"></i>
                                        <span class="header__cart-notice">{{Cart::instance('cart')->count()}}</span>
                                    </div>
                                </a>
                                <ul class="header_list">
                                    @if (!auth('customer')->check())
                                        <li><a href="{{ route('customer.login') }}"><span><i class="fal fa-user"></i></span></a></li>
                                    @else
                                        <li class="img-user"><a href="{{ route('customer.overview') }}"><img class="br2" src="{{ auth('customer')->user()->avatar_url }}" alt="{{ auth('customer')->user()->name }}" ></a></li>
                                        <li class="logout"><a href="{{ route('customer.logout') }}"><span>{{ __('Logout') }}</span></a></li>
                                    @endif
                                </ul>
                                <a href="{{theme_option('footer-social')}}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                           </div>
                           <div class="search_content">
                            <form action="{{ route('public.products') }}" method="GET">
                                <div class="search-box input-group">
                                    <input class="" name="q" value="{{ request()->input('q') }}" placeholder="{{ __('Search Product') }}..." required  type="text">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
            </div>
        </header>
        <div class="overlay_background"></div>    

      
        <script>

            $('.hover_search').click(function(){
                $('.search_content').show(200);
                $('.close_search').show();
                $('.hover_search').hide();
            })
            $('.close_search').click(function(){
                $('.search_content').hide(200);
                $('.close_search').hide();
                $('.hover_search').show();
            })
        </script>