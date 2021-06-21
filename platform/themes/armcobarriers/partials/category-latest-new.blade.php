@php $post_by_category = get_posts_by_category_unpaginate($menu_nodes[0]->reference_id,3); @endphp

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
                            <a href="{{$event->url}}">
                                <div class="post-img">
                                    <img src="{{ RvMedia::getImageUrl($event->image) }}" alt="">
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
                                    <div class="fb-share-button share" data-href="{{$event->url}}">
                                        <span>Share</span>
                                    </div>
                                    <a class="type"> {!! $event->categories->first()->name !!} </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

<script>
    //share link to facebook
     var width  = 800,
        height = 600,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = "",
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;

    $(document).on('click','.fb-share-button',function() {
        url = $(this).attr("data-href");
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
           'facebook-share-dialog', opts
        );
        return false;
    })
</script>