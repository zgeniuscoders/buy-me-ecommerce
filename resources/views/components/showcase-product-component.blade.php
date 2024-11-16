<div class="flex gap-4 items-center shadow rounded-md p-4 bg-white">

    <a href="#" class="showcase-img-box">
        <img src="{{$product->image}}"
             alt="relaxed short full sleeve t-shirt" width="70"
             class="showcase-img">
    </a>

    <div class="showcase-content">

        <a href="{{route("products.show", ["products" => $product->id])}}">
            <h4 class="showcase-title">{{$product->name}}</h4>
        </a>

        <a href="#" class="showcase-category">{{$product->category->name}}</a>

        <div class="price-box">
            <p class="price">{{$product->price}}$</p>
            <del>$12.00</del>
        </div>

    </div>

</div>
