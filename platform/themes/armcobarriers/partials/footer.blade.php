<footer class="footer contaier-fluid-customize">
    <div class="footer-yellow"> 
        <div class="container-customize">
            <div class="footer__logo">
                <img src="{{ RvMedia::getImageUrl(theme_option('logo_footer'))}}" alt="logo">     
            </div>
            <div class="container-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-12 mb-lg-0 mb-5">
                        <div class="protection-solutaion">
                            <div class="tiltle-protection">
                                <h3>{{theme_option('footer-title')}}</h3>
                            </div>
                            <div class="map-protection">
                                <img src="{{ RvMedia::getImageUrl(theme_option('footer-map-image'))}}" alt="map">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-md-7 col-12 mb-lg-0 mb-5">
                        <div class="contact-location">
                            <h3>{{theme_option('footer-title-office')}}</h3>
                            <p>{{theme_option('footer-office-position')}} </p>
                            <p>Phone<a href="tel:{{theme_option('footer-phone')}}">{{theme_option('footer-phone')}}</a></p>
                            <p>International<a href="tel:{{theme_option('footer-phone-international')}}">{{theme_option('footer-phone-international')}}</a></p>
                            <p>Email<a href="mailto:{{theme_option('footer-email')}}">{{theme_option('footer-email')}}</a></p>
                        </div>
                    </div>
                    {!!
                        Menu::renderMenuLocation('footer-menu', [
                            'options' => [],
                            'theme' => true,
                            'view' => 'menu-footer',
                        ])
                    !!}
                    <div class="col-lg-2 col-md-2 mb-lg-0">
                        <div class="connect-us">
                            <p><h3>Connect with us</h3></p>
                            <a href="{{theme_option('footer-social')}}">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-7 col-12 order-md-1 order-3">
                        <p>
                            {{theme_option('footer-copyright')}}
                        </p>
                    </div>
                    <div class="col-md-2 col-12 order-md-2 order-1">
                        <a href="">
                            <p>
                                Privacy Policy
                            </p>
                        </a>
                        
                    </div>
                    <div class="col-md-3 col-12 order-md-3 order-2">
                        <a href="">
                            <p>
                                Terms and Conditions
                            </p>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</footer>

        {!! Theme::footer() !!}
        <script>
            AOS.init(); 
       </script>
      
    </body>
</html>
