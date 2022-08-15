<x-app-layout>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- List group-->
                @if ($products->count())
                    <!-- list group item-->
                    @foreach ($products as $product)

                        <x-product-list-card :product="$product">
                        </x-product-list-card>

                     @endforeach

                @else

                    <div class="alert alert-info" role="alert">
                        There are no products
                    </div>

                @endif
                <ul class="list-group shadow">
                </ul> <!-- End -->
            </div>
        </div>
    </div>
</x-app-layout>