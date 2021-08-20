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

@includeIf("theme.armcobarriers::views.modules.breadcrumb")

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
<div id="product_detail">
    <div class="container-customize">
        <div class="row">
            <div class="top_title col-md-12">
                <h3>Product Range</h3>
                @if($category)
                <a href="{{$category->url}}" title="{{$category->name}}">
                    <i class="fas fa-chevron-left"></i>
                    <span class="section-armco__header__column">{!! $category->name !!}</span>
                </a>
                @endif
            </div>

            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
            <!---product infomation-->
            <div id="product_info" class="col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="row ml-0">
                            <div id="large-slider" class="col-lg-10 col-9 pl-0">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @foreach($productImages as $img)
                                        <li class="splide__slide">
                                            <img src="{{ Storage::disk('public')->exists($img) ? 
                                            RvMedia::getImageUrl($img, 'page_product_detail_large') : 
                                            RvMedia::getImageUrl(theme_option('image_placholder'), 'page_product_detail_large') }}" alt="">
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div id="secondary-slider" class="splide col-lg-2 col-3">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @foreach($productImages as $thumb)
                                        <li class="splide__slide">
                                            <img src="{{ Storage::disk('public')->exists($thumb) ? 
                                            RvMedia::getImageUrl($thumb, 'page_product_detail_secondary') : 
                                            RvMedia::getImageUrl(theme_option('image_placholder'), 'page_product_detail_secondary') }}">
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 info">
                        <h1> {{$product->name}} </h1>
                        {!! $product->content !!}
                        <ul class="list_info">
                            <li>
                                <p>Model:</p>
                                <p> {!! $product->sku !!} </p>
                            </li>
                            <li>
                                <p>Brand:</p>
                                @if(!empty($product->brand))
                                <p> {{$product->brand->name}} </p>
                                @endif
                            </li>
                            <li>
                                <p>Price:</p>

                                @if ($originalProduct->front_sale_price !== $originalProduct->price)
                                <p>
                                    <del class="d-inline">{{ format_price($originalProduct->price) }}</del>
                                    <b class="ml-3" style="font-size: 17px;">
                                        {{ format_price($originalProduct->front_sale_price) }}
                                    </b>
                                </p>
                                @else
                                <p>
                                    {{ format_price($originalProduct->price)}}
                                </p>
                                @endif
                            </li>
                            <li>
                                <p>Tags:</p>
                                <p> {{implode(", ",$tags)}} </p>
                            </li>
                        </ul>
                        <form class="add-to-cart-form flex-wrap" method="POST" action="{{ route('public.cart.add-to-cart') }}">
                            @csrf
                            <input type="hidden" name="product_is_out_of_stock" value="{{ $originalProduct->isOutOfStock() }}" id="hidden-product-is_out_of_stock" />
                            <input type="hidden" name="id" id="hidden-product-id" value="{{ $originalProduct->id }}" />

                            </button>
                            <div class="input_field">
                                <button class="minus">-</button>
                                <input class="quantity" title="Quantity" name="qty" min="1" value="1" type="number">
                                <button class="plus">+</button>
                            </div>
                            <button id="btn-add-cart" class="add_to_cart btn btn-fill-out btn-addtocart" type="submit">Add to cart</button>

                            <p class="success-message text-success text-center mt-3" style="display: none;">
                                <span></span>
                            </p>
                            <p class="error-message text-danger text-center mt-3" style="display: none;">
                                <span></span>
                            </p>
                        </form>

                        <!----form---->
                        <!---end form---->

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
                                    <a class="nav-link {{$key==0?'active':''}}" id="tab{{$key}}-tab" data-toggle="tab" href="#tab{{$key}}" role="tab" aria-controls="tab{{$key}}" aria-selected="true" title="{{has_sub_field($tab,'tabs_title')}}"> {{has_sub_field($tab,'tabs_title')}} </a>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            @if(!empty($hasFieldTabs))
                            @foreach($hasFieldTabs as $key => $tab)
                            <div class="tab-pane fade {{$key==0?'active show':''}}" id="tab{{$key}}" role="tabpanel" aria-labelledby="tab{{$key}}-tab">
                                {!!has_sub_field($tab,'tabs_content')!!}
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

            @php $other_products = get_other_products($product); @endphp
            <div id="other_products" class="col-12 col-sm-12 col-md-12">
                <p class="title">Other products</p>
                <div class="swiper-container otherSwiper">
                    <div class="swiper-wrapper list_products">
                        @foreach($other_products as $other_pro)
                        <div class="swiper-slide product_item">
                            <div class="box-img">
                                <img class="img-fluid" src="{{ Storage::disk('public')->exists($other_pro->image) ? 
                                RvMedia::getImageUrl($other_pro->image, 'page_product') : 
                                RvMedia::getImageUrl(theme_option('image_placholder'), 'page_product') }}" alt="{{$other_pro->name}}">
                                <a href="{{ $other_pro->url }}" title="{{$other_pro->name}}">
                                    <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                                </a>
                            </div>
                            <h4 class="product_name">
                                <a class="section-armco__header__column" href="{{ $other_pro->url }}"> {!! $other_pro->name !!} </a>
                            </h4>
                            <div class="description"> {!! $other_pro->description !!} </div>
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
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<!-- Initialize Swiper -->
<script>
    $(document).ready(function() {
        $(window).resize(function() {
            $height = $('.gallery-main').height();
            console.log($height)
            $('.gallery-thumbs').height($height - 62);
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

        // Create and mount the thumbnails slider.
        var secondarySlider = new Splide('#secondary-slider', {
            autoHeight: true
            , rewind: false
            , fixedWidth: 60
            , fixedHeight: 24
            , isNavigation: true
            , gap: 5
            , focus: 'center'
            , pagination: false
            , cover: true
            , perPage: 4
            , direction: 'ttb'
            , height: '20rem'
            , breakpoints: {
                1920: {
                    fixedWidth: 95
                    , height: '30rem'
                    , perPage: 5
                , }
                , 1600: {
                    fixedWidth: 75
                    , height: '25rem'
                , }
                , 1400: {
                    height: '20rem'
                , }
                , 1200: {
                    fixedWidth: 55
                    , height: '17rem'
                , }
                , 768: {
                    fixedWidth: 100
                    , height: '23rem'
                    , gap: 10
                , }
                , 576: {
                    fixedWidth: 90
                    , height: '15rem'
                , }
                , 480: {
                    fixedWidth: 70
                    , height: '12rem'
                , }
                , 400: {
                    fixedWidth: 50
                    , height: '8rem'
                , }
            }
        }).mount();

        // Create the main slider.
        var primarySlider = new Splide('#large-slider', {
            type: 'fade'
            , heightRatio: 0.5
            , pagination: false
            , arrows: false
            , cover: true
            , autoHeight: true
            , height: "20rem"
            , breakpoints: {
                992: {}
            }
        });

        // Set the thumbnails slider as a sync target and then call mount.
        primarySlider.sync(secondarySlider).mount();

        var otherSwiper = new Swiper(".otherSwiper", {
            slidesPerView: 1.5
            , spaceBetween: 10
            , breakpoints: {
                "320": {
                    slidesPerView: 1.5
                    , spaceBetween: 10
                , }
                , "480": {
                    slidesPerView: 2.5
                    , spaceBetween: 10
                , }
                , "640": {
                    slidesPerView: 3.5
                    , spaceBetween: 10
                , }
                , "992": {
                    slidesPerView: 5.5
                    , spaceBetween: 10
                , }
            , }
        });
    });


    $(document).on('click', '.add-to-cart-form button[type=submit]', function(event) {
        event.preventDefault();
        event.stopPropagation();

        let _self = $(this);

        if (!$('#hidden-product-id').val()) {
            _self.prop('disabled', true).addClass('btn-disabled');
            return;
        }

        _self.prop('disabled', true).addClass('btn-disabled').addClass('button-loading');

        _self.closest('form').find('.error-message').hide();
        _self.closest('form').find('.success-message').hide();

        $.ajax({
            type: 'POST'
            , cache: false
            , url: _self.closest('form').prop('action')
            , data: new FormData(_self.closest('form')[0])
            , contentType: false
            , processData: false
            , success: res => {
                _self.prop('disabled', false).removeClass('btn-disabled').removeClass('button-loading');

                if (res.error) {
                    _self.closest('form').find('.error-message').html(res.message).show();
                    return false;
                }

                _self.closest('form').find('.success-message').html(res.message).show();
                $("#link-cart").load(location.href + " #reload");

                if (_self.prop('name') === 'checkout' && res.data.next_url !== undefined) {
                    window.location.href = res.data.next_url;
                } else {
                    $.ajax({
                        url: window.siteUrl + '/ajax/cart'
                        , method: 'GET'
                        , success: function(response) {
                            if (!response.error) {
                                $('.cart_box').html(response.data.html);
                                $('.btn-shopping-cart span').text(response.data.count);
                            }
                        }
                    });
                }
            }
            , error: res => {
                _self.prop('disabled', false).removeClass('btn-disabled').removeClass('button-loading');
                handleError(res, _self.closest('form'));
            }
        });
    });

</script>
