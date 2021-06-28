@php $soluton_first = []; @endphp

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

{{-- <section>
    <div class="container-customize">
        <div class="wrap-our">
            <div class="service ">
                <p>{{_('Warehouse, Industrial & Petrochemical Solutions')}}</p>
</div>
<div class="row">
    @if($tabs_solutions = get_solutions_latest())
    @foreach($tabs_solutions as $key => $tab)
    <div class="col-lg-3 col-md-6 col-sm-6 asset">
        <a href="{{ $tab->url }}" title="{{ $tab->name }}">
            <div class="icon">
                <i class="fal fa-long-arrow-right"></i>
            </div>
        </a>
        <img src="{{ RvMedia::getImageUrl($tab->image)}}" alt="{{ $tab->name }}">
        <p>
            <a href="{{ $tab->url }}" title="{{ $tab->name }}">{{ $tab->name }}</a>
        </p>
    </div>
    @endforeach
    @endif
</div>
</div>
</div>
</section> --}}

<section style="padding-top:6%" class="roadside-solutions">
    <div class="container-customize">
        {!!get_field( $page ,'field_des_solutions')!!}
    </div>
</section>

<section style="padding-top:4%">
    <div class="container-customize">
        <div class="wrap-product">
            <div class="product-range">
                <h2>{{_('Product Range')}}</h2>
                <p>{{_('Roadside, Car Parks, Warehouses')}}</p>
            </div>
            <div class="wrap-descrip">
                <div class="row">
                    @if(has_field($page, 'product_range_solutions'))
                    @foreach (get_field($page, 'product_range_solutions') as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-4 ">
                        <div class="post">
                            <div class="post-title">
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
<section>
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.modules.form-signup")
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<style>
    .roadside-solutions ul {
        margin: revert;
        padding: revert;
    }

    .roadside-solutions td {
        padding-left: 10px;
    }

</style>
