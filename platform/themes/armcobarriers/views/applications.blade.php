@php
if(has_field($page, 'applications'))
    $tabs_applications = get_field($page, 'applications');
@endphp
@includeIf("theme.armcobarriers::views.modules.breadcrumb")


<section>
    <div class="container-customize">
        <div class="wrap-top">
            <div class="decription">
                <p>{!!has_field($page,'descriptions') ? get_field($page,'descriptions'):''!!}</p>   
            </div>
        <div>
    </div>
</section>

<section  style="padding-bottom: 5%">
    <div class="services-detail-tabs main-scroll">
        <div class="left-tab-md tabs-scroll">
            <div class="container-customize">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        @foreach($tabs_applications as $key => $tab)
                            <a class="nav-item nav-link {{$key==0?'active':''}}" id="nav-company-profile" data-toggle="tab" href="#nav-tab{{$key}}" role="tab" aria-controls="nav-tab{{$key}}" aria-selected="true"> {{get_sub_field($tab,'tabs_title') ? get_sub_field($tab,'tabs_title'):''}} </a>
                        @endforeach
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="tab-content" id="nav-tabContent">
    @foreach($tabs_applications as $key => $tab)
        <div class="tab-pane fade {{$key==0?'active show':''}}" id="nav-tab{{$key}}" role="tabpanel" aria-labelledby="nav-tab{{$key}}-tab">
            <div class="container-fluid-customize">
                <div class="wrap-cont" style="background-image: url({{has_sub_field( $tab ,'picture') ? get_object_image(get_sub_field( $tab ,'picture')):''}})">
                    <div class="container-customize h-100">
                        <div class="content-about d-flex align-items-center h-100">
                            <div class="col-lg-6" style="font-size:17px;color:#fff;font-weight:$Arial">
                                <p>{!!has_sub_field($tab, 'tabs_description') ? get_sub_field($tab, 'tabs_description'):''!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</section>

<section>
    <div class="container-customize">
        <div class="wrap-3img">
            <div class="row">
                @if(has_field($page, 'applications_demonstration_image'))
            @foreach (get_field($page, 'applications_demonstration_image') as $item) 
                <div class="col-md-4 col-12 pic mb-md-0 mb-4">
                    <img src="{{get_sub_field( $item ,'picture') ? get_object_image(get_sub_field( $item ,'picture')):''}}" alt="">
                </div>
            @endforeach
            @endif
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-customize">
        <div class="pls">
            <p>Please <a href="{{route('public.single').'/'.get_slug_by_template('contact-us')}}">contact us</a>  with any enquiries you may have.</p>
        </div>
    </div>
</section>
<section class="mt-lg-6 mt-4">
    <div class="container-customize">
        <div class="wrap-product">
            <div class="product-range mb-lg-5 mb-4">
                <h2>Product Range</h2>
                <p>Roadside, Car Parks, Warehouses</p>
            </div>
            <div class="wrap-descrip pb-0 pb-md-5">
                <div class="row">
                    @if(has_field($page, 'product_range_16227107061'))
                @foreach (get_field($page, 'product_range_16227107061') as $item) 
                    <div class="col-lg-3 col-sm-6 col-12 mb-lg-0 mb-3">
                        <div class="post post-applications">
                            <div class="post-title">
                                <h3>{{get_sub_field($item , 'product_range_title') ? get_sub_field($item , 'product_range_title'):''}}</h3>
                            </div>
                            <p>{!!get_sub_field($item , 'product_range_description') ? get_sub_field($item , 'product_range_description'):''!!}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
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
<section class="mt-4">
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.modules.form-signup")
    </div>
</section>