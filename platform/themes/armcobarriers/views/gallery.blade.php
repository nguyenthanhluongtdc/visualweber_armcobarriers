<section>
    <div class="container-customize">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Homepage</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
      </nav>
      <div class="title-gallery">
        {{$page->description}}
        </div> 
  </section>
  <section>
      <div class="container-fluid-customize main-scroll">  
        <div class="tabs-scroll">
            <div class="container-customize">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        @foreach(get_field($page,'gallery_tabs') as $key =>$gallery_item)
                        <a class="nav-item nav-link" id="nav-{{ Str::slug(get_sub_field($gallery_item,'tabs_title')) }}-tab" data-toggle="tab" href="#nav-{{ Str::slug(get_sub_field($gallery_item,'tabs_title')) }}" role="tab" aria-controls="{{ Str::slug(get_sub_field($gallery_item,'tabs_title')) }}" aria-selected="false">{{(get_sub_field($gallery_item,'tabs_title')) }}</a>
                        @endforeach
                    </div>
                </nav>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="nav-products" role="tabpanel" aria-labelledby="home-tab">
                <div class="slider-gallery-wrapper">
                    <div class="swiper-container mySwiper-left">
                        
                        <div class="swiper-wrapper">
                            @foreach (get_field($page, 'gallery_tabs') as $item)
                            @foreach (get_sub_field($item, 'slide_product') as $item1)
                          <div class="swiper-slide img-right">
                            <img src="{{get_object_image(get_sub_field($item1, 'picture_product'))}}" alt="">
                            {{-- <img src="{{Theme::asset()->url('images/gallery/slider-right.jpg')}}" alt=""> --}}
                          </div>
                            @endforeach
                            @endforeach
                        </div>
                        
                        <div class="pagination-wrapper">  
                          
                            <div class="slider-pagination-custom">
                                <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                                <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                                    <div class="swiper-pagination">
                                    </div>
                            </div>
                        </div>
                        
                        
                    </div> 
                    <div class="swiper-container mySwiper-right">
                        <div class="swiper-wrapper">
                            @foreach (get_field($page, 'gallery_tabs') as $item_app)
                            @foreach (get_sub_field($item_app, 'silde_applications') as $item_app1)
                          <div class="swiper-slide img-right">
                            <img src="{{get_object_image(get_sub_field( $item_app1, 'picture_applications'))}}" alt="">
                          </div>
                            @endforeach
                            @endforeach
                        </div>
                        <div class="pagination-wrapper">
                            <div class="slider-custom-right">
                                <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                                <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                            </div>
                            <div class="custom-right-bottom">
                                <span>Applications</span>
                                <div class="swiper-pagination"></div>
                                
                            </div>
                           
                           
                        </div>
                        
                    </div> 
                  </div>
            </div>
            <div class="tab-pane fade" id="nav-applications" role="tabpanel" aria-labelledby="profile-tab">Applications</div>
            <div class="tab-pane fade" id="nav-warranty" role="tabpanel" aria-labelledby="contact-tab">Warranty</div>
            <div class="tab-pane fade" id="nav-design" role="tabpanel" aria-labelledby="setting-tab">Design</div>
        </div>
      </div>
  </section>

  <section>
      <div class="gallery-wrapper mt-5">
          <div class="container-customize">
            <h2> New <br> & Events </h2>
            <div class="box-media pt-4">
                <div class="content">
                    <div class="row">
                        @foreach (get_post_is_featured() as $post)
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-5">
                            <div class="item">
                                <a href="/news-detail">
                                    <img src="{{ RvMedia::getImageUrl($post->image) }}" alt="">
                                    <h3>{{ $post->name }}
                                    </h3>
                                    <p>
                                        {{ $post->description }}
                                    </p>
                                </a>

                                <div class="options">
                                    <div class="date">{{$post->created_at->format('j F Y') }}</div>
                                    <a class="share"> Share </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                       
                    </div>
                </div>
                </div>
                <div class="read-more">
                    <a href="/new-all">
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