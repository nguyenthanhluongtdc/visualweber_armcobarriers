
    <div class="widget">
        <h6 class="widget_title">{{ $config['name'] }}</h6>      
        {!!
            Menu::generateMenu(['slug' => $config['menu_id'], 'options' => ['class' => 'widget_links']])
        !!}
         
    </div>

