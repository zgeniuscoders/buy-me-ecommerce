@extends('layouts.default')

@section('title')
    Page d'accueil
@endsection

@section('content')
    <main class="container mx-auto lg:px-0 px-4">
        <section class="grid md:grid-cols-product-details gap-4 mt-8">
            <div class="order-2 md:order-none">
                @foreach ($product->images as $image)
                    <div class="rounded-md overflow-hidden mb-2">
                        <img src="{{ $product->image }}" alt="" class="h-[100px] w-full object-cover">
                    </div>
                @endforeach
            </div>
            <div class="rounded-md overflow-hidden order-1 md:order-none">
                <img src="{{ $product->image }}" alt="" class="h-[500px] w-full object-cover">
            </div>
            <div class="order-3 md:order-none">
                <h1 class="text-xl font-bold">{{ $product->name }}</h1>

                {{--                starts --}}
                <div class="my-1 hidden">
                    <div class="flex  items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            class="fill-primary-400">
                            <path
                                d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            class="fill-primary-400">
                            <path
                                d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            class="fill-primary-400">
                            <path
                                d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            class="fill-primary-400">
                            <path
                                d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            class="fill-primary-400">
                            <path
                                d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z" />
                        </svg>
                    </div>
                </div>

                <h2 class="text-md font-medium">${{ $product->price }}</h2>
                <p class="mt-4">{{ $product->description }}</p>
                <hr class="bloc border-t mt-4">
                <div class="w-full mt-2">

                    <div class="items-center gap-2 w-full grid grid-cols-2">
                        <div class="flex items-center gap-2">
                            <button type="button" class="bg-red-500 text-white p-2 rounded-md w-full">Buy Now</button>
                            <x-add-favorite-button :product="$product" />
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{--        explore products --}}
        <section class="mt-4 my-8">
            <div class="mt-8">

                <x-section-title-component title="Related products" />

                {{--            products listing --}}
                <div class="grid lg:grid-cols-4 gap-4 mt-8">

                    @foreach ($products as $product)
                        @include('partials.product-item')
                    @endforeach
                 

                </div>

            </div>
        </section>
    </main>
@endsection
