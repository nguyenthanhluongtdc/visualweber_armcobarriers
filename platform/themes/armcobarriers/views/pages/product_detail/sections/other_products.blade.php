

<div id="other_products" class="col-12 col-sm-12 col-md-12">
    <p class="title">Other products</p>
    <!-- <div class="list_products row">
        <a href="" class="product_item">
            <div class="box-img">
                <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-8.png')}}" alt="">
                <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
            </div>
            <p class="product_name">W Beam Guardrail</p>
            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p> 
            
        </a>
        <a href="" class="product_item">
            <div class="box-img">
                <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-6.png')}}" alt="">
                <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
            </div>
            <p class="product_name">W Beam Guardrail</p>
            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p>
            
        </a>
        <a href="" class="product_item">
            <div class="box-img">
                <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-5.png')}}" alt="">
                <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
            </div>
            <p class="product_name">W Beam Guardrail</p>
            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p>
        </a>
        <a href="" class="product_item">
            <div class="box-img">
                <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-7.png')}}" alt="">
                <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
            </div>
            <p class="product_name">W Beam Guardrail</p>
            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p>

        </a>
        <a href="" class="product_item">
            <div class="box-img">
                <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-8.png')}}" alt="">
                <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
            </div>
            <p class="product_name">W Beam Guardrail</p>
            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p>

        </a>
    </div> -->

    <div class="swiper-container otherSwiper">
        <div class="swiper-wrapper list_products">
            <div class="swiper-slide product_item">
                <div class="box-img">
                    <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-8.png')}}" alt="">
                    <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                </div>
                <p class="product_name">W Beam Guardrail</p>
                <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p> 
            </div>

            <div class="swiper-slide product_item">
                <div class="box-img">
                    <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-6.png')}}" alt="">
                    <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                </div>
                <p class="product_name">W Beam Guardrail</p>
                <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p> 
            </div>

            <div class="swiper-slide product_item">
                <div class="box-img">
                    <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-7.png')}}" alt="">
                    <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                </div>
                <p class="product_name">W Beam Guardrail</p>
                <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p> 
            </div>

            <div class="swiper-slide product_item">
                <div class="box-img">
                    <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-5.png')}}" alt="">
                    <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                </div>
                <p class="product_name">W Beam Guardrail</p>
                <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p> 
            </div>

            <div class="swiper-slide product_item">
                <div class="box-img">
                    <img class="img-fluid" src="{{Theme::asset()->url('images/product/product-7.png')}}" alt="">
                    <p class="overlay"><i class="far fa-chevron-circle-right"></i></p>
                </div>
                <p class="product_name">W Beam Guardrail</p>
                <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, facilis!...</p> 
            </div>
        </div>
    </div>
</div>


<script>
      var otherSwiper = new Swiper(".otherSwiper", {
        slidesPerView: 1.5,
        spaceBetween: 10,
        breakpoints: {
          "320": {
            slidesPerView: 1.5,
            spaceBetween: 10,
          },
          "480": {
            slidesPerView: 2.5,
            spaceBetween: 10,
          },
          "640": {
            slidesPerView: 3.5,
            spaceBetween: 10,
          },
          "992": {
            slidesPerView: 5.5,
            spaceBetween: 10,
          },
        }
      });
    </script>