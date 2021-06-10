
@foreach($menu_nodes as $row)
    <li>
        <a href="{{$row->url}}"> {{$row->name}} </a>
    </li>
@endforeach