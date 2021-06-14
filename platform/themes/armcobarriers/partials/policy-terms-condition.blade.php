<div class="col-md-5 col-12 order-md-2 order-1 policy-terms">
    @foreach($menu_nodes as $key => $row)
    <p><a href="{{$row->url}}">{{$row->name}}</a><p>
    @endforeach
</div>