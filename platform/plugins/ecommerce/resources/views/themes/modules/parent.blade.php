@if($category->parent_id==0)
<li class="active">
    <div class="d-flex align-items-center justify-content-between px-4">
        <a href="{{$category->url}}" class="toggle-text">
            <p class="m-0 section-armco__header__cate"> {!! $category->name !!} </p>
        </a>
        <a href="#side{{$category->id}}" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">

            @if(Menu::checkChild(['parent_id' => $category->id]))
            @php echo "<i class='fas fa-chevron-down show icon-menulf'></i> "; @endphp
            @endif

        </a>
    </div>
    <ul class="list-unstyled list-categories collapse px-4" id="side{{$category->id}}" style="">
        @if ($category->children)
        {!!
        Menu::generateSidebar([
        'parent_id' => $category->id
        ])
        !!}
        @endif
    </ul>
</li>
@endif

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
