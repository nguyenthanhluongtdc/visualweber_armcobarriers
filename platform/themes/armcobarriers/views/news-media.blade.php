
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
                                    <div class="box">
                                        <a class="share"> Share </a>
                                        <a class="type"> {!! $event->categories->first()->name !!} </a>
                                </div>
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


        @includeIf("theme.armcobarriers::views.components.form-signup") 
        
    </div>
</div>
