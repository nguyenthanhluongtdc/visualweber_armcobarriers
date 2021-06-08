<section>
        <div class="wrap-top">
            <div class="container-customize">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Homepage</a></li>
                    <li class="breadcrumb-item">Services</li>
                  </ol>
                </nav> 
                <div class="top2">
                    <h2>ARMCO - Asset Protection Solutions</h2>
                    <p>Installation, Design Advice, Custom Manufacture</p>
                </div> 
            </div>
        </div>
    </div>
</section>

<div class="services-detail-tabs main-scroll">
    <div class="left-tab-md tabs-scroll">
        <div class="container-customize">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link"style="color:#000000" id="nav-overview-tab" data-toggle="tab" href="#nav-overview" role="tab" aria-controls="nav-overview" aria-selected="false">Overview</a>
                    <a class="nav-item nav-link"style="color:#000000" id="nav-installation-tab" data-toggle="tab" href="#nav-installation" role="tab" aria-controls="nav-installation" aria-selected="false">Installation</a>
                    <a class="nav-item nav-link"style="color:#000000" id="nav-request-tab" data-toggle="tab" href="#nav-request" role="tab" aria-controls="nav-request" aria-selected="false">Request a Quotation</a>
                    <a class="nav-item nav-link"style="color:#000000" id="nav-custom-tab" data-toggle="tab" href="#nav-custom" role="tab" aria-controls="nav-custom" aria-selected="false">Custom Manufacture</a>
                    <a class="nav-item nav-link active"style="background:none" id="nav-car-tab" data-toggle="tab" href="#nav-car" role="tab" aria-controls="nav-car" aria-selected="true">Car Parks</a>
                    <a class="nav-item nav-link"style="color:#000000" id="nav-factories-tab" data-toggle="tab" href="#nav-factories" role="tab" aria-controls="nav-factories" aria-selected="false">Factories & Industrial</a>
                    <a class="nav-item nav-link"style="color:#000000" id="nav-roadside-tab" data-toggle="tab" href="#nav-roadside" role="tab" aria-controls="nav-roadside" aria-selected="false">Roadside</a>
                </div>
            </nav>
        </div>
    </div>

    <div class="item-tab-content right-tab-md">
        @includeIf("theme.armcobarriers::views.tab")
    </div>
</div>

<section">
    <div class="container-customize">
        <div class="wrap-our">
            <div class="service ">
                <p>Our's Services</p>
            </div>
            <div class="row">
            @foreach (get_field($page, 'ours_service') as $item)
                <div class="col-lg-3 col-md-6 col-sm-6 asset">
                    <a href="/services-detail">
                        <div class="icon">
                            <i class="fal fa-long-arrow-right"></i>
                        </div>
                    </a>
                    <img src="{{ get_object_image(get_sub_field( $item ,'picture_service'))}}" alt="">
                            <p>{{get_sub_field($item , 'service_name')}}</p>
                </div>
               @endforeach
            </div>
        </div>
    </div>
</section>
<section style="padding-top:6%">
    <div class="container-fluid-customize">
        <div class="wrap-roadside"style="background-image:url({{ get_object_image(get_field( $page ,'services_solutions_picture'))}})">
            <div class="container-customize">
                <div class="content">
                    <h3> {{get_field( $page ,'services_solutions')}}</h3>
                    <p>{!!get_field( $page ,'services_solutions_desc')!!}</p>
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
                            <p>{!!get_sub_field($item ,'product_range_description')!!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="wrap2 my-5">
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
<section >
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.components.form-signup")
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // $(document).ready(function(){

    //     $widthWindow = $(window).width();
    //     if($widthWindow < 992){
    //         elem = $(".right-tab-md")[0];

    //         let resizeObserver = new ResizeObserver(() => {
    //             $('.left-tab-md').height($(".right-tab-md .active .content").height())
    //         });

    //         resizeObserver.observe(elem);
    //     }

    // })
</script>