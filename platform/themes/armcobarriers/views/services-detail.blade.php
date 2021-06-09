@php 
    $tabs_services_detail = get_field($page, 'services');

    $information_list = has_field($page, 'services_detail_list');

@endphp
<section >
    <div class="container-customize" id="install">
        <div class="wrap-top">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Homepage</a></li>
                <li class="breadcrumb-item"><a href="#">Service</a></li>
                <li class="breadcrumb-item">Installation</li>
              </ol>
            </nav> 
            <div class="top2">
                <h2>ARMCO® Services</h2>
                <p>Installation, Design Advice, Custom Manufacture</p>
            </div>
        </div>
    </div>
</section>

<div class="services-detail-tabs main-scroll">
    <div class="left-tab-md tabs-scroll">
        <div class="container-customize">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                @foreach($tabs_services_detail as $key => $tab)
                    <a class="nav-item nav-link {{$key==0?'active':''}} "style="color:#000000" id="nav-overview-tab" data-toggle="tab" href="#nav-tab{{$key}}" role="tab" aria-controls="nav-overview" aria-selected="false"> {{get_sub_field($tab, 'tabs_title')}} </a>
                @endforeach
                </div>
            </nav>
        </div>
    </div>

    <div class="item-tab-content right-tab-md">
        @includeIf("theme.armcobarriers::views.tab",['tabs'=>$tabs_services_detail])
    </div>
</div>


<section >
    <div class="container-customize">
        <div class="wrap-text list">
            <div class="row">
                @if(!empty($information_list))
                    @foreach($information_list as $item)
                        <div class="col-lg-6 col-md-6 col-12 text">
                            <code>
                            {!!has_sub_field($item, 'list')!!}
                            </code>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container-customize">
        <div class="wrap-pic">
            <div class="re-pow">
                @foreach (get_field($page, 'services_detail_image') as $item)
                <div class="request">
                    <img src="{{ get_object_image(get_sub_field( $item ,'image'))}}" alt="">
                    <h3>{{get_sub_field($item , 'title_image')}}</h3>
                </div>
                @endforeach
                {{-- <div class="powder">
                    <img src="{{ Theme::asset()->url('images/service-detail/powder.jpg') }}" alt="">
                    <h3>Powder-Coating</h3>
                </div>
            </div>
            <div class="cus-im">
                <div class="custom">
                    <img src="{{ Theme::asset()->url('images/service-detail/custom.jpg') }}" alt="">
                    <h3>Custom Manufacture & Design Advice</h3>
                </div>
               <div class="impact">
                <img src="{{ Theme::asset()->url('images/service-detail/impact.jpg') }}" alt="">
                <h3>Impact Force Calculator</h3>
               </div>
            </div> --}}
        </div>
    </div>
</section>
<section>
    <div class="container-customize">
        <div class="wrap-product-quality">
            <div class="product-quality">
                <h2>Product Quality</h2>
                <p>Roadside, Car Parks, Warehouses</p>
            </div>
            <div class="row">
                @foreach (get_field($page, 'product_quality') as $item)
                <div class="col-lg-3 col-md-6 australian">
                    <div class="title">
                        <h3>{{get_sub_field($item,'product_quality_title')}}</h3>
                       </div>
                    <p>{!!get_sub_field($item,'product_quality_description')!!}</p>
                </div>
                 @endforeach
            </div>
        </div>
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
                     <a href="/product">VIEW OUR PRODUCT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.components.form-signup")
    </div> 
</section>