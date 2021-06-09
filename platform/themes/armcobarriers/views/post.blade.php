<section>
    <div class="wrap-top">
        <div class="container-customize">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Homepage</a></li>
                    <li class="breadcrumb-item">News, Event & Media</li>
                </ol>
            </nav> 
        </div>
    </div>
</section>
@php
    $featured = get_featured_posts(5, [
        'author',
        'categories' => function ($query) { $query->limit(1); },
    ]);

    $featuredList = [];
    if (!empty($featured)) {
        $featuredList = $featured->pluck('id')->all();
    }
@endphp

<section>
    <div class="container-customize">
        <div class="description">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12"style="padding-right:5%">
                    <div class="news">
                        <h2>{{$post->categories->first()->name}}</h2>
                    </div>
                    <div class="cambodia">
                        <h1>{{$post->name}}</h1>
                    </div>
                    <div class="time">
                        <p>{{$post->created_at->format('j F Y') }}</p>
                    </div>
                    <div class="the-ministry">
                        <p>{{ $post->description }} </p>
                    </div>
                    <div class="news-content">
                        {!!$post->content!!}
                    </div>
                    <div class="author">
                        <div class="by">
                            <p>{{$post->author->name}}</p>
                        </div>
                        <div class="btn-share">
                            <a href="">Share <i class="fal fa-share-alt"></i> </a>
                        </div>
                    </div>
                    <div class="related">
                        <div class="title-related">
                            <h4>Related Post</h4>
                        </div>
                        <div class="ul">
                            @foreach (get_related_posts($post->id,5) as $post_releted)
                            <a href="{{$post_releted->url}}"><li>{{$post_releted->name}}</li></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                    <div class="top-news">
                        <h2>Top News</h2>
                    </div>
                    <div class="row wrap-news">
                        @foreach ($featured as $featureItem)
                            <div class="col-lg-6 col-md-4 col-sm-4  img">
                                <img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="">
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-8  description">
                                <a href="{{$featureItem->url}}" title="#">{{$featureItem->name}}</a>
                                <p>{{$featureItem->created_at->format('j F Y')}}</p>
                                <p>{{$featureItem->description}} </p>
                            </div>
                        @endforeach
                       
                        
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>
<section style="padding-top:3%">
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.components.form-signup")
    </div>
</section>