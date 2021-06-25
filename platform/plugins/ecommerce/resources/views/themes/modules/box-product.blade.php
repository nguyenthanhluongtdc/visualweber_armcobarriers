<div class="row">
    @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-6">
            <div class="product-item-wrapper">
            <a href="{{$product->url}}" title="{{$product->name}}">
                <div class="product-item">
                    <img class="product-image" src="{{rvMedia::getImageUrl($product->image)}}" alt="{{$product->name}}">
                    <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                </div>
                <h4 class="product-name">
                    <span> {{$product->name}} </span>
                </h4>
                <?php echo $product->description ?>
            </a>
            
            </div>
        </div>
    @endforeach
</div>

@if(isset($num) && $num!=0 && isset($query) && $query!="")
{{ $products->links('vendor.pagination.custom-product', ['num'=>$num,'query'=>$query]) }}
@elseif(isset($query) && $query!="")
{{ $products->links('vendor.pagination.custom-product', ['query'=>$query]) }}
@elseif(isset($num) && $num!=0)
{{ $products->links('vendor.pagination.custom-product', ['num'=>$num]) }}
@else
{{ $products->links('vendor.pagination.custom-product') }}
@endif
