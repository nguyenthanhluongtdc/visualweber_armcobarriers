<!--get tabs' post number-->

@php $number_per_tabs = theme_option('number_of_posts_in_a_tabs'); @endphp

@php 
    //get id category tabs
    $pathFull = url()->full();
    $pos = strpos($pathFull, 'category=');
    if(!empty($menu_nodes)){
        $cateActive = $menu_nodes[0]->reference_id;
        if($pos!=false){
            $pathSplit = substr($pathFull, $pos+9);
            $cateActive = explode("&",$pathSplit)[0];
        }
    }
@endphp

<div class="tile" id="tile-1">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <div class="slider" id="slide-scroll"></div>
        @foreach($menu_nodes as $key => $row)
            @php $path = parse_url($row->url, PHP_URL_PATH); @endphp
            <li class="item">
                 <a class="nav-link {{$cateActive==$row->reference_id?'active':''}}" id="tab-tab{!!$row->reference_id!!}" data-toggle="tab" href="#{!!$path!!}" role="tab" aria-controls="tab{!!$row->reference_id!!}" aria-selected="true">           
                    {{ $row->title }}
                </a>
            </li>
        @endforeach
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" >
        @if(!empty($menu_nodes[0]))
            @php 
                $args = [ 
                    'id'=>$menu_nodes[0]->reference_id,
                    'path'=>parse_url($menu_nodes[0]->url, PHP_URL_PATH)
                ];
            @endphp
            @includeIf("theme.armcobarriers::partials.tabs.tab1",["args"=>$args,"active"=>$cateActive])
        @endif

        @if(!empty($menu_nodes[1]))
            @php 
                $args = [ 
                    'id'=>$menu_nodes[1]->reference_id,
                    'path'=>parse_url($menu_nodes[1]->url, PHP_URL_PATH)
                ];
            @endphp
            @includeIf("theme.armcobarriers::partials.tabs.tab1",["args"=>$args, 'active'=>$cateActive])
        @endif

        @if(!empty($menu_nodes[2]))
            @php 
                $args = [ 
                    'id'=>$menu_nodes[2]->reference_id,
                    'path'=>parse_url($menu_nodes[2]->url, PHP_URL_PATH)
                ];
            @endphp
            @includeIf("theme.armcobarriers::partials.tabs.tab2",["args"=>$args, 'active'=>$cateActive])
        @endif
    </div>
</div>
                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        var target = $("#tab-tab{{$cateActive}}").attr("href");
        if(target) {
            $('html, body').stop().animate({
        		scrollTop: $(target).offset().top-180
            }, 600);
        }

        $(document).on('click', '.pagination a', function(event){
            event.preventDefault(); 
            let path = $(this).attr('href').split('page=')[1];
            fetch_data(path);
        });

        function fetch_data(path)
        {
            path = "?page="+path+"&num={{$number_per_tabs}}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
            url:"/news-media/ajax"+path,
            success:function(response){
                    $('.tab-pane.active').html(response)
                    if(response){
                        window.history.pushState({}, '', path);
                    }
                }
            });
        }

        $("#tile-1 .nav-tabs a").on('click',function() {
            var position = $(this).parent().position();
            var width = $(this).parent().width() * 0.3;
            $("#tile-1 .slider").css({ "left": +position.left, "width": width });
        });
        var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width() * 0.3;
        var actPosition = $("#tile-1 .nav-tabs .active").position();
        $("#tile-1 .slider").css({ "left": +actPosition.left, "width": actWidth });
    });
</script>