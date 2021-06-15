@php
    $tabs_about = get_field($page, 'about_us');
@endphp

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
                @foreach($tabs_about as $key => $tab)
                    <a class="nav-item nav-link {{$key==0?'active':''}}" id="nav-company-profile" data-toggle="tab" href="#nav-tab{{$key}}" role="tab" aria-controls="nav-tab{{$key}}" aria-selected="true"> {{get_sub_field($tab,'tabs_title')}} </a>
                @endforeach
            </div>
        </nav>
</div>
        <div class="tab-content" id="nav-tabContent">
        @foreach($tabs_about as $key => $tab)
            <div class="tab-pane fade {{$key==0?'active show':''}}" id="nav-tab{{$key}}" role="tabpanel" aria-labelledby="nav-tab{{$key}}-tab">
                <div class="container-fluid-customize">
                    <div class="wrap-cont" style="background-image:linear-gradient(266deg, rgb(255 255 255 / 0%) 0%, rgb(236 229 228 / 0%) 44%, rgb(255 255 255 / 22%) 57%, rgb(255 255 255 / 95%) 68%),url({{ get_object_image(get_sub_field( $tab ,'picture'))}})">
                        <div class="container-customize h-100">
                            <div class="content-about d-flex align-items-center h-100">
                                <div class="col-lg-6">
                                   <p style="font-size:17px;font-:Arial"> @php echo get_sub_field($tab, 'tabs_description') @endphp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
                <a href="{{route('public.products')}}">VIEW OUR PRODUCT</a>
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
                        <h2>{!!get_field( $page ,'title')!!}</h2>
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
    @includeIf("theme.armcobarriers::views.modules.form-signup")
</div>