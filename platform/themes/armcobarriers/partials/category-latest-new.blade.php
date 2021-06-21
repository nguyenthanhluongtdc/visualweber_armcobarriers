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
                                    <span class="share"> Share </span>
                                    <input class="share-url" value="{{$event->url}}"/>  
                                    <button class="btn-copy"> <i class="fal fa-copy"></i> </button>
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
    let $btnShare = $('.share');
    let $notificationButton = $('.notification-button');
    let $btnCopy = $('.btn-copy');
    let $input_url = $('.share-url');
    $share = false;

    $btnShare.on('click',function(event){
        event.preventDefault(); 
        $(this).next().toggleClass('active');
        $(this).next().next().toggleClass('active');
        if(!$share){
            $(this).text("Unshare");
            $share = true;
        }else {
            $share = false;
            $(this).text('Share');
        }
    });

    function fadeOutNotification(){
        setTimeout(function(){
            $notificationButton.removeClass('active');
        }, 2000);
    }
    
    $btnCopy.on('click', function() {
        $notificationButton.toggleClass('active');
        var text = $(this).prev().select();
        document.execCommand('copy');
    });

    $input_url.on('click',function(){
        $(this).select()
    })

    $notificationButton.on('transitionend', fadeOutNotification);
</script>