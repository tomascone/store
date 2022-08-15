@props(['product'])

<li class="list-group-item" @if (!$product->stock) style="opacity: 0.5" @endif>
    <!-- Custom content-->
    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
        <div class="media-body order-2 order-lg-1">
            <h5 class="mt-0 font-weight-bold mb-2">
                <a href="/product/{{ $product->id }}">{{ $product->name }}</a>
            </h5>
            <p class="font-italic text-muted mb-2 small">{{ $product->short_description }}</p>
            <h6 class="font-weight-bold my-2">₹{{ $product->price }}</h6>
            @if ($product->stock)
                <form method="POST" action="">
                    @csrf

                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <button type="button" class="btn btn-primary">Add to cart</button>
                </form>
            @endif
        </div><img src="https://via.placeholder.com/200" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
    </div> <!-- End -->
</li> <!-- End -->