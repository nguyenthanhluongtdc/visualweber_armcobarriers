
@php 
    $cateId = is_array($categories) && !empty($categories) ? $categories['id'] : $categories->id;
@endphp
<div class="tab-pane fade tab3 active show" id="tab{{$cateId}}" role="tabpanel" aria-labelledby="tab{{$cateId}}-tab">
    <div class="box-media" style="margin-bottom: 50px;">
        <div class="content">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                        <div class="item">
                            <a href="{{$post->url}}">
                                <div class="box-img">
                                    <img src="{{RvMedia::getImageUrl($post->image)}}" alt="">
                                </div>
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
    {!! $tabs->links('vendor.pagination.tabs-custom',['category' => $cateId, 'order'=>2]) !!}
</div>
