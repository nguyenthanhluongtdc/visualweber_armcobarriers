
@php 
    $cateId = is_array($category) && !empty($category) ? $category['id'] : $category->id;
@endphp

<div class="tab-pane fade tab1 show active" id="tab{{$cateId}}" role="tabpanel" aria-labelledby="tab{{$cateId}}-tab">
    <div class="item-row" style="margin-bottom: 50px;">
        <div class="row ml-md-0 ml-sm-0 ml-xs-0 pr-md-0 pr-sm-0 pr-xs-0">
            @if(!empty($posts))
                @foreach($posts as $post) 
                    <div class="col-lg-6 mb-md-line p0-md pr-md-0 pr-sm-0 pr-xs-0 mb-3">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-6 col-6 pr-0 mb-3 mb-sm-0">
                                <a href="{{$post->url}}">
                                    <img class="mw-100" src="{{RvMedia::getImageUrl($post->image)}}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-6 col-6">
                                <h5> <a href="{{$post->url}}"> {{$post->name}} </a> </h5>
                                <div class="date"> {{$post->created_at->format('j F Y')}} </div>
                                <p class="des">
                                    {{$post->description}} 
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    {!! $posts->links('vendor.pagination.custom') !!}
</div>

<style>
    .pagination_style1 {
        margin-top: 0;
        margin-bottom: 70px;
    }
</style>
