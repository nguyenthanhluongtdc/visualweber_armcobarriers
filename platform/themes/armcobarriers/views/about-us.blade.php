@php
if(has_field($page, 'about_us'))
$tabs_about = get_field($page, 'about_us');
@endphp
@includeIf("theme.armcobarriers::views.modules.breadcrumb")
<section class="section-armco">
    <div class="container-customize">
        <div class="wrap-top">
            <div class="cont2 section-armco__titleSmall">
                <h1>{{$page->name}}</h1>
                <h2 class="section-armco__sub__title">{{$page->description}}</h2>
            </div>
        </div>
    </div>
</section>

<div class="tab-content tabs-about wrap-cont" id="nav-tabContent">
    <div class="container-fluid-customize h-100">
        <div class="image-main">
            {{-- <img src="{{ get_object_image(has_field( $page ,'about_us_banner') ? get_field( $page ,'about_us_banner'):'')}}"
            alt=""> --}}
            <img src="https://armcobarriers.dev.gistensal.com/storage/about-us/banner-2a.jpg" alt="">
        </div>

        <div class="content-about d-flex align-items-center h-100">
            <div class="container-customize h-100">
                <div class="d-flex align-items-center h-100">
                   
                    <div class="col-xl-9 col-lg-8 col-12 content">
                        <div class="bg-opacity">
                        
                        </div>
                        {!!has_field($page, 'about_us_banner_description') ?
                        get_field($page, 'about_us_banner_description'):''!!}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-armco">
    <div class="container-customize">
        <div class="wrap-product">
            <div class="whatwedo section-armco__header__titleSmall" id="whatwedo">
                <h2> {{_('What We Do')}}</h2>
            </div>
            <div class="wrap1">
                <div class="row">
                    @if(has_field($page, 'what_we_do'))
                    @foreach (get_field($page, 'what_we_do') as $item)
                    <div class="col-lg-4 col-md-6 design">
                        <h3 class="section-armco__header__column">{{get_sub_field($item , 'tabs_title')}}</h3>
                        {!!get_sub_field($item, 'tabs_description')!!}
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="wrap2">
                <div class="icon">
                    <i class="far fa-long-arrow-right"></i>
                </div>
                <div class="view">
                    <a href="{{route('public.products')}}"
                        title="{{route('public.products')}}">{{_('View our products')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-armco">
    <div class="container-customize" id="wrap-bot">
        <div class="wrap-bot">
            <div class="bot1">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-quality section-armco__header__titleSmall">
                            <h2>{!!has_field( $page ,'title') ? get_field( $page ,'title'):''!!}</h2>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="slogan">
                            {!! get_field( $page ,'description') ? get_field( $page ,'description'):''!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="bot2">
                <div class="row">
                    @if(has_field($page, 'key_feature'))
                    @foreach (get_field($page, 'key_feature') as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="product0">
                            <a href=" {{has_sub_field($item , 'link') ? get_sub_field($item , 'link'):''}}">
                                <img src="{{has_sub_field( $item ,'image') ? get_object_image(get_sub_field( $item ,'image')):''}}"
                                alt="{{get_sub_field($item , 'title')}}">
                            </a>
                          
                            
                            <h3 class="section-armco__header__column">
                                <a class="text-dark" href=" {{has_sub_field($item , 'link') ? get_sub_field($item , 'link'):''}}">
                                    {{has_sub_field($item , 'title') ? get_sub_field($item , 'title'):''}}
                                </a>
                            </h3>
                            {!!has_sub_field($item , 'description') ? get_sub_field($item , 'description'):''!!}
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-customize">
    @includeIf("theme.armcobarriers::views.modules.form-signup")
</div>