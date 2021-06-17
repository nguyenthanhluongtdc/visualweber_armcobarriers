<section>
    <div class="container-customize" id="install">
        <div class="wrap-top">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Homepage</a></li>
                    <li class="breadcrumb-item"><a href="#">Service</a></li>
                    <li class="breadcrumb-item"> {{ $service['name']}}</li>
                </ol>
            </nav>
            
            <div class="top2">
                <h2>{{ $service-> name}}</h2>
                <p> {{ get_field($service, 'short_description') }}</p>
            </div>
            <!-- <img src="{{ RvMedia::getImageUrl(get_field($service, 'img_service_item')) }}" alt=""> -->
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
                    <a class="nav-item nav-link <?php if($tab->name == $service['name']) { ?> active <?php } ?>" style="color:#000000" href="{{ $tab->url }}">{{ $tab->name }}</a>
                    <!-- <img src="{{ RvMedia::getImageUrl(get_field($tab, 'img_service_item')) }}" alt=""> -->
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
<?php if(!empty(get_field($service, 'banner_description'))) {?>
<div class="service-detail-banner">
    <div class="left">
        <h4 class="left-title">
            {{ get_field($service, 'banner_title') }}
        </h4>
        <div class="desc">
            {!! get_field($service, 'banner_description') !!}
        </div>
    </div>
    <div class="right">
        <img src="{{ RvMedia::getImageUrl(get_field($service, 'big_picture')) }}" alt="">
    </div>
</div>
<?php } ?>

{{--
<div class="container-customize">
    <?php if(!empty(get_field($service, 'text_content_service_detail'))) { ?>
    <ul class="service_detail-content ">
        @foreach (get_field($service, 'text_content_service_detail') as $item)
        <li class="item">
            {{get_sub_field($item ,'text_column')}}
        </li>
        @endforeach
    </ul>
    <?php } ?>
</div>
--}}

<div class="service_detail-imglist container-customize">
    <?php if(!empty(get_field($service, 'img_list_service_detail'))) { ?>
    @foreach (get_field($service, 'img_list_service_detail') as $item2)
    <div class="item_img">
        <img src="{{ RvMedia::getImageUrl(get_sub_field($item2, 'img_detail_service')) }}" alt="">
        <h5> {{get_sub_field($item2,'text_img_service')}}</h5>
    </div>
    @endforeach
    <?php } ?>
</div>

<section>
    <div class="container-customize">
        <?php if(!empty(get_field($service, 'product_quality_16233289513'))) { ?>
        <div class="wrap-product-quality">
            <div class="product-quality">
                <h2>{{ get_field($service, 'block_title') }}</h2>
                <p>{{ get_field($service, 'short_description_16233289512') }}</p>
            </div>
            <div class="row">
                @foreach (get_field($service, 'product_quality_16233289513') as $item)
                    <div class="col-md-3 item_img_sv">
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
<section class="mt-5">
    <div class="container-customize">
        <div class="wrap-product">
            <div class="wrap2">
                <div class="icon">
                    <img src="{{ Theme::asset()->url('images/about/iconarrow.png') }}" alt="">
                </div>
                <div class="view">
                    <a href="{{route('public.products')}}">VIEW OUR PRODUCT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.modules.form-signup")
    </div>
</section>
