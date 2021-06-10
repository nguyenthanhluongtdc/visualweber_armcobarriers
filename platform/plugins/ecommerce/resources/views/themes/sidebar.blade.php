<div id="sidebar" class="mw-100">
    <ul class="list-unstyled">
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
              <p> {!! $category->name !!} </p>
              <i class="fas fa-chevron-down icon-menulf"></i> 
            </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
            <ul class="list-unstyled list-categories collapse show" id="homeSubmenu" style="">
                @foreach($categories as $category)
                <li>
                    <a href="{{$category->url}}"> {{$category->name}} </a>
                </li>
                @endforeach
            </ul>
        </li>
    </ul>            
</div>