<x-app-layout>
    <div class="container py-5"><div class='container-fluid'>
            <div class="card mx-auto col-12 pt-4">
                <img class='mx-auto img-thumbnail'
                    src="https://via.placeholder.com/400"
                    width="auto" height="auto"/>
                <div class="card-body text-center mx-auto">
                    <h5 class="card-title mb-2">{{ $product->name }}</h5>
                    <p class="font-weight-bold mb-2">₹{{ $product->price }}</p>
                    <button @if (!$product->stock) disabled @endif type="button" class="btn btn-primary mb-2">Add to cart</button>
                    <p class="font-italic text-muted mb-2 small">{{ $product->long_description }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>