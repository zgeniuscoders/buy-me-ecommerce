@extends('layouts.default')


@section('title')
    Filtre les articles
@endsection


@section('content')
    <main class="container">

        <section class="px-0">
            <form action="" method="get">
                <div class="container px-4 md:px-6 grid md:grid-cols-[240px_1fr] gap-10 items-start">
                    <div class="flex flex-col gap-4 items-start py-2">

                        <div class="grid gap-2">
                            <h2 class="text-lg font-semibold tracking-wide">Category</h2>
                            <div class="grid gap-2">
                                @foreach ($categories as $category)
                                    <label for="category-shoes" class="flex items-center gap-2 font-normal">
                                        <input type="checkbox" id="{{ $category->id }}" name="categories[]"
                                            value="{{ old('categories') }}" />
                                        {{ $category->name }}
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="grid gap-2 w-full">
                            <h2 class="text-lg font-semibold tracking-wide">Gamme de prix</h2>
                            <div class="w-full">
                                <div class="w-full">
                                    <label for="price-range" class="block text-gray-700 font-bold mb-2">Gamme de
                                        prix</label>
                                    <input type="range" id="price-range" class="w-full" min="0" name="price_range"
                                        max="1000" value="500" oninput="updatePrice(this.value)">
                                </div>
                                <div class="flex justify-between text-gray-500">
                                    <span id="minPrice">$0</span>
                                    <span id="maxPrice">$1000</span>
                                </div>
                            </div>

                        </div>

                        <div class="w-full">
                            <button type="submit"
                                class="bg-primary dark:bg-primary-dark text-white py-2 px-8 rounded-md w-full">
                                Filtrer
                            </button>
                        </div>
                    </div>
                    <div class="grid gap-6 md:gap-8">
                        <div class="grid sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-3 gap-8">
                            @foreach ($products as $product)
                                @include('partials.product-item')
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>

        </section>

        <div class="w-full text-center my-8">
            {{ $products->links() }}
        </div>
    </main>
@endsection


@section('script')
    <script>
        function updatePrice(value) {
            document.getElementById("minPrice").textContent = "$" + value;
        }
    </script>
@endsection
