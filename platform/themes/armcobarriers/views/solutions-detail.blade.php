<!---breadcrumb--->
@includeIf("theme.armcobarriers::views.modules.breadcrumb")
<!--end breadcrumb---->
<section class="section-armco">
    <div class="container-customize" id="install">
        <div class="wrap-top">
            <div class="top2 section-armco__titleSmall">
                <h1>{{ $solution->name}}</h1>
                <h4 class="section-armco__sub__title"> {{ get_field($solution, 'short_description') }}</h4>
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
<div class="service-detail-banner">
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
</div>
@else
<div class="container-customize">
    <p> Content updating </p>
</div>
@endif
@if(has_field($solution, 'long_description_solution'))
<div class="container-customize">
    <div class="service_detail-content ">
        {!! get_field($solution, 'long_description_solution') !!}
    </div>
</div>
@endif
<section class="section-armco">
    <div class="container-customize">
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
    </div>
</section>

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
<section class="mt-5 section-armco">
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.modules.form-signup")
    </div>
</section>
