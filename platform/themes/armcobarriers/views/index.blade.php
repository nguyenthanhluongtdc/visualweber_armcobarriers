<section>
    <div class="container-fluid-customize">
   
    <div  class="swiper-container mySwiper-home" style="--swiper-navigation-color:#FAD906; --swiper-pagination-color:#FAD906;">
        <div class="swiper-wrapper">
            @foreach (get_field($page, 'home_slide_main') as $item)
            <div class="swiper-slide">
                <div class="bg-slider" style="background-image:url({{get_object_image(get_sub_field($item , 'picture'))}})">
                    <div class="container-customize">
                        <div class="swiper-content">
                            <div class="logo-slider">
                                <img src="{{get_object_image(get_sub_field($item , 'logo'))}}" alt="">
                            </div>
                            <div class="title-slider">{{get_sub_field($item , 'slide_title')}}</div>
                            <div class="text-slider">
                                <p>{{get_sub_field($item , 'text_of_service')}}</p>
                                <p>
                                    {{get_sub_field($item , 'service_description')}}
                                </p>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            @endforeach
            
        </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div> 
        </div>        
    </div>
</section>

<section>
    <div class="location-office-wrapper">
        <div class="container-customize">
            <div class="location-office">
                <div class="left-content">
                    <div class="gallery__item">
                        <div class="gallery__item-group">
                            <img class="mw-100" src="{{ get_object_image(get_field( $page ,'logo'))}}" alt="">
                            <h2 data-aos="" data-aos-delay="200">{{ get_field( $page ,'asset_protection_solutions') }}</h2>
                        </div> 
                        <p  data-aos="" data-aos-delay="400">{{ get_field( $page ,'location') }}</p>
                    </div>
                </div>
                @foreach (get_field($page, 'lists_of_image') as $item)
                    <div class="grid__item">
                        <a href="">
                            <img class="img-background mw-100" src="{{ get_object_image(get_sub_field( $item ,'picture'))}}" alt="">
                           <div class="gallery__item-text">
                                <p>{{ get_sub_field( $item ,'location_text') }}</p>
                                <i class="fal fa-arrow-right"></i>
                            </div> 
                        </a>
                    </div>
                @endforeach
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
                    @foreach (get_field($page, 'product_range_home') as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-4 ">
                        <div class="post">
                            <div class="post-title">
                                <h3>{{get_sub_field($item, 'product_range_title')}}</h3>
                            </div>
                            <p>{!!get_sub_field($item, 'product_range_description')!!}</p>
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
                     <a href="/products">VIEW OUR PRODUCT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section >
   <div class="service-us-wrapper">
    <div class="container-customize">
        <div class="location-office">
            <div class="left-content">
                <div class="gallery__item">
                    <div class="gallery__item-group">
                        <img class="mw-100" src="{{ get_object_image(get_field( $page ,'logo_service'))}}" alt="">
                        <h2 data-aos="" data-aos-delay="200">Services</h2>
                    </div> 
                    <p  data-aos="" data-aos-delay="400">{{get_field( $page ,'service')}}</p>
                </div>
            </div>
            @foreach(get_field($page, 'lists_of_image_service') as $item)
                <div class="grid__item">
                    <a href="">
                        <img class="img-background mw-100" src="{{ get_object_image(get_sub_field( $item ,'picture'))}}" alt="">
                       <div class="gallery__item-text">
                            <p>{{ get_sub_field( $item ,'service_name')}}</p>
                            <i class="fal fa-arrow-right"></i>
                        </div> 
                    </a>
                </div>
               
            
            @endforeach
        </div>

    </div>
</div>
 
</section>
<section>
    <div class="news-event-wrapper">
        <div class="container-customize">
            <div class="news-event--title">
                <h2 data-aos="" data-aos-delay="200">News <br>& Events</h2>
            </div>
            <div class="row">
                @foreach (get_post_is_featured() as $post)
                <div class="col-lg-4 col-sm-6 col-12 mb-lg-0 mb-5">
                    <div class="news-post" data-aos="" data-aos-delay="200">
                        <a href="/news-detail">
                            <img class="img-background" src="{{ RvMedia::getImageUrl($post->image) }}" alt="">
                        <div class="news-post--titlte">
                            <h4> {{ $post->name }}</h4>
                        </div>
                        <div class="news-post--content">
                            <p> {{ $post->description }}</p>
                        </div>
                        </a>
                        <div class="news-post-time">
                            <span>{{$post->created_at->format('j F Y') }}</span>
                            <div class="btn-share">
                                <a href="">Share <i class="fal fa-share-alt"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="read-more">
                <a href="{{url('/news-all')}}"><h3 data-aos="" data-aos-delay="200">Read More</h3></a>
            </div>
                <div class="count">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 col-12">
                            <div class="box-count count-customers" data-aos="" data-aos-delay="400">
                                <h2>15,451</h2>
                                <p>Customers</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box-count count-completed" data-aos="" data-aos-delay="400">
                                <h2>125,451</h2>
                                <p>Completed projects</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box-count count-kilomet" data-aos="" data-aos-delay="400">
                                <h2>1,204</h2>
                                <p>Kilometres installed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="experience">
                    <div class="exp" data-aos="" data-aos-delay="200">
                        <p>At ARMCO® Barriers you deal with people specialising in the safety barrier industry with over 35 years experience. </p>
                    </div>
                </div>
        </div>
    </div>
</section>