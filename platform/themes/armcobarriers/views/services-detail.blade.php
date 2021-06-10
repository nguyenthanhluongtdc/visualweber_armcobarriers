
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
                <h2>ARMCO® Services - {{ $service->url }}</h2>
                <p>Installation, Design Advice, Custom Manufacture</p>
            </div>
        </div>
    </div>
</section>

<div class="services-detail-tabs main-scroll">
    <div class="left-tab-md tabs-scroll">
        <div class="container-customize">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                </div>
            </nav>
        </div>
    </div>

    <div class="item-tab-content right-tab-md">
        @includeIf("theme.armcobarriers::views.tab",['tabs'=> []])
    </div>
</div>


<section >
    <div class="container-customize">
        <div class="wrap-text list">
            <div class="row">
                
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container-customize">
        <div class="wrap-pic">
            
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