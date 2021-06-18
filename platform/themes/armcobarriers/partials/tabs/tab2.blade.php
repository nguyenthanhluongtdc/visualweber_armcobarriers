

@php $number_per_tabs = theme_option('number_of_posts_in_a_tabs'); @endphp
@php
    if(!empty($args)){
        $cateId = $args['id'];
        $path = $args['path']; 
    }
    $active = isset($active) ? $active : 0;
    $tabs = get_posts_by_category($cateId, $number_per_tabs,0, $cateId==$active?true:false);
@endphp
<div class="tab-pane fade tab3 {{$active==$cateId?'active show':''}}" id="{{$path}}" role="tabpanel" aria-labelledby="tab{{$path}}-tab">
    <div class="box-media" style="margin-bottom: 50px;">
        <div class="content">
            <div class="row">
                @foreach($tabs as $post)
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
