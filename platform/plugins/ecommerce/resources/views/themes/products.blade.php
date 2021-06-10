<!-- <section class="content-page">
    <div class="container">
        <div class="row">

            <div class="row product-list-item">
                @if ($products->count() > 0)
                    @foreach ($products as $product)
                        <li>
                            <div class="product-item product-loop">
                                <img src="{{ RvMedia::getImageUrl($product->image, 'thumb', false, RvMedia::getDefaultImage()) }}" alt="{{ $product->name }}" class="product-item-thumb">
                                <h3>{{ $product->name }}</h3>
                                <span class="price">
                                    {!! the_product_price($product) !!}
                                </span>
                                <div class="product-action">
                                    <a data-quantity='1' data-product='{{ $product->id }}' href="javascript: void(0);"
                                       class="btn btn-info">{{ __('Add to cart') }}</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
</section> -->


@php Theme::layout('default') @endphp
<section>
  @includeIf("theme.armcobarriers::views.components.breadcrumb")
  <div class="container-customize">
    <div class="introduction-product">
      <div class="introduction-product-title">
        <h1>Product Range</h1>
        <p>Roadside, Car Parks, Warehouses<p>
      </div>
    </div>
  </div>
  <div class="container-fluid-customize">
    <div class="introduction-product-banner" style="background-image:linear-gradient(266deg, rgb(255 255 255 / 0%) 0%, rgb(255 255 255 / 9%) 44%, rgb(255 255 255 / 62%) 57%, rgb(239 239 239 / 99%) 68%) ,url({{ Theme::asset()->url('images/product/banner-product.jpg')}})">
    <div class="container-customize">
      <div class="d-flex align-items-center h-100 col-lg-7 col-12">
        <p>
        ARMCO® Barriers can provide all of your barrier and protection requirements with our vast and readily available product range. We are the specialists in custom designing barrier systems for unusual and non-standard applications.
        </p>
      </div>
    </div>
    <div>
  </div>
    
</section>

<section class="product">
  <div class="product-wrapper">
      <div class="container-customize">
        <div class="row">
          <div class="col-lg-3 col-12 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0 mb-3 mb-lg-0">     
            @if(!empty($categories))
              @includeIf('plugins/ecommerce::themes.sidebar', ['categories'=> $categories])
            @else 
              {!!
                Menu::renderMenuLocation('categories-product-menu', [ // 
                    'options' => [],
                    'theme'   => true,
                    'view' => 'sidebar-categories',
                ])
              !!}
            @endif
          </div>
          <div class="col-lg-9 col-12">
              <div class="row">
                  <div class="col-md-12">
                    <div class="product-filter justify-content-lg-end">
                      <div class="product_filter--search">
                        <form action="/products" method="GET" class="form__search">
                          <input type="text" class="header__search-input form-control form-control-sm submit-form-on-change first_null not_chosen"  placeholder="Search Product" name="q"/>
                          <button class="btn btn-secondary" type="submit">
                              <i class="fas fa-search"></i>
                          </button>
                        </form>
                      </div>
                      <div class="custom_select">
                        <select class="down form-control form-control-sm submit-form-on-change first_null not_chosen" name="num">
                            <option value="">Showing 1 - 10 of 10 products</option>
                        </select>
                        <span class="down"></span>
                      </div>
                      <div class="custom_sort">
                        <select class="down form-control form-control-sm submit-form-on-change first_null not_chosen" name="num">
                            <option value="">Sort by Featured</option>
                        </select>
                        <span class="down"></span>
                      </div>
                    </div>
                  </div>
                </div>

                @if(!empty($category))
                  <h1 style="font-size: 2rem; margin-top: 40px;"> {!!$category->name!!} </h1>
                @endif
                
                @if(count($products) > 0)
                  <div class="row">
                      @foreach($products as $product)
                          <div class="col-lg-3 col-md-4 col-6">
                              <div class="product-item-wrapper">
                              <a href="{{$product->url}}">
                                  <div class="product-item">
                                  <img class="product-image" src="{{rvMedia::getImageUrl($product->image)}}" alt="">
                                  <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                                  </div>
                                  <h4 class="product-name">
                                      {{$product->name}}
                                  </h4>
                                  <code>
                                  <?php echo $product->description ?>
                                  </code>
                              </a>
                              
                              </div>
                          </div>
                      @endforeach
                  </div>
                  
                  {{ $products->links('vendor.pagination.custom') }}

                  @else 

                  <p> There are no matching products for this option </p>

                  @endif

            </div>
          </div>
        </div>
      </div>
  </div>
</section>
