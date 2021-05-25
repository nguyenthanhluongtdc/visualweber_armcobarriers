<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<div id="product_info" class="col-md-12">
    <div class="row">
        <div class="col-md-1 px-0 bg-danger">
            slide
        </div>
        <div class="col-md-5 px-0">
            <img class="img-fluid" src="{{ Theme::asset()->url('images/product/product_detail.png') }}" alt="">
        </div>
        <div class="col-md-6">
            <p class="product_name">Knuffi Magnetic Flexible Edge Protector </p>
            <p class="product_introduce">
                SafetyRail 2000 is a non-penetrating, passive fall
                protection system for workplace safety that can be used from
                rooftop to ground level applications. Because they’re anchored
                by weighted baseplates rather than fastened down with bolts, these
                ballasted guard rails can be used as portable, permanent, or temporary
                roof edge protection solutions. Non-penetrating designs preserve the integrity
                of the roof system and make these solutions easy to install.
            </p>
            <ul class="list_info">
                <li>
                    <p>Model</p>
                    <p>MO849</p>
                </li>
                <li>
                    <p>Brand</p>
                    <p>Armco</p>
                </li>
                <li>
                    <p>Price</p>
                    <p>1100$</p>
                </li>
                <li>
                    <p>Tags</p>
                    <p>WireCrafters, Safety Rail</p>
                </li>
            </ul>
            <form action="">
                <div class="input_field">
                    <button class="minus">-</button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button class="plus">+</button>
                </div>
                <button class="add_to_cart">Add to cart</button>
            </form>
        </div>
    </div>
</div>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Initialize Swiper -->
<script>
    $(document).ready(function() {
        $('button.minus').click(function(e) {
            e.preventDefault();
            document.querySelector('input[type="number"]').stepDown()
        })
        $('button.plus').click(function(e) {
            e.preventDefault();
            document.querySelector('input[type="number"]').stepUp()

        })
    })
</script>