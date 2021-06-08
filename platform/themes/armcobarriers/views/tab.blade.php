<section>
    <div class="container-fluid-customize">
        <div class="tab-content" id="nav-tabContent">
            <!-- @foreach($tabs as $key => $tab)
                <div class="tab-pane fade {{$key==0?'active show':''}}" id="nav-tab{{$key}}" role="tabpanel" aria-labelledby="nav-tab{{$key}}-tab">
                    <section>
                        <div class="container-fluid-customize content ">
                            <div class="wrap-install" style="background-image: url({{ get_object_image(get_sub_field( $tab ,'picture'))}})">
                                <div class="container-customize">
                                    <div class="install">
                                        <h2>{{get_sub_field($tab,'tabs_title')}}</h2>
                                        <p>@php echo get_sub_field($tab, 'tabs_description') @endphp</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            @endforeach -->
            <div class="tab-pane fade show active" id="nav-car" role="tabpanel" aria-labelledby="nav-car-tab">
                <section >                  
                    <div class="wrap-car" style="padding: 60px 0;">
                        <div class="container-customize"> 
                            <div class="container-fluid-customize content">
                                <div class="car-park">
                                    <h2>Car Park Solutions</h2>
                                    <p>Armco® Barriers provide a range of services to support both the customer and our product. Our services are of a superior standard due to
                                        the intimate knowledge of the Armco® product that our service providers have.</p>
                                    <p>Our Installation teams are 'in house' trained and all have had experience in manufacture to understand the product better.
                                        Our design team have over 20 years experience in designing and assisting customers with protective barrier systems. We have civil and structural
                                        engineers on staff to assure that our products are manufactured and designed to the highest standard of both safety and tolerance.</p>
                                </div>
                                <div class="wrap-system">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div class="system1">
                                                <h3>30kN System</h3>
                                                <p>Our Installation teams are 'in house' trained and all have had experience in manufacture to understand the product better.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div class="system2">
                                                <h3>40kN System</h3>
                                                <p>Our Installation teams are 'in house' trained and all have had experience in manufacture to understand the product better.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div class="system3">
                                                <h3>120kN System</h3>
                                                <p>Our Installation teams are 'in house' trained and all have had experience in manufacture to understand the product better.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>