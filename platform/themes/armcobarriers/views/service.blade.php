@php
    $service_first = [];
@endphp

<section>
    @includeIf("theme.armcobarriers::views.modules.breadcrumb")
    <div class="wrap-top">
        <div class="container-customize">
            <div class="top2">
                <h1>{{$page->name}}</h1>
                {{$page->description}}
            </div>
        </div>
    </div>
</section>

<div class="services-detail-tabs main-scroll">
    <div class="left-t
    ab-md tabs-scroll">
        <div class="container-customize">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    @if($tabs_services = get_services())
                        @php $service_first = $tabs_services[0]; @endphp
                        @foreach($tabs_services as $key => $tab)
                            <a class="nav-item nav-link {{$key==0?'active':''}}" style="color:#000000" href="{{ $tab->url }}" title=" {{ $tab->name }}">
                                {{ $tab->name }} 
                            </a>
                        @endforeach
                    @endif
                </div>
            </nav>
        </div>
    </div>
</div>

@if(!empty($service_first)) 
    @if(!empty(get_field($service_first, 'banner_description')))
        <div class="service-detail-banner">
            <div class="left col-md-10 col-12">
                <h4 class="left-title">
                    {{ get_field($service_first, 'banner_title') }}
                </h4>
                <div class="desc">
                    {!! get_field($service_first, 'banner_description') !!}
                </div>
            </div>
            <div class="right">
                <img src="{{ RvMedia::getImageUrl(get_field($service_first, 'big_picture')) }}" alt="{{ get_field($service_first, 'banner_title') }}">
            </div>
        </div>
    @else
        <div class="container-customize">
            <p> Content updating </p>
        </div>
    @endif
@endif

<section>
    <div class="container-customize">
        <div class="wrap-our">
            <div class="service ">
                <p>Warehouse, Industrial & Petrochemical Solutions</p>
            </div>
            <div class="row">
                @if($tabs_services =get_services_latest())
                @foreach($tabs_services as $key => $tab)
                <?php  if (!empty(get_field($tab, 'img_service_item'))) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 asset">
                        <a href="{{ $tab->url }}" title="link">
                            <div class="icon">
                                <i class="fal fa-long-arrow-right"></i>
                            </div>
                        </a>
                        <img src="{{ RvMedia::getImageUrl(get_field($tab, 'img_service_item')) }}" alt="">
                        <p> <a href="{{ $tab->url }}" title="{{ $tab->name }}">{{ $tab->name }}</a> </p>
                    </div>
                    <?php } ?>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<section style="padding-top:6%">
    <div class="container-fluid-customize">
        <div class="wrap-roadside" style="background-image:url({{ get_object_image(get_field( $page ,'services_solutions_picture'))}})">
            <div class="container-customize">
                <div class="content">
                    <h3> {{get_field( $page ,'services_solutions')}}</h3>
                    {!!get_field( $page ,'services_solutions_desc')!!}
                </div>
            </div>
        </div>
    </div>
</section>
<section style="padding-top:4%">
    <div class="container-customize">
        <div class="wrap-product">
            <div class="product-range">
                <h2>Product Range</h2>
                <p>Roadside, Car Parks, Warehouses</p>
            </div>
            <div class="wrap-descrip">
                <div class="row">
                    @foreach (get_field($page, 'product_range') as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-4 ">
                        <div class="post">
                            <div class="post-title">
                                <h3>{{get_sub_field($item ,'product_range_title')}}</h3>
                            </div>
                            {!!get_sub_field($item ,'product_range_description')!!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="wrap2 my-5">
                <div class="icon">
                    <i class="fal fa-arrow-right"></i>
                </div>
                <div class="view">
                    <a href="{{route('public.products')}}" title="{{route('public.products')}}">VIEW OUR PRODUCTS</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.modules.form-signup")
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
