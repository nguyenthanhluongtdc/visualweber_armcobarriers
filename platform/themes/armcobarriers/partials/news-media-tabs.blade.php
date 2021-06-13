<!--get tabs' post number-->
@php $number_per_tabs = theme_option('number_of_posts_in_a_tabs'); @endphp

<div class="tile" id="tile-1">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <div class="slider"></div>
        @foreach($menu_nodes as $key => $row)
            <li class="item">
                 <a class="nav-link {{$key==0?'active':''}}" id="tab-tab{!!$row->reference_id!!}" data-toggle="tab" href="#tab{!!$row->reference_id!!}" role="tab" aria-controls="tab{!!$row->reference_id!!}" aria-selected="true">           
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
                $tabs1 = get_posts_by_category($categoryId, $number_per_tabs);
            @endphp
            <div class="tab-pane fade show active tab1" id="tab{{$categoryId}}" role="tabpanel" aria-labelledby="tab{{$categoryId}}-tab">
                @includeIf("theme.armcobarriers::partials.tabs.tab1",["tabs"=>$tabs1, "categoryId"=>$categoryId])
            </div>
        @endif

        @if(!empty($menu_nodes[1]))
            @php 
                $categoryId = $menu_nodes[1]->reference_id;
                $tabs2 = get_posts_by_category($categoryId, $number_per_tabs);
            @endphp
            <div class="tab-pane fade tab2" id="tab{{$categoryId}}" role="tabpanel" aria-labelledby="tab{{$categoryId}}-tab">
                @includeIf("theme.armcobarriers::partials.tabs.tab1",["tabs"=>$tabs2,"categoryId"=>$categoryId])
            </div>
        @endif

        @if(!empty($menu_nodes[2]))
            @php 
                $categoryId = $menu_nodes[2]->reference_id;
                $tabs3 = get_posts_by_category($categoryId, $number_per_tabs);
            @endphp
            <div class="tab-pane fade tab3" id="tab{{$categoryId}}" role="tabpanel" aria-labelledby="tab{{$categoryId}}-tab">
                @includeIf("theme.armcobarriers::partials.tabs.tab2",["tabs"=>$tabs3,"categoryId"=>$categoryId])
            </div>
        @endif
    </div>
</div>
                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(document).on('click', '.pagination a', function(event){
            event.preventDefault(); 
            let page = $(this).attr('href').split('page=')[1];
            let type = $(this).attr('href').split('type=')[1];
            let order = $(this).attr('href').split('order=')[1];
            fetch_data(page, type, order);
        });

        function fetch_data(page, type, order)
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
            url:"/news-media/ajax?page="+page+"&type="+type+"&num={{$number_per_tabs}}&order="+order,
            success:function(response){
                    $('.tab-pane.active').html(response)
                }
            });
        }
    });
</script>     