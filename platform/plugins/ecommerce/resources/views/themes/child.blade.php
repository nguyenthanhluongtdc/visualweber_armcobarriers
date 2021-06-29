@foreach($categories as $category)
<li>
    <a class="section-armco__header__column" href="{{$category->url}}"> {{$category->name}} </a>
</li>
@endforeach
