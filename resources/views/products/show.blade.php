@extends('layouts.default')

@section('title')
    Page d'accueil
@endsection

@section('content')
    <main class="container mx-auto lg:px-0 px-4">
        <section class="grid grid-cols-product-details gap-4 mt-8">
            <div>
                @foreach($product->images as $image)
                <div class="rounded-md overflow-hidden mb-2">
                    <img src="/storage/{{$product->image}}" alt="" class="h-[100px] w-full object-cover">
                </div>
                @endforeach
            </div>
            <div class="rounded-md overflow-hidden">
                <img src="/storage/{{$product->image}}" alt="" class="h-[500px] w-full object-cover">
            </div>
            <div>
                <h1 class="text-xl font-bold">{{ $product->name }}</h1>

{{--                starts--}}
                <div class="my-1">
                    <div class="flex  items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                             class="fill-primary-400">
                            <path
                                d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                             class="fill-primary-400">
                            <path
                                d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                             class="fill-primary-400">
                            <path
                                d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                             class="fill-primary-400">
                            <path
                                d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                             class="fill-primary-400">
                            <path
                                d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z"/>
                        </svg>
                    </div>
                </div>

                <h2 class="text-md font-medium">${{$product->price}}</h2>
                <p class="mt-4">{{$product->description}}</p>
                <hr class="bloc border-t mt-4">
                <div class="w-full">

                    {{--                    colours--}}
                    <div class="flex items-center my-2">
                        <h4>Colours : </h4>
                        <div class="flex items-center gap-2 px-2">
                            <span class="block h-4 w-4 bg-red-500 rounded-full border"></span>
                            <span class="block h-4 w-4 bg-red-500 rounded-full border"></span>
                        </div>
                    </div>

                    {{--                    size--}}
                    <div class="flex items-center my-2">
                        <h4 class="">Size : </h4>
                        <div class="flex items-center gap-2 px-4">
                            <div class="h-4 w-4 flex items-center justify-center border p-4 rounded-md">
                                <span>M</span>
                            </div>
                            <div
                                class="h-4 w-4 flex items-center justify-center border p-4 rounded-md bg-red-500 text-white">
                                <span>S</span>
                            </div>
                            <div class="h-4 w-4 flex items-center justify-center border p-4 rounded-md">
                                <span>XL</span>
                            </div>
                        </div>
                    </div>


                    <div class="items-center gap-2 w-full grid grid-cols-2">
                        <div class="border flex items-center rounded-md">
                            <input type="number" class="outline-none border-none bg-transparent text-center w-[40px] p-2"
                                   placeholder="2">
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button" class="bg-red-500 text-white p-2 rounded-md w-full">Buy Now</button>
                            <button class="bg-white p-2 rounded-md border">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                         class="w-[24px] h-[24px]"
                                         fill="#5f6368">
                                        <path
                                            d="m480-190-22-20q-97-89-160.5-152t-100-110.5Q161-520 146.5-558T132-634q0-71 48.5-119.5T300-802q53 0 99 28.5t81 83.5q35-55 81-83.5t99-28.5q71 0 119.5 48.5T828-634q0 38-14.5 76t-51 85.5Q726-425 663-362T502-210l-22 20Zm0-38q96-87 158-149t98-107.5q36-45.5 50-80.5t14-69q0-60-40-100t-100-40q-48 0-88.5 27.5T494-660h-28q-38-60-78-87t-88-27q-59 0-99.5 40T160-634q0 34 14 69t50 80.5q36 45.5 98 107T480-228Zm0-273Z"/>
                                    </svg>
                                </a>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{--        explore products--}}
        <section class="mt-4 my-8">
            <div class="mt-8">

                <x-section-title-component title="Related products"/>

                {{--            products listing--}}
                <div class="grid lg:grid-cols-4 gap-4 mt-8">

                    @for($i =0;$i<8;$i++)
                        @include("partials.product-item")
                    @endfor

                </div>

                <div class="w-full text-center mt-6">
                    <x-button-component link="" title="View All Products"/>
                </div>
            </div>
        </section>
    </main>
@endsection
