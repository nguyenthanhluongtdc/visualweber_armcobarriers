@php
    $originalProduct = $product;
    $selectedAttrs = [];
    $productImages = $product->images;
    if ($product->is_variation) {
        $product = get_parent_product($product->id);
        $selectedAttrs = app(\Platform\Ecommerce\Repositories\Interfaces\ProductVariationInterface::class)
            ->getAttributeIdsOfChildrenProduct($originalProduct->id);
        if (count($productImages) == 0) {
            $productImages = $product->images;
        }
    }

    //get custom field tabs
    $hasFieldTabs = has_field($product, 'tabs_product');

    //create a new array tags
    $tags = [];
    foreach($product->tags as $tag) {
        array_push($tags, $tag->name);
    }

    //var_dump(Cart::instance('cart')->count()); exit();

@endphp

@includeIf("theme.armcobarriers::views.components.breadcrumb")

<div id="product_detail">
    <div class="container-customize">
        <div class="row">
            <div class="top_title col-md-12">
                <p>Product Range</p>
                <a href="">
                    <i class="fas fa-chevron-left"></i>
                    <span>Guardrail - Railgard curvature details</span>
                </a>
            </div>
           
            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
            <!---product infomation-->
            <div id="product_info" class="col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-6 gallery">
                        <div class="gallery-container">
                            <div class="swiper-container gallery-main">
                                <div class="swiper-wrapper">
                                @foreach($productImages as $img)
                                    <div class="swiper-slide">
                                        <img src="{{rvMedia::getImageUrl($img, 'product_detail')}}" alt="Slide 01">
                                    </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                @foreach($productImages as $thumb)
                                    <div class="swiper-slide">
                                        <img src="{{rvMedia::getImageUrl($thumb, 'product')}}" alt="Slide 01">
                                    </div>
                                @endforeach
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 info">
                        <p class="product_name"> {{$product->name}} </p>
                        <code>
                            @php 
                                echo $product->description
                            @endphp
                        </code>
                        <ul class="list_info">
                            <li>
                                <p>Model</p>
                                <p>{{ has_field($product, 'model_product') }}</p>
                            </li>
                            <li>
                                <p>Brand</p>
                                @if(!empty($product->brand))
                                    <p> {{$product->brand->name}} </p>
                                @endif
                            </li>
                            <li>
                                <p>Price</p>

                                @if ($originalProduct->front_sale_price !== $originalProduct->price)
                                    <del>{{ human_price_text($originalProduct->front_sale_price, "$") }}</del>
                                    <p>
                                        {{ human_price_text($originalProduct->front_sale_price, "$") }}
                                    </p>
                                @else
                                    <p>
                                        {{ human_price_text($originalProduct->price, "$")}}
                                    </p>
                                @endif
                            </li>
                            <li>
                                <p>Tags</p>
                                <p> {{implode(", ",$tags)}} </p>
                            </li>
                        </ul>
                        <form action="">
                            <div class="input_field">
                                <button class="minus">-</button>
                                <input class="quantity" min="0" title="Quantity" name="qty" value="1" type="number">
                                <button class="plus">+</button>
                            </div>
                            <button class="add_to_cart">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>

            <!---more info-->
            <div id="more_info" class=" col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-9 mb-5" id="tab">
                        <div class="row ml-0">
                            <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                                @if(!empty($hasFieldTabs))
                                    @foreach($hasFieldTabs as $key => $tab)
                                    <li class="nav-item">
                                        <a class="nav-link {{$key==0?'active':''}}" id="tab{{$key}}-tab" data-toggle="tab" href="#tab{{$key}}" role="tab" aria-controls="tab{{$key}}" aria-selected="true"> {{has_sub_field($tab,'tabs_title')}} </a>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            @if(!empty($hasFieldTabs))
                                @foreach($hasFieldTabs as $key => $tab)
                                    <div class="tab-pane fade {{$key==0?'active show':''}}" id="tab{{$key}}" role="tabpanel" aria-labelledby="tab{{$key}}-tab">
                                        {{has_sub_field($tab,'tabs_content')}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    @php
                        $relatedProducts = get_related_products($product);
                    @endphp
                    <div class="col-12 col-lg-3 mb-5">
                        <div id="related_products">
                            <p class="title">Related products</p>
                            @if(!empty($relatedProducts))
                                <div class="list_products row">
                                    @foreach ($relatedProducts as $related)
                                        @include('plugins/ecommerce::themes.includes.default-product', ['product' => $related])
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!--other product-->

            @php $other_product = get_other_products(5); @endphp
            <div id="other_products" class="col-12 col-sm-12 col-md-12">
                <p class="title">Other products</p>
                <div class="swiper-container otherSwiper">
                    <div class="swiper-wrapper list_products">
                        @foreach($other_product as $other_pro)
                            <div class="swiper-slide product_item">
                                <div class="box-img">
                                    <a href="{{ $other_pro->url }}"> <img class="img-fluid" src="{{rvMedia::getImageUrl($other_pro->image)}}" alt=""> </a>
                                    <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                                </div>
                                <p class="product_name"> <a href="{{ $other_pro->url }}"> {!! $other_pro->name !!} </a> </p>
                                <code class="description"> {!! $other_pro->description !!} </code> 
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Initialize Swiper -->
<script>
    $(document).ready(function() {
        $(window).resize(function() {
            $height = $('.gallery-main').height();
            console.log($height)
            $('.gallery-thumbs').height($height-62);
        });
        $(window).trigger('resize');

        $('button.minus').click(function(e) {
            e.preventDefault();
            document.querySelector('input[type="number"]').stepDown()
        })
        $('button.plus').click(function(e) {
            e.preventDefault();
            document.querySelector('input[type="number"]').stepUp()

        })
        var galleryThumbs = new Swiper(".gallery-thumbs", {
                centeredSlides: true,
                centeredSlidesBounds: true,
                slidesPerView: 3,
                watchOverflow: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                direction: 'vertical'
            });

            var galleryMain = new Swiper(".gallery-main", {
                watchOverflow: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                preventInteractionOnTransition: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                effect: 'fade',
                    fadeEffect: {
                    crossFade: true
                },
                thumbs: {
                    swiper: galleryThumbs
                }
            });

            galleryMain.on('slideChangeTransitionStart', function() {
            galleryThumbs.slideTo(galleryMain.activeIndex);
            });

            galleryThumbs.on('transitionStart', function(){
            galleryMain.slideTo(galleryThumbs.activeIndex);
        });

        var otherSwiper = new Swiper(".otherSwiper", {
            slidesPerView: 1.5,
            spaceBetween: 10,
            breakpoints: {
            "320": {
                slidesPerView: 1.5,
                spaceBetween: 10,
            },
            "480": {
                slidesPerView: 2.5,
                spaceBetween: 10,
            },
            "640": {
                slidesPerView: 3.5,
                spaceBetween: 10,
            },
            "992": {
                slidesPerView: 5.5,
                spaceBetween: 10,
            },
            }
        });
    })
</script>