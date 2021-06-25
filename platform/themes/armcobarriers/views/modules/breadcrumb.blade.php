<section>
    <div class="container-customize">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
            @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                <li class="breadcrumb-item"><a href="{!!$crumb['url']!!}" title="{{$crumb['label']}}">{!! $crumb['label'] !!}</a></li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{!! $crumb['label'] !!}</li>
            @endif
        @endforeach
        </ol>
      </nav> 
</section>