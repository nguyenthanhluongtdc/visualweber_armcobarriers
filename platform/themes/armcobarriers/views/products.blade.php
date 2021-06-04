@php Theme::layout('default') @endphp

<section>
  @includeIf("theme.armcobarriers::views.breadcrumb")
  <div class="container-customize">
    <div class="introduction-product">
      <div class="introduction-product-title">
        <h2>Product Range</h2>
        <p>Roadside, Car Parks, Warehouses<p>
      </div>
      
    </div>
  </div>
  <div class="container-fluid-customize">
    <div class="introduction-product-banner" style="background-image:linear-gradient(266deg, rgb(255 255 255 / 0%) 0%, rgb(255 255 255 / 9%) 44%, rgb(255 255 255 / 62%) 57%, rgb(239 239 239 / 99%) 68%) ,url({{ Theme::asset()->url('images/product/banner-product.jpg')}})">
    <div class="container-customize">
      <p>ARMCO® Barriers can provide all of your barrier and protection requirements with our vast and readily available product range. We are the specialists in custom designing barrier systems for unusual and non-standard applications.
      </p>
    </div>
    <div>
  </div>
    
</section>

<section class="product">
  <div class="product-wrapper">
      <div class="container-customize">
        <div class="row">
          <div class="col-lg-3 col-12 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0 mb-3 mb-lg-0">     
            <div id="sidebar" class="mw-100">
              <ul class="list-unstyled">
                  <li class="active">
                      
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                          <p>Guardrail - Railgard TM </p>
                          <i class="fas fa-chevron-down icon-menulf"></i> 
                        </a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                          <i class="fa fa-bars"></i>
                        </a>
                    
                      <ul class="list-unstyled list-categories collapse show" id="homeSubmenu" style="">
                          <li>
                              <a href="#">Guardrail - RailgardTM-Curving</a>
                          </li>
                          <li>
                              <a href="#">Guardrail - Railgard curvature details</a>
                          </li>
                          <li>
                              <a href="#">Guardrail - Measuring Curvature</a>
                          </li>
                          <li>
                              <a href="#">Guardrail -  RailgardTM-Drawings </a>
                          </li>
                          <li>
                              <a href="#">Multiple Height Guardrail</a>
                          </li>
                          <li>
                              <a href="#">Guardrail End Treatments </a>
                          </li>
                          <li>
                              <a href="#">National Guardrail Applications</a>
                          </li>
                          <li>
                              <a href="#">Armco Corner Treatments</a>
                          </li>
                          <li>
                              <a href="#">Armco End Treatments</a>
                          </li>
                      </ul>
                    </li>
                </ul>            
            </div>
          </div>
          <div class="col-lg-9 col-12">
              <div class="row">
                  <div class="col-md-12">
                    <div class="product-filter justify-content-lg-end">
                      <div class="product_filter--search">
                        <form action="#" method="POST" class="form__search">
                          <input type="text" class="header__search-input form-control form-control-sm submit-form-on-change first_null not_chosen"  placeholder="Search Product"/>
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
                
                <div class="row">
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-1.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-2.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-3.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-4.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-5.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-6.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-7.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-8.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-1.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-2.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-3.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-4.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-5.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-6.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-7.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-item-wrapper">
                      <a href="{{url('/products-detail')}}">
                        <div class="product-item">
                          <img class="product-image" src="{{ Theme::asset()->url('images/product/product-8.png') }}" alt="">
                          <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                        </div>
                          <h4 class="product-name">
                            W Beam Guardrail
                          </h4>
                          <p class="product-desc">
                            W beam galvanized guardrail is the most common highway crash barriers ...
                          </p>
                      </a>
                      
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="pagination_style1">
                      <nav aria-label="...">
                        <ul class="pagination">
                          {{-- <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1">Previous</a>
                          </li> --}}
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item">
                              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">4</a></li>
                          <li class="page-item page-link-last">
                            <a class="" href="#">Next page</a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                 
                </div>
            </div>
            
          </div>
        </div>
      </div>
  </div>
</section>

  

  
  