<section>
    <div class="container-customize">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Homepage</a></li>
                <li class="breadcrumb-item active" aria-current="page">News, Event & Media</li>
            </ol>
        </nav> 
    </div>
</section>
<section>
    <div class="container-customize">
     <div class="news-all-wrapper">
          <div class="box-media pt-5 pb-5">
            <div class="content">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-5 mb-md-0">
                        <div class="item">
                            <a href="">
                                <img src="{{ Theme::asset()->url('images/news-media/news1.png') }}" alt="">
                                <h3>Om Wire and Wire Products Industries is a reputed
                                    Highway Crash Barrier, Crash Barrier
                                </h3>
                                <p>
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum...
                                </p>
                            </a>

                            <div class="options">
                                <div class="date"> 21 Apr 2020 </div>
                                <a class="share"> Share </a>
                                <a class="type"> Events </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-5 mb-md-0">
                        <div class="item">
                            <a href="">
                                <img src="{{ Theme::asset()->url('images/news-media/news2.png') }}" alt="">
                                <h3>Om Wire and Wire Products Industries is a reputed
                                    Highway Crash Barrier, Crash Barrier
                                </h3>
                                <p>
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum...
                                </p>
                            </a>

                            <div class="options">
                                <div class="date"> 21 Apr 2020 </div>
                                <a class="share"> Share </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-5 mb-md-0">
                        <div class="item">
                            <a href="">
                                <img src="{{ Theme::asset()->url('images/news-media/news3.png') }}" alt="">
                                <h3>Om Wire and Wire Products Industries is a reputed
                                    Highway Crash Barrier, Crash Barrier
                                </h3>
                                <p>
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum...
                                </p>
                            </a>

                            <div class="options">
                                <div class="date"> 21 Apr 2020 </div>
                                <a class="share"> Share </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
      </div>
    </div>
</section>
<section>
    <div class="container-customize">
        <div class="list-news-wrapper">
            <div class="item-row">
                <div class="row ml-md-0 ml-sm-0 ml-xs-0 pr-md-0 pr-sm-0 pr-xs-0">

                    @foreach(get_all_posts() as $post)
                    <div class="col-lg-6 mb-md-line p0-md pr-md-0 pr-sm-0 pr-xs-0 mb-3">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-6 col-6 pr-0 mb-3 mb-sm-0">
                                <img class="mw-100" src="{{ rvMedia::getImageUrl($post->image) }}" alt="">
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-6 col-6">
                                <h5> {!! $post->name !!} </h5>
                                <div class="date"> {!! $post->created_at->format('j F Y') !!} <a class="btn-event" href=""> {!! $post->categories->first()->name !!} </a> </div>
                                <p class="des">
                                    @php echo $post->description @endphp 
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 pagination_news-all">
            <div class="mt-3 pagination_style1">
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
                    <a class="" href="#"> Next → </a>
                    </li>
                </ul>
                </nav>
            </div>
            </div>
        
        </div>
    </div>
</section>

<section>
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.components.form-signup")
    </div>
</section>