@foreach($categories as $category)
<li>
    <a href="{{$category->url}}"> {{$category->name}} </a>
</li>
@endforeach
