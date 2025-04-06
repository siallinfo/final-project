<div class="row grid__responsive">
    @foreach($products as $product)
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
            <div class="grid__wraper">
                <div class="grid__wraper__img">
                    <div class="grid__wraper__img__inner">
                        <a href="{{ route('website.product-detail', ['id' => $product->id]) }}">
                            <img class="primary__image" src="{{ asset($product->image) }}" alt="Primary Image">
                            <img class="secondary__image" src="{{ asset($product->image) }}" alt="Secondary Image">
                        </a>
                    </div>
                </div>
                <div class="grid__wraper__info">
                    <h3 class="grid__wraper__tittle">
                        <a href="{{ route('website.product-detail', ['id' => $product->id]) }}" tabindex="0">
                            {{$product->name}}
                        </a>
                    </h3>
                    <div class="grid__wraper__price">
                        <del>৳ {{ number_format($product->regular_price, 2) }}</del>
                        <span>৳ {{ number_format($product->selling_price, 2) }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
