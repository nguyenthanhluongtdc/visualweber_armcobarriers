<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<div id="product_info" class="col-sm-12 col-md-12">
    <div class="row">
        <div class="col-12 col-lg-6 gallery">
            <div class="gallery-container">
                <div class="swiper-container gallery-main">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/product/product_detail.png')}}" alt="Slide 01">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/product/product_detail.png')}}" alt="Slide 01">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/product/product_detail.png')}}" alt="Slide 01">
                        </div>
                    </div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/product/product_extra4.png')}}" alt="Slide 01">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/product/product_extra4.png')}}" alt="Slide 01">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/product/product_extra4.png')}}" alt="Slide 01">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/product/product_extra4.png')}}" alt="Slide 01">
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 info">
            <p class="product_name">Knuffi Magnetic Flexible Edge Protector </p>
            <p class="product_introduce">
                SafetyRail 2000 is a non-penetrating, passive fall
                protection system for workplace safety that can be used from
                rooftop to ground level applications. Because they’re anchored
                by weighted baseplates rather than fastened down with bolts, these
                ballasted guard rails can be used as portable, permanent, or temporary
                roof edge protection solutions. Non-penetrating designs preserve the integrity
                of the roof system and make these solutions easy to install.
            </p>
            <ul class="list_info">
                <li>
                    <p>Model</p>
                    <p>MO849</p>
                </li>
                <li>
                    <p>Brand</p>
                    <p>Armco</p>
                </li>
                <li>
                    <p>Price</p>
                    <p>1100$</p>
                </li>
                <li>
                    <p>Tags</p>
                    <p>WireCrafters, Safety Rail</p>
                </li>
            </ul>
            <form action="">
                <div class="input_field">
                    <button class="minus">-</button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button class="plus">+</button>
                </div>
                <button class="add_to_cart">Add to cart</button>
            </form>
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
            console.log($('.gallery-main').height())
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
    })
</script>