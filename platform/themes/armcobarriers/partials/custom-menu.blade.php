<nav class="navbar navbar-expand-lg">
    <a href="/" class="logo__link">
        
        <img src="{{ Theme::asset()->url('images/header/logo.png') }}" alt="">
    </a>
    
    <div class="toolbar-mobile">
      <ul class="list-tool">
          <li>
            <a href="tel:1800 808 619">
                <i class="fas fa-phone-alt"></i>
           
            </a>
          </li>
          <li>
            <a href="">
                <i class="fas   fa-search"></i>
            </a>
          </li>
          <li>   
            <a href="">
                <i class="fal fa-shopping-cart"></i>
                <span class="header__cart-notice">0</span>
            </a>
          </li>
          <li>
            <a href="">
                <i class="fal fa-user"></i>
            </a>
          </li>
          <li>
            <a href="">
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
            <a id="nav-bar-dropdown" class=" nav__menu-link dropdown-toggle" data-toggle="dropdown" href="{{ $row->has_child!=0?'javascript:void(0);':$row->url }}">{{ $row->name }}</a>
            <div class="dropdown-menu sm-menu">
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
                                <div class="menu">
                                    <ul class="list-unstyled">
                                        <li class="">
                                            <div class="category-type">
                                                <a href="{{ $child->url }}"  aria-expanded="true" >{{ $child->name }}</a>
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
                            @endforeach
                   </div>
                </div>
            </div>
        </li>
        
        @else
        <li class="nav-link nav-item active  @if ($row->url == Request::url()) current @endif">
            <a href="{{ $row->url }}" class="nav__menu-link" target="{{ $row->target }}">
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