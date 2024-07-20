{{--            products listing--}}
<div class="grid lg:grid-cols-4 gap-4 mt-8">

    @foreach($products as $product)
        @include("partials.product-item",$product)
    @endforeach

</div>
