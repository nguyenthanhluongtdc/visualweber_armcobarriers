<div class="col-lg-4 col-md-9 col-12 mb-lg-0 mb-5">
    <div class="widget"> 
        @foreach($menu_nodes as $key => $row)
            <li class="widget_links"><a href="{{ $key==0 ? route('public.index') : $row->url  }}">{{$row->name}}</a></li>
        @endforeach
    </div>
</div>
