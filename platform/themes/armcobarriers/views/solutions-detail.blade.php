<!---breadcrumb--->
@includeIf("theme.armcobarriers::views.modules.breadcrumb")
<!--end breadcrumb---->
<section class="section-armco">
    <div class="container-customize" id="install">
        <div class="wrap-top">
            <div class="top2 section-armco__titleSmall">
                <h1>{{ $solution->name}}</h1>
            </div>
        </div>
    </div>
</section>

<div class="services-detail-tabs main-scroll">
    <div class="left-tab-md tabs-scroll">
        <div class="container-customize">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    @if($tabs_services = get_solutions())
                    @foreach($tabs_services as $key => $tab)
                    <a class="nav-item nav-link <?php if($tab->name == $solution['name']) { ?> active <?php } ?>" style="color:#000000" href="{{ $tab->url }}" title="{{ $tab->name }}">{{ $tab->name }}</a>
                    @endforeach
                    @endif
                </div>
            </nav>
        </div>
    </div>

    <div class="item-tab-content right-tab-md">
        @includeIf("theme.armcobarriers::views.tab",['tabs'=> []])
    </div>
</div>
@if(!empty(get_field($solution, 'banner_description_solution')))
    {{-- <div class="service-detail-banner">
        <div class="left col-md-10 col-12">
            <h4 class="left-title">
                {{ get_field($solution, 'banner_title_solution') }}
            </h4>
            <div class="desc">
                {!! get_field($solution, 'banner_description_solution') !!}
            </div>
        </div>
        <div class="right">
            <img src="{{ RvMedia::getImageUrl(get_field($solution, 'big_picture_solution')) }}" alt="{{ get_field($solution, 'banner_title_solution') }}">
        </div>
    </div> --}}

    <div class="tab-content section-full background-n wrap-cont" id="nav-tabContent">
        <div class="container-fluid-customize h-100">

            @if(Storage::disk('public')->exists(get_field($solution, 'banner_title_solution')))
                <div class="image-main">
                    {{-- <img src="{{ get_object_image(has_field( $page ,'about_us_banner') ? get_field( $page ,'about_us_banner'):'')}}"
                    alt=""> --}}
                    <img src="{{ RvMedia::getImageUrl(get_field($solution, 'big_picture_solution')) }}" alt="{{ get_field($solution, 'banner_title_solution') }}">
                </div>

                @else 

                <div class="image-background"></div>
            @endif
    
            <div class="content-about d-flex align-items-center h-100">
                <div class="container-customize h-100">
                    <div class="d-flex align-items-center h-100">
                       
                        <div class="col-xl-9 col-lg-8 col-12 content">
                            <div class="bg-opacity">
                            
                            </div>
                            <h4 class="left-title">
                                {{ get_field($solution, 'banner_title_solution') }}
                            </h4>
                            <div class="desc">
                                {!! get_field($solution, 'banner_title_solution') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
<div class="container-customize">
    <p> Content updating </p>
</div>
@endif
<section class="section-armco">
    <div class="container-customize">
        @if(has_field($solution, 'solution_details_content'))
        <div class="roadside-solutions general-section">
            @if(has_field($solution, 'solution_details_content'))
            @foreach(get_field($solution, 'solution_details_content') as $sub)
            <div class="item">
                <div class="box-img">
                    <img src="{{rvMedia::getImageUrl(get_sub_field($sub, 'image'))}}" alt="">
                </div>
                <div class="content">
                    <h5> {{ has_sub_field($sub, 'title') ? get_sub_field($sub, 'title'):''}} </h5>
                    @if(has_sub_field($sub, 'content'))
                    {!!get_sub_field($sub, 'content')!!}
                    @endif
                </div>
            </div>
            @endforeach
            @endif
        </div>
        @endif
    </div>
</section>

@if(has_field($solution, 'description_16279739241'))
<div class="container-customize">
    <div class="service_detail-content">
        {!! get_field($solution, 'description_16279739241') !!}
    </div>
</div>
@endif

<div class="service_detail-imglist container-customize">
    <?php if(!empty(get_field($solution, 'service_list'))) { ?>
    @foreach (get_field($solution, 'solution_detail_content') as $item2)
    <div class="item_img" style="background-image: url('{{ RvMedia::getImageUrl(get_sub_field($item2, 'image')) }}')">
        <a href="{{get_sub_field($item2,'link')}}" title="{{get_sub_field($item2,'title')}}">
            <h5> {{get_sub_field($item2,'title')}}</h5>
            <p>{!!get_sub_field($item2,'Link')!!}</p>
        </a>
    </div>
    @endforeach
    <?php } ?>
</div>

@php 
    $galleries = gallery_meta_data($solution);
@endphp

@if(!empty($galleries))
    <div class="container-customize mt-5">
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                @foreach($galleries as $item)
                    <div class="swiper-slide">
                        <img src="{{rvMedia::getImageUrl($item['img'])}}" alt="">
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endif

{{-- @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($solution)))
  {!! render_object_gallery($galleries) !!}
@endif --}}

{{--
<section>
    <div class="container-customize">
        <?php if(!empty(get_field($solution, 'product_quality_solution'))) { ?>
        <div class="wrap-product-quality">
            <div class="product-quality section-armco__header__title">
                <h2>{{ get_field($solution, 'block_title_solution') }}</h2>
                <p>{{ get_field($solution, 'short_description_solution_detail') }}</p>
            </div>
            <div class="row">
                @foreach (get_field($solution, 'product_quality_solution') as $item)
                <div class="col-md-4 item_img_sv">
                    <h3 class="title">
                        {{get_sub_field($item,'title')}}
                    </h3>
                    <div class="desc">
                        {!!get_sub_field($item,'description')!!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<section class="mt-5 section-armco">
    <div class="container-customize">
        <div class="wrap-product">
            <div class="wrap2">
                <div class="icon">
                    <i class="fal fa-arrow-right"></i>
                </div>
                <div class="view">
                    <a href="{{route('public.products')}}" title="{{route('public.products')}}">{{_('View our products')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
--}}
<section class="mt-5 section-armco">
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.modules.form-signup")
    </div>
</section>

<style>

</style>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
    });
  </script>