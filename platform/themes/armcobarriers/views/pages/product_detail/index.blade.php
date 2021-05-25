<div id="product_detail">
    <div class="container-customize">
        <div class="row">
            <section>
                <div class="container-customize">
                    <div class="product_breadcrumb">
                        <p><a href="#">Homepage</a></p>
                        <p><a href="#">Products</a></p>
                    </div>
            </section>
            <div class="top_title col-md-12">
                <p>Product Range</p>
                <a href="">
                    <i class="fas fa-chevron-left"></i>
                    <span>Guardrail - Railgard curvature details</span>
                </a>
            </div>
            @includeIf("theme.armcobarriers::views.pages.product_detail.sections.product_info")
            @includeIf("theme.armcobarriers::views.pages.product_detail.sections.more_info")
            @includeIf("theme.armcobarriers::views.pages.product_detail.sections.other_products")

        </div>
    </div>
</div>