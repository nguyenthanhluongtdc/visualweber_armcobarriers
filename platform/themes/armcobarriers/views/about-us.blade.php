
<div class="container-customize">
    <div class="wrap-top">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Homepage</a></li>
                    <li class="breadcrumb-item">About Us</li>
                  </ol>
                </nav> 
        <div class="cont2">
            <h1>ARMCO - About Us</h1>
            <h2>Roadside,Car Parks,Warehouse</h2>
        </div>
    </div>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-company-profile" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Company Profile</a>
              <a class="nav-item nav-link" id="nav-armco-system" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">The ARMCO System</a>
            </div>
        </nav>
</div>
     <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="container-fluid-customize">
                <div class="wrap-cont" style="background-image:linear-gradient(266deg, rgb(255 255 255 / 0%) 0%, rgb(236 229 228 / 0%) 44%, rgb(255 255 255 / 0%) 57%, rgb(255 255 255 / 68%) 68%), url({{ Theme::asset()->url('images/about/img1.jpg') }})">
                    <div class="container-customize h-100">
                        <div class="content-about d-flex align-items-center h-100">
                                <p class="col-lg-6">With the experience of over 25 years in guardrail and barrier systems, Armco® 
                                    Barriers Pty Ltd has become the leader in the safety barrier market.  From humble 
                                    beginnings, the company now has a clientele base that will only choose ARMCO® for 
                                    their safety barrier requirements.  An all Australian family owned business that
                                    employs Australians and uses Australian resources, we provide service, support and a
                                    knowledge of the product that is second to none and will always see our clients return.</p>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="container-fluid-customize">
                    <div class="wrap-cont" style="background-image:linear-gradient(266deg, rgb(255 255 255 / 0%) 0%, rgb(236 229 228 / 0%) 44%, rgb(255 255 255 / 0%) 57%, rgb(255 255 255 / 68%) 68%), url({{ Theme::asset()->url('images/about/hero.jpg') }})">
                        <div class="container-customize h-100">
                            <div class="content-about d-flex align-items-center h-100">
                                    <p class="col-lg-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, est. Non, possimus autem ut 
                                    unde necessitatibus distinctio saepe dicta vitae praesentium. Quasi sint, veniam totam minus id quam dolores corporis maxime modi soluta,
                                    ipsa fugiat facilis placeat itaque fugit asperiores optio culpa iste, numquam eveniet magnam molestiae quia amet. Est sint nisi voluptate
                                    ullam alias non voluptates illum laborum, cum dolor molestiae dignissimos? Aperiam doloribus nemo similique est nostrum expedita iusto corporis
                                    </p>
                                </div>
                            </div>
                        </div>
                     </div>
            </div>
          </div>
<div class="container-customize">
    <div class="wrap-product">
        <div class="whatwedo"id="whatwedo">
            <h2> What We Do</h2>
        </div>
                <div class="wrap1">
                    <div class="row">
                    @foreach (get_field($page, 'what_we_do') as $item)
                        <div class="col-lg-4 col-md-6 design">
                            <h3>{{get_sub_field($item , 'tabs_title')}}</h3>
                            <p>{!!get_sub_field($item, 'tabs_description')!!}</p>
                        </div>
                    @endforeach
                    </div>
                </div>
       <div class="wrap2">
           <div class="icon">
            <img src="{{ Theme::asset()->url('images/about/iconarrow.png') }}" alt="">
           </div>
           <div class="view">
                <a href="/product">VIEW OUR PRODUCT</a>
           </div>
       </div>
    </div>
</div>
<div class="container-fluid-customize">
    <div class="hero">
        <img src="{{ get_object_image(get_field( $page ,'image'))}}" alt="">
    </div>
</div>
<div class="container-customize" id="wrap-bot">
    <div class="wrap-bot">
        <div class="bot1">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="product-quality">
                        <h2>{{get_field( $page ,'title')}}</h2>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="slogan">
                        <p>{{get_field( $page ,'description')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bot2">
            <div class="row">
            @foreach (get_field($page, 'key_feature') as $item)
                <div class="col-lg-4 col-md-6">
                   <div class="product0">
                    <img src="{{ get_object_image(get_sub_field( $item ,'image'))}}" alt="">
                    <h3>{{get_sub_field($item , 'title')}}</h3>
                    <p>{{get_sub_field($item , 'description')}}</p>
                   </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container-customize">
    <div class="count">
        <div class="row w-100 mx-0">
        @foreach (get_field($page, 'statistic') as $item)
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="box-count count-customers">
                    <h2>{{get_sub_field($item , 'title')}}</h2>
                    <p>{{get_sub_field($item , 'description')}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="experience">
        <div class="exp">
            <p>{{get_field( $page ,'description_16226544671')}} </p>
        </div>
    </div>
</div>
<div class="container-customize">
    @includeIf("theme.armcobarriers::views.components.form-signup")
</div>