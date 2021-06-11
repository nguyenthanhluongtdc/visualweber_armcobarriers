

   
@if($category->parent_id==0 || isset($show))
<li class="active">
    <div class="d-flex align-items-center justify-content-between px-3 ">
        <a href="{{$category->url}}" class="toggle-text"><p> {!! $category->name !!} </p></a>
        <a href="#side{{$category->id}}" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
         
            @if(Menu::checkChild(['parent_id' => $category->id]))
               @php echo "<i class='fas fa-chevron-down icon-menulf'></i>"; @endphp
            @endif
            
        </a>
    </div>
    <ul class="list-unstyled list-categories collapse show" id="side{{$category->id}}" style="">
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
   