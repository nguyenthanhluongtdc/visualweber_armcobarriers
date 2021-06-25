<footer class="footer contaier-fluid-customize">
    <div class="footer-yellow">
        <div class="container-customize">
            <div class="footer__logo">
                <img src="{{ RvMedia::getImageUrl(theme_option('logo_footer')) }}" alt="logo">
            </div>
            <div class="container-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-12 mb-lg-0 mb-5">
                        <div class="protection-solutaion">
                            <div class="tiltle-protection">
                                <h3>{{ theme_option('footer-title') }}</h3>
                            </div>
                            <div class="map-protection">
                                <img src="{{ RvMedia::getImageUrl(theme_option('footer-map-image')) }}" alt="map">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-7 col-12 mb-lg-0 mb-5">
                        <div class="contact-location">
                            <h3>{{ theme_option('footer-title-office') }}</h3>
                            <p>{{ theme_option('footer-office-position') }} </p>
                            <p>Phone<a
                                    href="tel:{{ theme_option('footer-phone') }}" title="{{ theme_option('footer-phone') }}">{{ theme_option('footer-phone') }}</a>
                            </p>
                            <p>International<a
                                    href="tel:{{ theme_option('footer-phone-international') }}" title="{{ theme_option('footer-phone-international') }}">{{ theme_option('footer-phone-international') }}</a>
                            </p>
                            <p>Email<a
                                    href="mailto:{{ theme_option('footer-email') }}" title="{{ theme_option('footer-email') }}">{{ theme_option('footer-email') }}</a>
                            </p>
                        </div>
                    </div>
                    {!! Menu::renderMenuLocation('footer-menu', [
                                        'options' => [],
                                        'theme' => true,
                                        'view' => 'menu-footer',
                        ]) !!}
                    <div class="col-lg-2 col-md-2 mb-lg-0">
                        <div class="connect-us">
                            {!! dynamic_sidebar('footer_sidebar') !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-7 col-12 order-md-1 order-3">
                        <p>
                            {{ theme_option('footer-copyright') }}
                        </p>
                    </div>
                    {!! Menu::renderMenuLocation('policy-terms-conditions', [
                        'options' => [],
                        'theme' => true,
                        'view' => 'policy-terms-condition',
                    ]) !!}

                </div>
            </div>
        </div>
    </div>
</footer>

{!! Theme::footer() !!}
<script>

    $('.overlay_background').hover(function(){
        // $('.menu-pc-dropdown').hide();
        $('.overlay_background').hide();
    });
    $('.navbar-nav .nav-item.dropdown').hover(function(){
        // $('.menu-pc-dropdown').hide();
        $('.overlay_background').show();
    });
    
</script>
<script>
    AOS.init();
    $('.gallery-carousel').owlCarousel({

        thumbs: true,
        thumbsPrerendered: true,
        dots: true,
        loop: true,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('.owl-slider-left-carousel').owlCarousel({
    smartSpeed: 1000,
    loop:true,
    autoplay: false,
    dots: true,
    margin:0,
    nav: true,
	navText:["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i></div>","<div class='nav-btn next-slide'><i class='fas fa-chevron-right'></div>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

</script>

</body>

</html>
