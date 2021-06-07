@includeIf("theme.armcobarriers::views.components.breadcrumb")
<!--title-->
<div class="pages-news-media">
    <div class="container-customize">
        <h1> Lastest <br> New & Events </h1>
        <div class="box-media pt-5 pb-lg-5">
            <div class="content">
                <div class="row">
                    @foreach(get_posts_by_category(2,3) as $event)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5 mb-md-0">
                            <div class="item">
                                <a href="/news-detail">
                                    <img src="{{ RvMedia::getImageUrl($event->image) }}" alt="">
                                    <h3>
                                        {{$event->name}}
                                    </h3>
                                    <p>
                                        {{$event->description}}
                                    </p>
                                </a>

                                <div class="options">
                                    <div class="date"> {{$event->created_at->format('j F Y') }} </div>
                                    <a class="share"> Share </a>
                                    <a class="type"> Event </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="tile" id="tile-1">
        <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <div class="slider"></div>
                <li class="item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">           
                        News
                    </a>
                </li>
                
                <li class="item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                        Events
                    </a>
                </li>
                <li class="item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                        Media
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="item-row">
                        <div class="row ml-md-0 ml-sm-0 ml-xs-0 pr-md-0 pr-sm-0 pr-xs-0">
                            @foreach(get_posts_by_category(6,12) as $new)
                            <div class="col-lg-6 mb-md-line p0-md pr-md-0 pr-sm-0 pr-xs-0 mb-3">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-6 pr-0 mb-3 mb-sm-0">
                                        <a href="{{$new->slug}}">
                                            <img class="mw-100" src="{{ RvMedia::getImageUrl($new->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6 col-6">
                                        <h5> <a href="/news-detail">{{$new->name}}</a> </h5>
                                        <div class="date"> {{$new->created_at->format('j F Y')}} </div>
                                        <p class="des">
                                            {{$new->description}} 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Events</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="box-media">
                        <div class="content">
                            <div class="row">
                            @foreach(get_posts_by_category(15,12) as $media)
                                <div class="col-lg-4 col-md-4 col-sm-6 mb-5 mb-md-0">
                                    <div class="item">
                                        <a href="/news-detail">
                                            <img src="{{ RvMedia::getImageUrl($media->image) }}" alt="">
                                            <h3> {{$media->name}} </h3>
                                        </a>
                                        <div class="options pt-0 pb-0">
                                            <div class="date my-0 text-left"> {{$media->created_at->format('j F Y')}} </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-7 mt-n20">
            <div class="row">
                <div class="col-md-12">
                <div class="pt-0 mt-0 pagination_style1">
                    <nav aria-label="...">
                    <ul class="pagination">
                        {{-- <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li> --}}
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item page-link-last">
                        <a class="" href="#">Next page</a>
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
