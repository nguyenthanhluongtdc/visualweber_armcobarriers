
@includeIf("theme.armcobarriers::views.components.breadcrumb")
<!--title-->
<div class="pages-news-media">
    <div class="container-customize">
        {!!
            Menu::renderMenuLocation('category-page-news-media', [
                'options' => [],
                'theme' => true,
                'view' => 'category-latest-new',
            ])
        !!}

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
