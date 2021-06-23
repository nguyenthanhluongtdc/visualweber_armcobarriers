<section>
    <div class="container-fluid-customize">
   
    <div  class="swiper-container mySwiper-home" style="--swiper-navigation-color:#FAD906; --swiper-pagination-color:#FAD906;">
        <div class="swiper-wrapper">
            @if(has_field($page, 'home_slide_main'))
            @foreach (get_field($page, 'home_slide_main') as $item)
            <div class="swiper-slide">
                <div class="bg-slider" style="background-image:url({{ has_sub_field($item , 'picture') ? get_object_image(get_sub_field($item , 'picture')) :''}})">
                    <div class="container-customize">
                        <div class="swiper-content">
                            <div class="logo-slider">
                                <img src="{{has_sub_field($item , 'logo') ? get_object_image(get_sub_field($item , 'logo')):''}}" alt="logo">
                            </div>
                            <div class="title-slider">{{get_sub_field($item , 'slide_title') ? get_sub_field($item , 'slide_title'):''}}</div>
                            <div class="text-slider">
                                <p>{{has_sub_field($item , 'text_of_service') ? get_sub_field($item , 'text_of_service') : ''}}</p>
                                <p>
                                    {{ get_sub_field($item , 'service_description') ? get_sub_field($item , 'service_description'):''}}
                                </p>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            @endforeach
            @endif
            
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
                            <img class="mw-100" src="{{has_field( $page ,'logo') ? get_object_image(get_field( $page ,'logo')):''}}" alt="logo">
                            <h2 data-aos="" data-aos-delay="200">{{has_field($page ,'asset_protection_solutions') ? get_field($page ,'asset_protection_solutions'):'' }}</h2>
                        </div> 
                        <p  data-aos="" data-aos-delay="400">{{has_field( $page ,'location') ? get_field( $page ,'location'):'' }}</p>
                    </div>
                </div>
                @foreach (get_field($page, 'lists_of_image') as $key=> $item)
                <div class="grid__item">
                    <a href="{{ has_sub_field($item,'link') ? get_sub_field($item,'link') :''}}" title="{{get_sub_field( $item ,'location_text')}}">
                        <img class="img-background mw-100" src="{{has_sub_field( $item ,'picture') ? get_object_image(get_sub_field( $item ,'picture')):''}}" alt="{{get_sub_field( $item ,'location_text')}}">
                       <div class="gallery__item-text">
                            <p>{{has_sub_field( $item ,'location_text')? get_sub_field( $item ,'location_text'):'' }}</p>
                            <i class="fal fa-arrow-right"></i>
                        </div> 
                    </a>
                </div>
                @endforeach
                @foreach(get_featured_solutions(3) as $key => $item_solution)
                <div class="grid__item">
                    <a href="{{$item_solution->url}}" title="{{$item_solution->name}}">
                        <img class="img-background mw-100 item_sv_home" src="{{ RvMedia::getImageUrl($item_solution->image)}}" alt="{{$item_solution->name}}">
                       <div class="gallery__item-text">
                            <p>{{$item_solution->name}}</p>
                            <i class="fal fa-arrow-right"></i>
                        </div> 
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
</section> 
<section style="padding-top:6%">
    <div class="container-customize">
        <div class="wrap-product">
            <div class="product-range">
                <h2>Product Range</h2>
            </div>
            <div class="wrap-descrip">
                <div class="row">
                    @if(has_field($page, 'product_range_home'))
                    @foreach (get_field($page, 'product_range_home') as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-4 fade-right">
                        <div class="post">
                            <div class="post-title">
                                <h3>{{has_sub_field($item, 'product_range_title') ? get_sub_field($item, 'product_range_title'):''}}</h3>
                            </div>
                            <p>{!!has_sub_field($item, 'product_range_description') ? get_sub_field($item, 'product_range_description'):''!!}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="wrap2 my-5">
                <div class="icon">
                    <i class="far fa-long-arrow-right"></i>
                </div>
                <div class="view">
                     <a href="{{route('public.products')}}" title="{{route('public.products')}}">VIEW OUR PRODUCTS</a>
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
                        <img class="mw-100" src="{{has_field( $page ,'logo_service') ? get_object_image(get_field( $page ,'logo_service')):''}}" alt="logo">
                        <h2 data-aos="" data-aos-delay="200">Services</h2>
                    </div> 
                    <p  data-aos="" data-aos-delay="400">{{get_field( $page ,'service') ? get_field( $page ,'service'):''}}</p>
                </div>
            </div>
            @foreach(get_services_latest() as $key1 => $item_service_latest)
                <div class="grid__item">
                    <a href="{{$item_service_latest->url}}" title="{{$item_service_latest->name}}">
                        <img class="img-background item_sv_home" src="{{RvMedia::getImageUrl(get_field($item_service_latest, 'img_service_item')) }}" alt="{{$item_service_latest->name}}">
                       <div class="gallery__item-text">
                            <p>{{$item_service_latest->name}}</p>
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
                @if(get_post_is_featured())
                @foreach (get_post_is_featured() as $post)
                <div class="col-lg-4 col-sm-6 col-12 mb-lg-0 mb-5">
                    <div class="news-post" data-aos="" data-aos-delay="200">
                        <a href="{{$post->url}}" title="{{ $post->name }}">
                            <img class="img-background" src="{{ RvMedia::getImageUrl($post->image) }}" alt="{{ $post->name }}">
                        <div class="news-post--titlte">
                            <h4> {{ $post->name }}</h4>
                        </div>
                        <div class="news-post--content">
                            <p> {{ $post->description }}</p>
                        </div>
                        </a>
                        <div class="news-post-time">
                            <span>{{$post->created_at->format('j F Y') }}</span>
                            <div class="fb-share-button btn-share" data-href="{{$post->url}}" target="_blank">
                                <span>Share <i class="fal fa-share-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

            <div class="read-more">
                <a href="{{ route('public.single').get_slug_by_template('News-media')}} " title="{{ route('public.single').get_slug_by_template('News-media')}}"><h3 data-aos="" data-aos-delay="200">Read More</h3></a>
            </div>
        </div>
    </div>
</section>

