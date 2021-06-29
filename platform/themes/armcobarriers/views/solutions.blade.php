@php $soluton_first = []; @endphp

<section class="section-armco">
    @includeIf("theme.armcobarriers::views.modules.breadcrumb")
    <div class="wrap-top">
        <div class="container-customize">
            <div class="top2 section-armco__titleSmall">
                <h1>{{$page->name}}</h1>
                <h4 class="section-armco__sub__title"> {{$page->description}} </h4>
            </div>
        </div>
    </div>
</section>

<div class="services-detail-tabs main-scroll">
    <div class="left-tab-md tabs-scroll">
        <div class="container-customize">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    @if($tabs_solutions = get_solutions())
                    @if(!empty($tabs_solutions[0]))
                    @php $soluton_first = $tabs_solutions[0]; @endphp
                    @foreach($tabs_solutions as $key => $tab)
                    <a class="nav-item nav-link {{$key==0?'active':''}} " style="color:#000000" href="{{ $tab->url }}" title="{{ $tab->name }}">{{ $tab->name }} </a>
                    @endforeach
                    @endif
                    @endif
                </div>
            </nav>
        </div>
    </div>
</div>

@if(!empty($soluton_first))
@if(!empty(get_field($soluton_first, 'banner_description_solution')))
<div class="service-detail-banner">
    <div class="left col-md-10 col-12">
        <h4 class="left-title">
            {{ get_field($soluton_first, 'banner_title_solution') }}
        </h4>
        <div class="desc">
            {!! get_field($soluton_first, 'banner_description_solution') !!}
        </div>
    </div>
    <div class="right">
        <img src="{{ RvMedia::getImageUrl(get_field($soluton_first, 'big_picture_solution')) }}" alt="">
    </div>
</div>
@else
<div class="container-customize">
    <p> Content updating </p>
</div>
@endif
@endif

<section class="section-armco">
    <div class="container-customize">
        @if(has_field($page, 'roadside_solutions'))
        <div class="roadside-solutions general-section">
            @foreach(get_field($page, 'roadside_solutions') as $sub)
            <div class="item">
                <div class="box-img">
                    <img src="{{rvMedia::getImageUrl(get_sub_field($sub, 'img'))}}" alt="" />
                </div>
                <div class="content">
                    <h5 class="section-armco__header__column"> {{get_sub_field($sub, 'title')}} </h5>
                    {!!get_sub_field($sub, 'content')!!}
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

<section style="padding-top:4%" class="section-armco">
    <div class="container-customize">
        <div class="wrap-product">
            <div class="product-range section-armco__header__title">
                <h2>{{_('Product Range')}}</h2>
                <p>{{_('Roadside, Car Parks, Warehouses')}}</p>
            </div>
            <div class="wrap-descrip">
                <div class="row">
                    @if(has_field($page, 'product_range_solutions'))
                    @foreach (get_field($page, 'product_range_solutions') as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-4 ">
                        <div class="post">
                            <div class="section-armco__header__column">
                                <h3>{{get_sub_field($item ,'product_range_title')}}</h3>
                            </div>
                            {!!get_sub_field($item ,'product_range_description')!!}
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
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
<section class="section-armco">
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.modules.form-signup")
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
