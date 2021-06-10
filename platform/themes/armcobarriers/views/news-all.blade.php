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
                @foreach (get_post_is_featured() as $post)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5 mb-md-0">
                        <div class="item">
                            <a href="">
                                <img src="{{rvMedia::getImageUrl($post->image)}}" alt="">
                                <h3>
                                    {{$post->name}}
                                </h3>
                                <p>
                                    {{$post->description}}
                                </p>
                            </a>

                            <div class="options">
                                <div class="date"> {{$post->created_at->format('j F Y')}} </div>
                                <a class="share"> Share </a>
                                <a class="type"> {!! $post->categories->first()->name !!} </a>
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
</section>
<section>
    <div class="container-customize">
        @if(count($posts)>0)
        <div class="list-news-wrapper">
            <div class="item-row">
                <div class="row ml-md-0 ml-sm-0 ml-xs-0 pr-md-0 pr-sm-0 pr-xs-0">

                    @foreach($posts as $post)
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

        {{ $posts->links('vendor.pagination.custom') }}

        @endif
    </div>
</section>

<section>
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.components.form-signup")
    </div>
</section>

<style>
    .pagination_style1 {
        margin-top: 3rem;
        padding-bottom: 70px;
    }
</style>