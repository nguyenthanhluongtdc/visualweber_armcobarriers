@php
$isConfigurable = $product->variations()->count() > 0 ? true : false;
@endphp
{{-- <!-- <div class="block2">

    <div class="block2-img wrap-pic-w of-hidden pos-relative
        @if ($product->front_sale_price != $product->price) block2-labelsale @endif">
        <img src="{{ RvMedia::getImageUrl($product->image, 'product-thumbnail', false, RvMedia::getDefaultImage()) }}" alt="{{ $product->name }}">

        <div class="block2-overlay trans-0-4">
            <a href="{{ route('public.wishlist.add', $product->slug) }}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            @if (!$isConfigurable)
                <div class="block2-btn-addcart w-size1 trans-0-4">
                    
                    <button data-route="{{ route('public.cart.add-to-cart') }}"
                            data-id="{{ $product->id }}"
                            class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 add-cart-btn">
                        {{ __('Buy') }}
                    </button>
                </div>
            @else
                <div class="block2-btn-addcart w-size1 trans-0-4">
                    
                    <a href="{{ $product->url }}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                        {{ __('View') }}
                    </a>
                </div>
            @endif

        </div>
    </div>

    <div class="block2-txt p-t-20">
        <a href="{{ $product->url }}" class="block2-name dis-block s-text3 p-b-5">
            {{ $product->name }}
        </a>

        <span class="block2-price m-text6 p-r-5">
			@if ($product->front_sale_price !== $product->price)
                <span class="block2-oldprice m-text7 p-r-5">
                    {{ format_price($product->price) }}
                </span>
                <span class="block2-newprice m-text8 p-r-5">
                    {{ format_price($product->front_sale_price) }}
                </span>
            @else
                <span class="block2-newprice m-text8 p-r-5">
                    {{ format_price($product->price) }}
                </span>
            @endif
		</span>
    </div>

</div> --> --}}

<a href="{!! $product->url !!}" class="product_item col-6 col-lg-12 mb-lg-4 mb-4" title="{{$product->name}}">
    <img class="img-fluid" src="{{Storage::disk('public')->exists($product->image) ? get_image_url($product->image) : RvMedia::getImageUrl(theme_option('image_placholder'), 'page_product')  }}" alt="{{$product->name}}">
    <h4 class="product_name section-armco__header__column"> {{$product->name}} </h4>
</a>
