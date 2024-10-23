<article>

    <div class="space-y-6 overflow-hidden rounded-lg bg-white dark:bg-secondary-dark p-6 shadow-sm relative">
        @if ($product->discount)
            <div
                class="absolute top-0 bg-primary dark:bg-primary-dark left-4 mt-4 h-[30px] px-2 rounded-md text-white text-center flex items-center justify-center">
                <span class="text-sm">-{{ $product->discount }}%</span>
            </div>
        @endif
        <a href="{{ route('products.show', ['products' => $product->id]) }}" class="overflow-hidden rounded">
            <img class="mx-auto h-44 w-44 dark:hidden object-cover" src="{{ $product->image }}"
                alt="{{ $product->name }} image" />
            <img class="mx-auto hidden h-44 w-44 dark:block" src="{{ $product->image }}"
                alt="{{ $product->name }} image" />
        </a>
        <div>
            <a href="{{ route('products.show', ['products' => $product->id]) }}"
                class="text-lg font-semibold leading-tight text-black dark:text-white hover:underline">{{ $product->name }}</a>
            <p class="mt-2 text-base font-normal text-gray-500 dark:text-gray-400">{{ $product->getExcerpt(50) }}</p>
        </div>
        <div>
            <p class="text-lg font-bold text-gray-900">
                <span class="line-through"> ${{ $product->price }} </span>
            </p>
            <p class="text-lg font-bold leading-tight text-red-600">${{ $product->price }}</p>
        </div>
        <div class="mt-6 flex items-center gap-2.5">
            <form action="{{ route('product.favorite.store') }}" method="post">
                @csrf
                <input type="hidden" name="productId" value="{{ $product->id }}">
                <button data-tooltip-target="favourites-tooltip-1" type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">
                    @if ($product->isFavorited)
                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="true"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z"></path>
                        </svg>
                    @else
                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z"></path>
                        </svg>
                    @endif
                </button>
            </form>
            <div id="favourites-tooltip-1" role="tooltip"
                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300">
                Add to favourites
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <add-to-cart-button :product="{{ $product }}" />
        </div>
    </div>

</article>
