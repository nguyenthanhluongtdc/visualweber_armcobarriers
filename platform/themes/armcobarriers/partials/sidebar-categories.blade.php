<div id="sidebar" class="mw-100">
    <ul class="list-unstyled">
    @foreach ($menu_nodes as $key => $row)
        <li class="active">
            <a href="#item{{$key}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" title="{{$row->name}}">
                <p> {!! $row->name !!} </p>
                @if ($row->has_child)
                    <i class="fas fa-chevron-down icon-menulf"></i> 
                @endif
            </a>
            <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a> -->
            @if ($row->has_child)
                <ul class="list-unstyled list-categories collapse {{$key==0?'show':''}}" id="item{{$key}}" style="">
                    {!! Menu::generateMenu([
                        'slug' => $menu->slug,
                        'parent_id' => $row->id,
                        'view' => 'child',
                    ]) !!}
                </ul>
            @endif
        </li>
    @endforeach
    </ul>            
</div>

<style>
    #sidebar >ul>li{
        border-bottom: 2px solid white;
    }
</style>

