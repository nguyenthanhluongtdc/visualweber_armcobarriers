@includeIf("theme.armcobarriers::views.modules.breadcrumb")
<div class="section-slider-tab">
    <div class="container-customize">
        <div class="owl-thumbs tab-content contaier-fluid-customize" data-slider-id="1">
            @if(has_field($page, 'slider_gallery'))
            @foreach (get_field($page, 'slider_gallery') as $item)
            <button class="owl-thumb-item bt-content active">
                {{get_sub_field($item, 'name_slider') ? get_sub_field($item, 'name_slider'):'' }}
            </button>
            @endforeach
            @endif
        </div>
    </div>

    <div class="gallery-carousel owl-carousel" data-slider-id="1">
        @if(get_field($page, 'slider_gallery'))
        @foreach (get_field($page, 'slider_gallery') as $key=>$item)
       
      
        <div class="slider-item">
            
        
            <div class="owl-slider-left-carousel owl-carousel">
                @foreach (get_sub_field($item, 'image_slider') as $key2=>$item_img)
                  
                   <div class="itemm">
                    <a href="{{ RvMedia::getImageUrl(get_sub_field($item_img, 'image_slider_item')) }}" data-fancybox="imageproducts" data-caption="{{ get_sub_field($item_img, 'name_img_slider_item') }}">
                        <img src="{{ RvMedia::getImageUrl(get_sub_field($item_img, 'image_slider_item')) }}" alt=" {{ get_sub_field($item_img, 'name_img_slider_item') }}">
                    </a>
                        <p class="title_item-slider">
                            {{ get_sub_field($item_img, 'name_img_slider_item') }}
                        </p>
                   </div>
                @endforeach
               
            </div>
            <div class="owl-slider-right">
                {{-- <?php $inde = $key + 1; ?>
                <?php  $right_it = get_field($page, 'slider_gallery')[2];
             
                    $right_item = get_sub_field($right_it, 'image_slider');
                ?>
                @foreach ($right_item as $item_img2)
                <img src="{{ RvMedia::getImageUrl(get_sub_field($item_img2, 'image_slider_item')) }}" alt="">
                @endforeach --}}
              
                    <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'next_image_tab_slider')) }}" alt="">
                    <p class="title_next-slider">
                        {{ get_sub_field($item, 'title_next_tab_slider') }}
                    </p>
               

            </div>
        </div>
        @endforeach
        @endif
        
    </div>
</div>
<section>
    <div class="gallery-wrapper mt-5">
        <div class="container-customize">
            <h2> New <br> & Events </h2>
            <div class="box-media pt-4">
                <div class="content">
                    <div class="row">
                        @if(get_post_is_featured())
                        @foreach (get_post_is_featured() as $post)
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-5">
                                <div class="item">
                                    <a href="{{ $post->url }}">
                                        <img src="{{ RvMedia::getImageUrl($post->image) }}" alt="">
                                        <h3>{{ $post->name }}
                                        </h3>
                                        <p>
                                            {{ $post->description }}
                                        </p>
                                    </a>

                                    <div class="options">
                                        <div class="date">{{ $post->created_at->format('j F Y') }}</div>
                                        <a class="share"> Share </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
            <div class="read-more">
                <a href="{{route('public.posts')}}">
                    <h3>Read more</h3>
                </a>
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
<script>


</script>
