<nav class="navbar navbar-expand-lg navbar_mobie">
    <div class="search_mobie-ct">
        <form action="{{ route('public.products') }}" method="GET">
            <div class="search-box input-group">
                <input class="" name="q" value="{{ request()->input('q') }}" placeholder="{{ __('Search Product') }}..." required  type="text">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <a href="{{route('public.index')}}" class="logo__link">
        
        <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="">
    </a>
    
    <div class="toolbar-mobile">
      <ul class="list-tool">
          <li>
            <a href="tel:{{theme_option('hotline')}}">
                <i class="fas fa-phone-alt"></i>
           
            </a>
          </li>
          <li class="search_mobie">

                <i class="fas   fa-search open_s_mb"></i>
                <i class="fas fa-times close_s_mb"></i>
            
          </li>
          <li>   
            <a href="{{route('public.cart')}}">
                <i class="fal fa-shopping-cart"></i>
                <span class="header__cart-notice"> {{Cart::instance('cart')->count()}} </span>
            </a>
          </li>
          <li>
            <ul class="header_list">
                @if (!auth('customer')->check())
                    <li><a href="{{ route('customer.login') }}"><span><i class="fal fa-user"></i></span></a></li>
                @else
                    <li class="img-user"><a href="{{ route('customer.overview') }}"><img class="br2" src="{{ auth('customer')->user()->avatar_url }}" alt="{{ auth('customer')->user()->name }}" ></a></li>
                    <li class="logout"><a href="{{ route('customer.logout') }}"><span>{{ __('Logout') }}</span></a></li>
                @endif
            </ul>
          </li>
          <li>
            <a href="{{theme_option('footer-social')}}">
                <i class="fab fa-facebook-f"></i>
            </a>
          </li>
      </ul>
    
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">


      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        @foreach($menu_nodes as $key => $row)
        @if ($row->has_child)
        <li class="nav-link nav-item dropdown dmenu">
            <a id="nav-bar-dropdown" class=" nav__menu-link dropdown-toggle" href="{{$row->url }}">{{ $row->name }}</a>
            <div class="dropdown-menu sm-menu menu-pc-dropdown">
                <div class="row">
                    <div class="col-8">
                       <div class="title-product">
                        <p>ARMCO® Barriers can provide all of your barrier and protection requirements with our vast and readily available product range.
                           
                        </p>
                        <p> We are the specialists in custom designing barrier systems for unusual and non-standard applications.</p>
                        <p>
                            Please browse through our product range and select the product of interest from the menu above. 
                        </p> 
                       </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                        @foreach($row->child as $key => $child)
                        <div class="menu-pc">
                            <div class="menu">
                                <ul class="list-unstyled">
                                    <li class="">
                                        <div class="category-type">
                                            <a href="{{ $child->url }}" data-toggle="{{$child->has_child ? 'collapse' : ''}}  " aria-expanded="true" >{{ $child->name }}</a>
                                            @if ($child->has_child)
                                            <i class="fal fa-angle-right"></i>
                                            @endif
                                        </div> 
                                    </li>
                                </ul>
                                <ul class="sub-menu-child">
                                    <div class="">
                                        @if ($child->has_child)
                                            @foreach($child->child as $key => $grandChild)
                                                <li>
                                                    <a href="{{$grandChild->url}}">{{$grandChild->name}}</a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </div> 
                                </ul>
                            </div>
                        </div>
                               
                        @endforeach
                   </div>
                </div>
                @foreach($row->child as $key => $child)
                <div class="menu-mb" style="display: none">
                    <a href="{{ $child->url }}" class="dropdown-toggle caret" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $child->name }}</a>
                    
                    <ul class="dropdown-menu">
                        @if ($child->has_child)
                        @foreach($child->child as $key => $grandChild)
                        <li><a href="{{$grandChild->url}}">{{$grandChild->name}}</a></li>
                        @endforeach
                        @endif
                    </ul>
                    
                </div>
                @endforeach
            </div>
        </li>
        
        @else
        <li class="nav-link nav-item @if ($row->url == Request::url()) active current  @endif">
            <a href="{{$row->url}}" class="nav__menu-link" target="{{ $row->target }}">
                @if (!blank($row->icon_font))
                <i class='{{ trim($row->icon_font) }}'></i>
                @endif
                {{ $row->name }}

            </a>
        </li>
        @endif
        @endforeach
    </ul>             
    </div>
</nav>
<script>

    $('.open_s_mb').click(function(){
        $('.search_mobie-ct').show(200);
        $('.close_s_mb').show();
        $('.open_s_mb').hide();
    })
    $('.close_s_mb').click(function(){
        $('.search_mobie-ct').hide(200);
        $('.close_s_mb').hide();
        $('.open_s_mb').show();
    })
</script>