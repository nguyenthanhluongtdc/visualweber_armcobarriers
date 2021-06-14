<div class="row">
    @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-6">
            <div class="product-item-wrapper">
            <a href="{{$product->url}}">
                <div class="product-item">
                <img class="product-image" src="{{rvMedia::getImageUrl($product->image)}}" alt="">
                <div class="overlay"><i class="far fa-chevron-circle-right"></i></div>
                </div>
                <h4 class="product-name">
                    {{$product->name}}
                </h4>
                <code>
                <?php echo $product->description ?>
                </code>
            </a>
            
            </div>
        </div>
    @endforeach
</div>

@if(isset($num) && $num!=0 && isset($query) && $query!="")
{{ $products->links('vendor.pagination.custom', ['num'=>$num,'query'=>$query]) }}
@elseif(isset($query) && $query!="")
{{ $products->links('vendor.pagination.custom', ['query'=>$query]) }}
@elseif(isset($num) && $num!=0)
{{ $products->links('vendor.pagination.custom', ['num'=>$num]) }}
@else
{{ $products->links('vendor.pagination.custom') }}
@endif
