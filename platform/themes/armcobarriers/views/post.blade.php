@includeIf("theme.armcobarriers::views.modules.breadcrumb")
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

<section class="section-armco">
    <div class="container-customize">
        <div class="description">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12" style="padding-right:5%">
                    <div class="news section-armco__header__titleSmall mb-4">
                        <h2>{{$post->categories->first()->name}}</h2>
                    </div>
                    <div class="section-armco__fs25">
                        <h1>{{$post->name}}</h1>
                    </div>
                    <div class="time">
                        <p>{{$post->created_at->format('j F Y') }}</p>
                    </div>
                    <div class="the-ministry">
                        <p class="section-armco__header__column">{{ $post->description }} </p>
                    </div>
                    <div class="news-content">
                        {!!$post->content!!}
                    </div>
                    <div class="author">
                        <div class="by">
                            <p>{{$post->author->name}}</p>
                        </div>
                        <div class="fb-share-button btn-share share" data-href="{{$post->url}}">
                            <span>{{_('Share')}}</span>
                        </div>
                    </div>
                    <div class="related">
                        <div class="title-related">
                            <h4>{{_('Related Post')}}</h4>
                        </div>
                        <div class="ul">
                            @foreach (get_related_posts($post->id,5) as $post_releted)
                            <a href="{{$post_releted->url}}" title="{{$post_releted->name}}">
                                <li>{{$post_releted->name}}</li>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                    <div class="top-news section-armco__header__titleSmall">
                        <h2>{{_('Top News')}}</h2>
                    </div>
                    <div class="row wrap-news">
                        @foreach ($featured as $featureItem)
                        <div class="col-lg-6 col-md-4 col-sm-4  img">
                            <a href="{{$featureItem->url}}" title="{{$featureItem->name}}">
                                <img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="{{$featureItem->name}}">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8  description">
                            <a class="section-armco__header__column" href="{{$featureItem->url}}" title="{{$featureItem->name}}">{{$featureItem->name}}</a>
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
        @includeIf("theme.armcobarriers::views.modules.form-signup")
    </div>
</section>
