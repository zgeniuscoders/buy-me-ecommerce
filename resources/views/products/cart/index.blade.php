@extends('layouts.default')

@section('title')
    Page d'accueil
@endsection

@section('content')
    <main class="container mx-auto lg:px-0 px-4">

        <section class="bg-white py-8 antialiased md:py-16">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Shopping Cart</h2>

{{--                <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">--}}

{{--                    <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">--}}

{{--                        @include("products.cart.components.cart-items")--}}

{{--                        --}}{{--                        suggest products--}}
{{--                        @include("products.cart.components.suggest-product")--}}
{{--                    </div>--}}

{{--                    --}}{{--                    orders details--}}
{{--                    @include("products.cart.components.order-details")--}}
{{--                </div>--}}
                <cart/>
            </div>
        </section>
    </main>
@endsection

