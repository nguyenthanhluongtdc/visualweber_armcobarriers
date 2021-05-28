<footer class="footer contaier-fluid-customize">
    <div class="footer-yellow"> 
        <div class="container-customize">
            <div class="footer__logo">
                <img src="{{ Theme::asset()->url('images/header/logo.png') }}" alt="logo">     
            </div>
            <div class="container-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-sm-6">
                        <div class="protection-solutaion">
                            <div class="tiltle-protection">
                                <h3>Asset Protection Solutions</h3>
                            </div>
                            <div class="map-protection">
                                <img src="{{ Theme::asset()->url('images/footer/map-footer.png') }}" alt="map">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-location">
                            <h3>ARMCO® Head Office</h3>
                            <p>3 FOURTH AVENUE, SUNSHINE, VICTORIA.3020. AUSTRALIA </p>
                            <p>Phone<a href="tel:(03) 9311 1312">(03) 9311 1312</a></p>
                            <p>International<a href="tel:+61 3 9311 1312">+61 3 9311 1312</a></p>
                            <p>Email<a href="mailto:sales@armcobarriers.com.au">sales@armcobarriers.com.au</a></p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-4">
                        <div class="homepage">
                            <h3>Homepage</h3>
                            <p><a href="">About Us</a></p>
                            <p><a href="">Products</a></p>
                            <p><a href="">Services</a></p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="applications">
                            <h3>Applications</h3>
                            <p><a href="">Gallery</a></p>
                            <p><a href="">News, Events & Media</a></p>
                            <p><a href="">Contact Us</a></p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="connect-us">
                            <h3>Connect with us</h3>
                            <a href="">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <p>
                            Copyright © 2021 ARMCO BARRIERS Pty Ltd  
                            abn 21 007 274 464 
                        </p>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <a href="">
                            <p>
                                Privacy Policy
                            </p>
                        </a>
                        
                    </div>
                    <div class="col-md-3 col-sm-3">
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
