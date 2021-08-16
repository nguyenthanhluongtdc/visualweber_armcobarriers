<ul class="list-unstyled">
    @foreach ($menu_nodes as $key => $category)
        <li class="active">
            <div class="d-flex align-items-center justify-content-between px-4">
                <a href="{{$category->url}}" class="toggle-text">
                    <p class="m-0 section-armco__header__cate"> {!! $category->name !!} </p>
                </a>

                @if ($category->has_child)
                    <a href="#side{{$category->id}}" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <i class='fas fa-chevron-down show icon-menulf'></i> 
                    </a>
                @endif
            </div>
            {{-- <ul class="list-unstyled list-categories collapse px-4" id="side{{$category->id}}" style="">
            @if ($category->has_child)
                {!! Menu::generateMenu([
                    'slug' => $menu->slug,
                    'parent_id' => $category->id
                ]) !!}
            @endif
            </ul> --}}

            @if ($category->has_child)
                {!! Menu::generateMenu([
                    'options' => ['id'=>"side".$category->id, 'class'=>'list-unstyled list-categories collapse px-4'],
                    'slug' => $menu->slug,
                    'parent_id' => $category->id
                ]) !!}
            @endif
        </li>
    @endforeach
</ul>

<script>
    jQuery(function($) {
        var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $('ul a').each(function() {
            if (this.href === path) {
                $(this).addClass('active');
                $(this).parent().parent().addClass('show');
            }
        });
    });

</script>