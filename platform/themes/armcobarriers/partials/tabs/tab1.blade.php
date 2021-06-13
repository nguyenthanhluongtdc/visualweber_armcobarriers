

<div class="item-row" style="margin-bottom: 50px;">
    <div class="row ml-md-0 ml-sm-0 ml-xs-0 pr-md-0 pr-sm-0 pr-xs-0">
        @foreach($tabs as $post) 
            <div class="col-lg-6 mb-md-line p0-md pr-md-0 pr-sm-0 pr-xs-0 mb-3">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-6 pr-0 mb-3 mb-sm-0">
                        <a href="{{$post->url}}">
                            <img class="mw-100" src="{{RvMedia::getImageUrl($post->image)}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-6">
                        <h5> <a href="{{$post->slug}}"> {{$post->name}} </a> </h5>
                        <div class="date"> {{$post->created_at->format('j F Y')}} </div>
                        <p class="des">
                            {{$post->description}} 
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
{!! $tabs->links('vendor.pagination.tabs-custom',['type' => $categoryId, 'order'=>1]) !!}