
@if ($paginator->hasPages())
<div class="row">
    <div class="col-lg-12">
        <div class="pagination_style1 mt-0" style="margin-bottom: 65px;">
            <nav aria-label="...">
                <ul class="pagination">
            
                @if ($paginator->onFirstPage())
                    <li class="disabled page-link-last"><span>← Prev</span></li>
                @else
                    <li class="page-link-last"><a href="{{ $paginator->previousPageUrl() }}&category={{$category}}&order={{$order}}" rel="prev">← Prev</a></li>
                @endif

                @foreach ($elements as $element)
                
                    @if (is_string($element))
                        <li class="disabled"><span>{{ $element }}</span></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active page-item"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $url }}&category={{$category}}&order={{$order}}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="page-link-last"><a href="{{ $paginator->nextPageUrl() }}&category={{$category}}&order={{$order}}" rel="next">Next →</a></li>
                @else
                    <li class="page-link-last disabled">
                        <span> Next → </span>
                    </li>
                @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
@endif 
