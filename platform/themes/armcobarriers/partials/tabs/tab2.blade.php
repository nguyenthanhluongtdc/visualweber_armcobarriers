

<div class="box-media" style="margin-bottom: 50px;">
    <div class="content">
        <div class="row">
            @foreach($tabs as $post)
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <div class="item">
                        <a href="{{$post->url}}">
                            <img src="{{RvMedia::getImageUrl($post->image)}}" alt="">
                            <h3> {{$post->name}} </h3>
                        </a>
                        <div class="options pt-0 pb-0">
                            <div class="date my-0 text-left"> {{$post->created_at->format('j F Y')}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
{!! $tabs->links('vendor.pagination.tabs-custom',['cate' => $categoryId, 'order'=>2]) !!}