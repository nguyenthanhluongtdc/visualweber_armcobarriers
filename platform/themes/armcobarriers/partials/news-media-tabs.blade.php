<!--get tabs' post number-->

@php $number_per_tabs = theme_option('number_of_posts_in_a_category'); @endphp
@php 
    //get id category tabs
    //$pathFull = url()->full();
    //$pos = strpos($pathFull, 'category=');
    //if(!empty($menu_nodes)){
    //   $cateActive = $menu_nodes[0]->reference_id;
    //    if($pos!=false){
    //        $pathSplit = substr($pathFull, $pos+9);
    //        $cateActive = explode("&",$pathSplit)[0];
    //    }
    //}

    $paths = [];
    $scroll = false;
    if(isset($category) && !empty($category))
        {
            $cateId = $category->id; 
            $temp = $cateId;
            $scroll = true;
            if(empty($menu_nodes[0])) $cateId = "";
            else {
                foreach($menu_nodes as $row) {
                    if(in_array($temp, (array)$row->reference_id))
                        {$cateId = $row->reference_id;
                        break;}
                    else $cateId = "";
                }
            }
        }
    else if(!empty($menu_nodes[0]))
        $cateId = $menu_nodes[0]->reference_id;
    else 
        $cateId = "";
    
    if(isset($posts) && !empty($posts))
        $posts = $posts;
    else 
        if($cateId!="")
            $posts = get_posts_by_category($cateId, $number_per_tabs,0, false) 
@endphp

<div class="tile" id="tile-1">
    <!-- Nav tabs -->
    @if(!empty($menu_nodes[0]))
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <div class="slider" id="slide-scroll"></div>
            @foreach($menu_nodes as $key => $row)
                @php $path = parse_url($row->url, PHP_URL_PATH); $paths[] = $path; @endphp
                <li class="item">
                    <a class="nav-link {{$cateId==$row->reference_id?'active':''}}" id="tab-tab{!!$row->reference_id!!}" data-toggle="tab" href="#tab{!!$row->reference_id!!}" role="tab" aria-controls="tab{!!$row->reference_id!!}" aria-selected="true" title="{{$row->title}}">           
                        {{ $row->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- Tab panes -->
    <div class="tab-content" >
        @if(!empty($posts) && $cateId!="")
            @php 
                $data = [ 
                    'category'=>['id'=>$cateId],
                    'posts' => $posts,
                ];
            @endphp
            @includeIf("theme.armcobarriers::partials.tabs.tab1",$data)
        @endif
    </div>
</div>
                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        //
        let paths = [<?php echo '"'.implode('","', $paths).'"' ?>];
         //scroll to tabs
        let scroll = "{{$scroll}}";

        //click title tabs
        $.each($('ul.nav-tabs a'), function(index, item) {
            $(this).on('click',function(){
                fetch_ajax(paths[index]);
            })
        })

        //click tag a paginate
        $(document).on('click', '.pagination a', function(event){
            event.preventDefault(); 
            if(scroll) {
                let path = $(this).attr('href');
                path = "/"+path.substr(path.indexOf('/',8) + 1)
                fetch_ajax(path)
            }else {
                let num = $(this).attr('href').split('?page=')[1];
                if(paths.length > 0){
                    let path = paths[0]+`?page=${num}`;
                    fetch_ajax(path)
                }
            }
        });

        //method fetch ajax
        function fetch_ajax(path) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
            url:path,
            success:function(response){
                    $('.tab-content').html(response)
                    window.history.pushState({}, '', path);
                    if(response) {
                        scroll = true;
                    }
                }
            });
        }

        if(scroll){
            var target = $('ul.nav-tabs .nav-link.active').attr("href");
            $('html, body').stop().animate({
                    scrollTop: $(target).offset().top-170
            }, 600);
        }

        //click tabs
        $("#tile-1 .nav-tabs a").on('click',function() {
            var position = $(this).parent().position();
            var width = $(this).parent().width() * 0.3;
            $("#tile-1 .slider").css({ "left": +position.left, "width": width });
        });
        var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width() * 0.3;
        var actPosition = $("#tile-1 .nav-tabs .active").position();
        $("#tile-1 .slider").css({ "left": +actPosition.left, "width": actWidth });
    });


    const window.SCROLL = true;

    if(window.SCROLL) {
        var target = $('ul.nav-tabs .nav-link.active').attr("href");
        $('html, body').stop().animate({
                scrollTop: $(target).offset().top-170
        }, 600);
    }
</script>