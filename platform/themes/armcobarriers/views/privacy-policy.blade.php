<section>
    <div class="container-fluid-customize">
        <div class="" style="padding-top: 4%;">
        <div class="container-customize">
          <div class="title-contact">
            <h1>{{ $page->name }}</h1>
          </div>
        </div>
        <div>
      </div>
</section>
<section>
    <div class="container-customize">
        @includeIf("theme.armcobarriers::views.modules.breadcrumb")
        <div class="content-policy">
          {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, clean($page->content), $page) !!}
        </div>
    </div>
</section>
