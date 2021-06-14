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
                <h2>{{$page->name}}</h2>
                <p>{{$page->description}}</p>
            </div>
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
                    @foreach($tabs_services as $key => $tab)
                    <a class="nav-item nav-link {{$key==0?'active':''}} " style="color:#000000" href="{{ $tab->url }}">{{ $tab->name }}</a>
                    <!-- <img src="{{ RvMedia::getImageUrl(get_field($tab, 'img_service_item')) }}" alt=""> -->
                    @endforeach
                    @endif
                </div>
            </nav>
        </div>
    </div>


    {{-- <div class="item-tab-content right-tab-md">
        @includeIf("theme.armcobarriers::views.tab",['tabs'=>$tabs_services])
    </div> --}}
</div>
<?php $item_sv = get_field($page, 'services')[0]  ?>
    <div class="banner_section" style="background-image: url('{{ RvMedia::getImageUrl(get_sub_field($item_sv, 'picture')) }}')">
        <div class="container-customize">
            <h3 class="over_view"> {{ get_sub_field($item_sv, 'tabs_title') }} </h3>
            <div class="content">
                <?php $item_content =  get_sub_field($item_sv, 'description')[0] ?>
                <div class="desc">
                    {!! get_sub_field($item_content, 'description_text') !!}
                </div>
                <?php if(!empty(get_sub_field($item_content, 'description_colum'))) { ?>
                <div class="dev_3_column">
                    @foreach (get_sub_field($item_content, 'description_colum') as $item)
                       <div class="item_column">
                        <h5>{{ get_sub_field($item, 'title') }}</h5>
                        <p>{!! get_sub_field($item, 'description') !!}</p>
                       </div>
                    @endforeach
                </div>
                <?php } ?>
            </div>
        </div>
       
    </div>
    

<section>
    <div class="container-customize">
        <div class="wrap-our">
            <div class="service ">
                <p>Our's Services</p>
            </div>
            <div class="row">
                @if($tabs_services = get_services())
                @foreach($tabs_services as $key => $tab)
                <?php  if (!empty(get_field($tab, 'img_service_item'))) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 asset">
                        <a href="{{ $tab->url }}">
                            <div class="icon">
                                <i class="fal fa-long-arrow-right"></i>
                            </div>
                        </a>
                        <img src="{{ RvMedia::getImageUrl(get_field($tab, 'img_service_item')) }}" alt="">
                        <p>{{ $tab->name }}</p>
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
<section>
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