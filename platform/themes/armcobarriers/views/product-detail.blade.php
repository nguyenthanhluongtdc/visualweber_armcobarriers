<div id="product_detail">
    <div class="container-customize">
        <div class="row">
            <section>
                <div class="container-customize">
                    <div class="product_breadcrumb">
                        <p><a href="#">Homepage</a></p>
                        <p><a href="#">Products</a></p>
                    </div>
            </section>
            <div class="top_title col-md-12">
                <p>Product Range</p>
                <a href="">
                    <i class="fas fa-chevron-left"></i>
                    <span>Guardrail - Railgard curvature details</span>
                </a>
            </div>
            <!-- @includeIf("theme.armcobarriers::views.pages.product_detail.sections.product_info")
            @includeIf("theme.armcobarriers::views.pages.product_detail.sections.more_info")
            @includeIf("theme.armcobarriers::views.pages.product_detail.sections.other_products") -->

            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
            <!---product infomation-->
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

            <!---more info-->
            <div id="more_info" class=" col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-9 mb-5" id="tab">
                        <div class="row ml-0">
                            <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specifications</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Specifications</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            Floor angle guide rail helps keep traffic away from racking and shelving, walls, storage areas, offices, and other work areas

                            The sturdy 5" H x 3" W x 1/4" D angle iron comes with holes to anchor to the floor

                            Protectors can be customized to any oth
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quos nobis maxime voluptas pariatur sit. Saepe voluptatum veniam maiores nam, officiis voluptate architecto porro voluptatem earum accusantium voluptatibus illo eligendi nisi hic tempore magni sunt culpa, nulla ducimus corrupti exercitationem. Hic eos dolore architecto explicabo rerum magni aperiam harum quidem! Qui temporibus excepturi rerum quam animi rem sunt necessitatibus, quos sint, earum, vitae ipsam nam! Voluptas dolores soluta modi esse quas enim adipisci, ex rerum? Ratione inventore, dolores temporibus iure ducimus nulla expedita pariatur, a illum commodi animi accusantium? Nesciunt quia rem reiciendis ex possimus, unde provident totam a alias.
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad soluta distinctio cumque suscipit est, officia aliquid similique molestias vel excepturi? Itaque ducimus facilis placeat corrupti aliquid eius, natus aspernatur dicta iusto molestiae cumque autem ad. Eveniet ea veritatis veniam in delectus consequatur fugiat, magni, quam incidunt architecto numquam repellendus quas ipsa nam accusamus temporibus quibusdam ipsam consequuntur! Reprehenderit suscipit molestiae explicabo. Autem sequi totam rerum beatae. Ipsa voluptates corporis consequatur molestiae! Hic, nam deserunt necessitatibus deleniti quae totam nihil iusto consequatur ipsum labore minima ea illum, at cumque eos, eius similique! Libero ex totam accusamus a laboriosam eius consectetur qui eligendi quidem, laudantium non nemo atque adipisci vitae doloribus debitis numquam ea rem sequi excepturi nihil quod ullam earum! Harum, atque cum. Expedita consectetur nam eos, blanditiis hic voluptatum, iste reiciendis ut, temporibus illum facilis explicabo numquam voluptatibus? Est nulla minus facilis ratione rem amet, unde tempora dolores suscipit at, placeat laboriosam impedit culpa consectetur blanditiis, natus et. Ad omnis, officia libero, necessitatibus sapiente ducimus incidunt, est eaque earum voluptas excepturi dicta. Ducimus nostrum laudantium, voluptates dolores eum incidunt harum voluptate fugiat explicabo recusandae temporibus laborum, ex ut dignissimos sunt omnis. Quae nam eveniet, itaque nostrum excepturi alias veniam iure.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 mb-5">
                        <div id="related_products">
                            <p class="title">Related products</p>
                            <div class="list_products row">
                                <a href ="" class="product_item col-6 col-lg-12">
                                    <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-1.png')}}" alt="">
                                    <p class="product_name">W Beam Guardrail</p>
                                </a>
                                <a href ="" class="product_item col-6 col-lg-12">
                                    <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-2.png')}}" alt="">
                                    <p class="product_name">W Beam Guardrail</p>
                                </a>
                                <a href ="" class="product_item col-6 col-lg-12">
                                    <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-3.png')}}" alt="">
                                    <p class="product_name">W Beam Guardrail</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--other product-->


            <div id="other_products" class="col-12 col-sm-12 col-md-12">
                <p class="title">Other products</p>
                <div class="swiper-container otherSwiper">
                    <div class="swiper-wrapper list_products">
                        <div class="swiper-slide product_item">
                            <div class="box-img">
                                <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-8.png')}}" alt="">
                                <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                            </div>
                            <p class="product_name">W Beam Guardrail</p>
                            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p> 
                        </div>

                        <div class="swiper-slide product_item">
                            <div class="box-img">
                                <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-6.png')}}" alt="">
                                <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                            </div>
                            <p class="product_name">W Beam Guardrail</p>
                            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p> 
                        </div>

                        <div class="swiper-slide product_item">
                            <div class="box-img">
                                <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-7.png')}}" alt="">
                                <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                            </div>
                            <p class="product_name">W Beam Guardrail</p>
                            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p> 
                        </div>

                        <div class="swiper-slide product_item">
                            <div class="box-img">
                                <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-5.png')}}" alt="">
                                <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                            </div>
                            <p class="product_name">W Beam Guardrail</p>
                            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p> 
                        </div>

                        <div class="swiper-slide product_item">
                            <div class="box-img">
                                <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-7.png')}}" alt="">
                                <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                            </div>
                            <p class="product_name">W Beam Guardrail</p>
                            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p> 
                        </div>
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