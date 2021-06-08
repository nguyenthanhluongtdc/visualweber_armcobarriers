@php 
    $tabs_services_detail = get_field($page, 'services');

    $information_list = has_field($page, 'services_detail_list');

@endphp
<section >
    <div class="container-customize" id="install">
        <div class="wrap-top">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Homepage</a></li>
                <li class="breadcrumb-item"><a href="#">Service</a></li>
                <li class="breadcrumb-item">Installation</li>
              </ol>
            </nav> 
            <div class="top2">
                <h2>ARMCO® Services</h2>
                <p>Installation, Design Advice, Custom Manufacture</p>
            </div>
        </div>
    </div>
</section>

<div class="services-detail-tabs main-scroll">
    <div class="left-t
    ab-md tabs-scroll">
        <div class="container-customize">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                @foreach($tabs_services_detail as $key => $tab)
                    <a class="nav-item nav-link {{$key==0?'active':''}} "style="color:#000000" id="nav-overview-tab" data-toggle="tab" href="#nav-tab{{$key}}" role="tab" aria-controls="nav-overview" aria-selected="false"> {{get_sub_field($tab, 'tabs_title')}} </a>
                @endforeach
                </div>
            </nav>
        </div>
    </div>

    <div class="item-tab-content right-tab-md">
        @includeIf("theme.armcobarriers::views.tab",['tabs'=>$tabs_services_detail])
    </div>
</div>


<section >
    <div class="container-customize">
        <div class="wrap-text list">
            <div class="row">
                @if(!empty($information_list))
                    @foreach($information_list as $item)
                        <div class="col-lg-6 col-md-6 col-12">
                            <code>
                            @php echo has_sub_field($item, 'list') @endphp
                            </code>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container-customize">
        <div class="wrap-pic">
            <div class="re-pow">
                <div class="request">
                    <img src="{{ Theme::asset()->url('images/service-detail/request.jpg') }}" alt="">
                    <h3>Request a free Quotation</h3>
                </div>
                <div class="powder">
                    <img src="{{ Theme::asset()->url('images/service-detail/powder.jpg') }}" alt="">
                    <h3>Powder-Coating</h3>
                </div>
            </div>
            <div class="cus-im">
                <div class="custom">
                    <img src="{{ Theme::asset()->url('images/service-detail/custom.jpg') }}" alt="">
                    <h3>Custom Manufacture & Design Advice</h3>
                </div>
               <div class="impact">
                <img src="{{ Theme::asset()->url('images/service-detail/impact.jpg') }}" alt="">
                <h3>Impact Force Calculator</h3>
               </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-customize">
        <div class="wrap-product-quality">
            <div class="product-quality">
                <h2>Product Quality</h2>
                <p>Roadside, Car Parks, Warehouses</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 australian">
                    <div class="title">
                        <h3>Australian Made</h3>
                       </div>
                    <p>Armco®  Barriers can supply all of your wire rope needs, including installation by our professional and
                     experienced installation teams.</p>
                </div>
                <div class="col-lg-3 col-md-6 australian">
                    <div class="title">
                        <h3>Galvanised in Australia to ASXXXXX</h3>
                    </div>
                    <p>ARMCO® Bollards are versatile in their many applications.</p>
                    <p>Manufactured in 5.4mm steel to meet both traffic and parking and customer specification, 
                    Armco® Bollards are then Hot Dipped Galvanized to produce a quality product that is durable and safe...</p>
                </div>
                <div class="col-lg-3 col-md-6 australian">
                    <div class="title">
                        <h3>Floor Anchors</h3>
                    </div>
                    <p>Armco®  Floorgard™is an ideal application where walls need to be protected against forklift damage, being most commonly 
                    used in warehousing and cool room applications.Floorgard™(as shown in the pictures) works optimally in conjunction with Armco® Railgard™.</p>
                </div>
                <div class="col-lg-3 col-md-6 australian">
                    <div class="title">
                        <h3>Guaranteed for years of trouble free service.</h3>
                    </div>
                    <p>Armco®  Barriers Pty Ltd will supply Guardrail for all of your on and off road requirements.</p>
                    <p>We have trademarked the name Railgard™ so as our customer can be assured of receiving the superior Armco®  product.  </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container-customize">
        <div class="wrap-product">
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
</section>
<section class="mt-5">
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.components.form-signup")
    </div> 
</section>

