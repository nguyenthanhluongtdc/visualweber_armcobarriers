
<!---breadcrumb--->
@includeIf("theme.armcobarriers::views.modules.breadcrumb")
<!--end breadcrumb---->
<section>
    <div class="container-customize" id="install">
        <div class="wrap-top">
            <div class="top2">

                <h2>{{ $solution->name}}</h2>
                <p> {{ get_field($solution, 'short_description') }}</p>
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
        <div class="left">
            <h4 class="left-title">
                {{ get_field($solution, 'banner_title_solution') }}
            </h4>
            <div class="desc">
                {!! get_field($solution, 'banner_description_solution') !!}
            </div>
        </div>
        <div class="right">
            <img src="{{ RvMedia::getImageUrl(get_field($solution, 'banner_description_solution')) }}" alt="">
        </div>
    </div>
@else
    <div class="container-customize">
         <p> Content updating </p>
    </div>
@endif

<div class="container-customize">
    <div class="service_detail-content ">
        {!! get_field($solution, 'long_description_solution') !!}
    </div>
</div>

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

{{-- <div class="service_detail-imglist container-customize">
    <?php if(!empty(get_field($service, 'service_list'))) { ?>
    @foreach (get_field($service, 'service_list') as $item2)
    <div class="item_img" style="background-image: url('{{ RvMedia::getImageUrl(get_sub_field($item2, 'image')) }}')">
        <a href="{{get_sub_field($item2,'link')}}" title="link">
            <h5> {{get_sub_field($item2,'title')}}</h5>
            <p>{!!get_sub_field($item2,'description')!!}</p>

        </a>
        
    </div>
    @endforeach
    <?php } ?>
</div> --}}


<section>
    <div class="container-customize">
        <?php if(!empty(get_field($solution, 'product_quality_solution'))) { ?>
        <div class="wrap-product-quality">
            <div class="product-quality">
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
<section class="mt-5">
    <div class="container-customize">
        <div class="wrap-product">
            <div class="wrap2">
                <div class="icon">
                    <img src="{{ Theme::asset()->url('images/about/iconarrow.png') }}" alt="">
                </div>
                <div class="view">
                    <a href="{{route('public.products')}}" title="link">VIEW OUR PRODUCTS</a>
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
