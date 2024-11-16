<div
    class="bg-gray-50 shadow-md overflow-hidden rounded-lg cursor-pointer hover:-translate-y-2 transition-all relative group">

    <div class="absolute top-3 -right-10 group-hover:right-3 space-y-2 transition-all ease-in-out">
        <div
            class="bg-gray-100 w-10 h-10 flex items-center justify-center rounded-full cursor-pointer ">
            <form action="{{ route('product.favorite.store') }}" method="post">
                @csrf
                <input type="hidden" name="productId" value="{{ $product->id }}">
                <button type="submit">
                    @if ($product->isFavorited)
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-gray-800 inline-block" viewBox="0 0 64 64" fill="true">
                            <path
                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                data-original="#000000"></path>
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                            <path
                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                data-original="#000000"></path>
                        </svg>
                    @endif
                </button>
            </form>
        </div>
        <div
            class="bg-gray-100 w-10 h-10 flex items-center justify-center rounded-full cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                <path
                    d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                    data-original="#000000"></path>
            </svg>
        </div>
        <div
            class="bg-gray-100 w-10 h-10 flex items-center justify-center rounded-full cursor-pointer">
            <a href="{{ route('products.show', ['products' => $product->id]) }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                    <path
                        d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                        data-original="#000000"></path>
                </svg>
            </a>
        </div>
    </div>

    <div class="w-5/6 h-[260px] p-4 overflow-hidden mx-auto aspect-w-16 aspect-h-8">
        <img src="{{$product->image}}" alt="Product 1"
             class="h-full w-full object-contain"/>
    </div>

    <div class="p-6 bg-white">
        <h3 class="text-lg font-bold text-gray-800">{{$product->name}}</h3>
        <h4 class="text-lg text-gray-800 font-bold mt-2">{{$product->price}}$</h4>
        <p class="text-gray-600 text-sm mt-2">5 types of shoos available</p>

        <div class="flex space-x-2 mt-4">
            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z"/>
            </svg>
            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z"/>
            </svg>
            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z"/>
            </svg>
            <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z"/>
            </svg>
            <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z"/>
            </svg>
        </div>
    </div>
</div>

