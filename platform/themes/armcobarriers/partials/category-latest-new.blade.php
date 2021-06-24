@php 
    if(!empty($menu_nodes[0]))
    $post_by_category = get_posts_by_category_unpaginate($menu_nodes[0]->reference_id,3); 
    else $post_by_category = [];
@endphp

<div class="animate slide-in-down notification-button">
    <i class="fa fa-files-o"></i> Link Copied to Clipboard
</div>
<h1> Lastest <br> New & {{isset($menu_nodes[0])?$menu_nodes[0]->title:''}} </h1>
<div class="box-media pt-5 pb-5">
    <div class="content">
        <div class="row">
            @if(!empty($post_by_category))
                @foreach($post_by_category as $event)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5 mb-md-0">
                        <div class="item">
                            <a href="{{$event->url}}" title="{{$event->name}}">
                                <div class="post-img">
                                    <img src="{{ RvMedia::getImageUrl($event->image) }}" alt="{{$event->name}}">
                                </div>
                                <h3>
                                    {{$event->name}}
                                </h3>
                                <div class="descriptions">
                                    {{$event->description}}
                                </div>
                            </a>
                            <div class="options">
                                <div class="date"> {{$event->created_at->format('j F Y') }} </div>
                                <div class="box">
                                    <div class="fb-share-button share" data-href="{{$event->url}}" target="_blank">
                                        <span>Share</span>
                                    </div>
                                    <a class="type" href={{$event->categories->first()->url}} title="{{$event->categories->first()->name}}"> {!! $event->categories->first()->name !!} </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>