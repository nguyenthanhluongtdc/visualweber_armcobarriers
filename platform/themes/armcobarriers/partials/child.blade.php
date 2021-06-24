
@foreach($menu_nodes as $row)
    <li>
        <a href="{{$row->url}}" title="{{$row->name}}"> {{$row->name}} </a>
    </li>
@endforeach