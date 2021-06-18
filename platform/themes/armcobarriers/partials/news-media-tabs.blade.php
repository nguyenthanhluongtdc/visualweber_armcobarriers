<!--get tabs' post number-->
@php $number_per_tabs = theme_option('number_of_posts_in_a_tabs'); @endphp

@php 
    //get id category tabs
    $pathFull = url()->full();
    $pos = strpos($pathFull, 'category=');
    $cateId = 0;
    if($pos!=false){
        $pathSplit = substr($pathFull, $pos+9);
        $cateId = explode("&",$pathSplit)[0];
    }
@endphp

@php $active = false; @endphp
@foreach($menu_nodes as $row)
    @if($row->reference_id==$cateId) 
        @php $active = true; @endphp 
    @endif
@endforeach

<div class="tile" id="tile-1">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <div class="slider" id="slide-scroll"></div>
        @foreach($menu_nodes as $key => $row)
            <li class="item">
                 <a class="nav-link {{($key==0&&$active==false)?'active':($cateId==$row->reference_id)?'active':''}}" id="tab-tab{!!$row->reference_id!!}" data-toggle="tab" href="#tab{!!$row->reference_id!!}" role="tab" aria-controls="tab{!!$row->reference_id!!}" aria-selected="true">           
                    {{ $row->title }}
                </a>
            </li>
        @endforeach
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" >
        @if(!empty($menu_nodes[0]))
            @php 
                $categoryId = $menu_nodes[0]->reference_id;
                $tabs1 = get_posts_by_category($categoryId, $number_per_tabs,0, $categoryId==$cateId?true:false);
            @endphp
            <div class="tab-pane fade tab1 {{$active==false || $cateId==$categoryId ?'show active': ''}}" id="tab{{$categoryId}}" role="tabpanel" aria-labelledby="tab{{$categoryId}}-tab">
                @includeIf("theme.armcobarriers::partials.tabs.tab1",["tabs"=>$tabs1, "categoryId"=>$categoryId])
            </div>
        @endif

        @if(!empty($menu_nodes[1]))
            @php 
                $categoryId = $menu_nodes[1]->reference_id;
                $tabs2 = get_posts_by_category($categoryId, $number_per_tabs,0, $categoryId==$cateId?true:false);
            @endphp
            <div class="tab-pane fade tab2 {{$cateId==$categoryId?'active show':''}}" id="tab{{$categoryId}}" role="tabpanel" aria-labelledby="tab{{$categoryId}}-tab">
                @includeIf("theme.armcobarriers::partials.tabs.tab1",["tabs"=>$tabs2,"categoryId"=>$categoryId])
            </div>
        @endif

        @if(!empty($menu_nodes[2]))
            @php 
                $categoryId = $menu_nodes[2]->reference_id;
                $tabs3 = get_posts_by_category($categoryId, $number_per_tabs,0, $categoryId==$cateId?true:false);
            @endphp
            <div class="tab-pane fade tab3 {{$cateId==$categoryId?'active show':''}}" id="tab{{$categoryId}}" role="tabpanel" aria-labelledby="tab{{$categoryId}}-tab">
                @includeIf("theme.armcobarriers::partials.tabs.tab2",["tabs"=>$tabs3,"categoryId"=>$categoryId])
            </div>
        @endif
    </div>
</div>
                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        var target = $("#tab-tab{{$cateId}}").attr("href");
        $('html, body').stop().animate({
        		scrollTop: $(target).offset().top-180
        }, 600, function() {
            location.hash = target;
        });

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