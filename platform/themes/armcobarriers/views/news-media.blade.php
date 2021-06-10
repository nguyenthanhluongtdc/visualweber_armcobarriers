
@includeIf("theme.armcobarriers::views.components.breadcrumb")
<!--title-->
<div class="pages-news-media">
    <div class="container-customize">
        <h1> Lastest <br> New & Events </h1>
        <div class="box-media pt-5 pb-lg-5">
            <div class="content">
                <div class="row">
                    @foreach(get_posts_by_category(17,3) as $event)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5 mb-md-0">
                            <div class="item">
                                <a href="/news-detail">
                                    <img src="{{ RvMedia::getImageUrl($event->image) }}" alt="">
                                    <h3>
                                        {{$event->name}}
                                    </h3>
                                    <code>
                                        {{$event->description}}
                                    </code>
                                </a>

                                <div class="options">
                                    <div class="date"> {{$event->created_at->format('j F Y') }} </div>
                                    <a class="share"> Share </a>
                                    <a class="type"> {!! $event->categories->first()->name !!} </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {!!
            Menu::renderMenuLocation('tabs-menu', [
                'options' => [],
                'theme' => true,
                'view' => 'news-media-tabs',
            ])
        !!}

        <div class="my-7 mt-n20">
            <div class="row">
                <div class="col-md-12">
                <div class="pt-0 mt-0 pagination_style1">
                    <nav aria-label="...">
                    <ul class="pagination">
                        {{-- <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">← Prev</a>
                        </li> --}}
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item page-link-last">
                        <a class="" href="#">Next →</a>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>  
            </div>
        </div>

        @includeIf("theme.armcobarriers::views.components.form-signup") 
        
    </div>
</div>
