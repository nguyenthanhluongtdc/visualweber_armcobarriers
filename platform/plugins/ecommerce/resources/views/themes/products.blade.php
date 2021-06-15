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

{{--  Menu::renderMenuLocation('categories-product-menu', [ // 
        'options' => [],
        'theme'   => true,
        'view' => 'sidebar-categories',
])--}}
       
@if(!isset($catego))
@php $catego = []; @endphp
@endif

@if(isset($page))
  @php 
    $content_banner = get_field($page, 'content_banner');
    $img_banner = get_field($page, 'image_banner');
    $query = isset($query) ? $query : "";
  @endphp
@endif

@php Theme::layout('default') @endphp
<section>
  @includeIf("theme.armcobarriers::views.modules.breadcrumb")
  <div class="container-customize">
    <div class="introduction-product">
      <div class="introduction-product-title">
        <h1>Product Range</h1>
        <p>Roadside, Car Parks, Warehouses<p>
      </div>
    </div>
  </div>
  <div class="container-fluid-customize">
    <div class="introduction-product-banner" style="background-image:linear-gradient(266deg, rgb(255 255 255 / 0%) 0%, rgb(255 255 255 / 9%) 44%, rgb(255 255 255 / 62%) 57%, rgb(239 239 239 / 99%) 68%) ,url({{ rvMedia::getImageUrl($img_banner) }})">
    <div class="container-customize">
      <div class="d-flex align-items-center h-100 col-lg-7 col-12">
        <p>
          {!! $content_banner !!}
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
            <div id="sidebar" class="mw-100">
              <ul class="list-unstyled"> 
                @if(isset($categories))
                  @foreach($categories as $category)
                    @includeIf('plugins/ecommerce::themes.parent', ['category'=> $category, 'catego'=>$catego])
                  @endforeach
                @endif
              </ul>            
            </div>
          </div>
          <div class="col-lg-9 col-12">
              <div class="row">
                  <div class="col-md-12">
                    <div class="product-filter justify-content-lg-end">
                      <div class="product_filter--search">
                        <form action="{{route('public.products')}}" method="GET" class="form__search">
                          <input type="text" class="header__search-input form-control form-control-sm submit-form-on-change first_null not_chosen"  placeholder="Search Product" name="q"/>
                          <button class="btn btn-secondary" type="submit">
                              <i class="fas fa-search"></i>
                          </button>
                        </form>
                      </div>
                      <div class="custom_select">
                        <select class="down form-control form-control-sm submit-form-on-change first_null not_chosen" name="num">
                            <option value="">Showing 1 - 10 of 10 products</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span class="down"></span>
                      </div>
                      <div class="custom_sort">
                        <select class="down form-control form-control-sm submit-form-on-change first_null not_chosen" name="featured">
                            <option value="0">Select sort featured</option>
                            <option value="1">Sort</option>
                            <option value="0">Unsort</option>
                        </select>
                        <span class="down"></span>
                      </div>
                    </div>
                  </div>
                </div>

                @if(isset($categories) && !empty($catego))
                  <h1 style="font-size: 2rem; margin-top: 40px;"> {!!$catego->name!!} </h1>
                @elseif(!empty($query))
                  <h1 style="font-size: 2rem; margin-top: 40px;">
                  Search results for keyword: <span class="text-danger">'{!!$query!!}'</span> </h1>
                @else 
                  <h1 style="font-size: 2rem; margin-top: 40px;"> All product </h1>
                @endif
                
                @if(count($products) > 0)
                <div class="box-products">
                  @includeIf("plugins/ecommerce::themes.box-product",['products'=>$products,'num'=>$num,'query'=>$query])
                </div>
                @else 
                <p class="set-height"> There are no matching products for this option </p>
                @endif
            </div>
          </div>
        </div>
      </div>
  </div>
</section>

<script>

  $(document).ready(function() {
    let path = "";
    let num = '';
    let query = '';
    let featured = '';

    $("select[name='num']").on('change',function(){
      num = $(this).val();
      num = num!=0?`num=${num}`:'';
      featured = $("select[name='featured']").val();
      featured = featured!=0?`sort-by=featured`:'';
      initPath(num, featured);
      fetch_data(path);
    })

    $("select[name='featured']").on('change',function(){
      featured = $(this).val();
      featured = featured!=0?`sort-by=featured`:'';

      num = $("select[name='num']").val();
      num = num!=0?`num=${num}`:'';
      initPath(num, featured);

      console.log(path)

      fetch_data(path);
    })

    function fetch_data(path) {
      $.ajax({
        url: path,
        success: function(response) {
          $('.box-products').html(response)
          window.history.pushState({},'',path);
        }
      })
    }

    function initPath(num, featured) {
      query = "{{$query}}";
      query = query!=""?`&q=${query}`:'';

      path = window.location.pathname;
      if(num!='' && featured!=''){
        path +=`?${num}&${featured}${query}`;
      }else {
        path +=`?${num}${featured}${query}`;
      }
    }

  })

</script>