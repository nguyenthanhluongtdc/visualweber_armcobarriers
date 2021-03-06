<!---breadcrumb--->
@includeIf("theme.armcobarriers::views.modules.breadcrumb")
<!--end breadcrumb---->
<section class="section-armco">
    <div class="container-customize" id="install">
        <div class="wrap-top">
            <div class="top2 section-armco__titleSmall">
                <h1>{{ $service->name}}</h1>
                <h4 class="section-armco__sub__title"> {{ get_field($service, 'short_description') }}</h4>
            </div>
        </div>
    </div>
</section>

<div class="services-detail-tabs main-scroll">
    <div class="left-tab-md tabs-scroll">
        <div class="container-customize">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    @if($tabs_services = get_services())
                    @foreach($tabs_services as $key => $tab)
                    <a class="nav-item nav-link <?php if($tab->name == $service['name']) { ?> active <?php } ?>" style="color:#000000" href="{{ $tab->url }}" title="{{ $tab->name }}">{{ $tab->name }}</a>
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
@if(!empty(get_field($service, 'banner_description')))
<div class="service-detail-banner">
    <div class="left col-md-10 col-12">
        <h4 class="left-title">
            {{ get_field($service, 'banner_title') }}
        </h4>
        <div class="desc">
            {!! get_field($service, 'banner_description') !!}
        </div>
    </div>
    <div class="right">
        <img src="{{ RvMedia::getImageUrl(get_field($service, 'big_picture')) }}" alt="{{ get_field($service, 'banner_title') }}">
    </div>
</div>
@else
<div class="container-customize">
    <p> Content updating </p>
</div>
@endif

<div class="container-customize">
    <div class="service_detail-content ">
        {!! get_field($service, 'long_description') !!}
    </div>
</div>
<div class="service_detail-imglist container-customize">
    <?php if(!empty(get_field($service, 'service_list'))) { ?>
    @foreach (get_field($service, 'service_list') as $item2)
    <div class="item_img" style="background-image: url('{{ RvMedia::getImageUrl(get_sub_field($item2, 'image')) }}')">
        <a href="{{get_sub_field($item2,'link')}}" title="{{get_sub_field($item2,'title')}}">
            <h5> {{get_sub_field($item2,'title')}}</h5>
            <p>{!!get_sub_field($item2,'description')!!}</p>

        </a>
    </div>
    @endforeach
    <?php } ?>
</div>


<section class="section-armco">
    <div class="container-customize">
        <?php if(!empty(get_field($service, 'product_quality_16233289513'))) { ?>
        <div class="wrap-product-quality">
            <div class="product-quality section-armco__header__title">
                <h2>{{ get_field($service, 'block_title') }}</h2>
                <p>{{ get_field($service, 'short_description_16233289512') }}</p>
            </div>
            <div class="row">
                @foreach (get_field($service, 'product_quality_16233289513') as $item)
                <div class="col-md-4 item_img_sv">
                    <h3 class="section-armco__header__column">
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
<section class="section-armco">
    <div class="container-customize">
        <div class="wrap-product">
            <div class="wrap2 my-5">
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
