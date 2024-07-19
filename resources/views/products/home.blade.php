@extends('layouts.default')

@section('title')
    Page d'accueil
@endsection

@section('content')
    <main class="container mx-auto lg:px-0 px-4">

        {{--        hero --}}
        <section class="grid lg:grid-cols-hero-grid gap-4">
            <div class="hidden lg:block border-r">
                <ul class="mt-4">
                    <li class="py-2 text-sm"><a href="">Category</a></li>
                    <li class="py-2 text-sm"><a href="">Category</a></li>
                    <li class="py-2 text-sm"><a href="">Category</a></li>
                    <li class="py-2 text-sm"><a href="">Category</a></li>
                </ul>
            </div>
            <div class="mt-4">
                <img src="{{ asset('Frame 560.png') }}" alt="">
            </div>
        </section>

        {{--        flash sales--}}
        <section class="my-6">
            <div class="">
                <x-section-title-component title="Today's"/>
                <div class="mt-4 grid lg:grid-cols-hero-grid gap-4 items-center">
                    <h3 class="lg:text-2xl text-xl font-medium">Flash Sales</h3>
                    <div class="flex items-center gap-6">
                        <div class="flex flex-col">
                            <span class="text-sm">Days</span>
                            <span class="text-2xl font-bold">03</span>
                        </div>
                        <span class="text-blue-800">:</span>
                        <div class="flex flex-col">
                            <span class="text-sm">Hours</span>
                            <span class="text-2xl font-bold">03</span>
                        </div>
                        <span class="text-blue-800">:</span>
                        <div class="flex flex-col">
                            <span class="text-sm">Minutes</span>
                            <span class="text-2xl font-bold">03</span>
                        </div>
                        <span class="text-blue-800">:</span>
                        <div class="flex flex-col">
                            <span class="text-sm">Seconds</span>
                            <span class="text-2xl font-bold">03</span>
                        </div>
                    </div>
                </div>
            </div>

            {{--            products listing--}}
            <div class="grid lg:grid-cols-4 gap-4 mt-8">

                @for($i =0;$i<4;$i++)
                    @include("partials.product-item")
                @endfor

            </div>

            <div class="w-full text-center mt-6">
                <x-button-component link="" title="View All"/>
            </div>
        </section>

        {{--        categories--}}
        <section class="border-t mt-4">
            <div class="mt-8">

                <x-section-title-component title="Categories"/>

                {{--                categories listing --}}
                <div class="grid lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4 mt-8">
                    @for($i=0;$i<6;$i++)
                        <div class="bg-white border h-[150px] rounded-md flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="60px" viewBox="0 -960 960 960" width="60px"
                                 fill="#5f6368">
                                <path
                                    d="M296-126q-23 0-38.5-15.5T242-180q0-23 15.5-38.5T296-234q23 0 38.5 15.5T350-180q0 23-15.5 38.5T296-126Zm368 0q-23 0-38.5-15.5T610-180q0-23 15.5-38.5T664-234q23 0 38.5 15.5T718-180q0 23-15.5 38.5T664-126ZM232-746l110 232h261q9 0 16-4.5t12-12.5l103-187q6-11 1-19.5t-17-8.5H232Zm-14-28h500q27 0 40.5 21.5T760-708L654-514q-8 13-20.5 20.5T606-486H324l-50 92q-8 12-.5 26t22.5 14h422v28H296q-32 0-47.5-26.5T248-406l62-110-148-310H92v-28h88l38 80Zm124 260h280-280Z"/>
                            </svg>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
        {{--        best selling--}}
        <section class="border-t mt-4 mb-6">
            <div class="mt-8">

                <x-section-title-component title="This mounth"/>
                <div class=" mt-4 flex items-center justify-between">
                    <h3 class="lg:text-2xl text-xl font-medium">Best Sellings Products</h3>
                    <x-button-component link="#" title="View All"/>
                </div>


                {{--            products listing--}}
                <div class="grid lg:grid-cols-4 gap-4 mt-8">

                    @for($i =0;$i<4;$i++)
                        @include("partials.product-item")
                    @endfor

                </div>
            </div>
        </section>

        {{--        promotion--}}
        <section class="border-t mt-12">

            <img src="{{ asset('Frame 600.png') }}" alt="" class="w-full">

        </section>

        {{--        explore products--}}
        <section class="mt-4 mb-8">
            <div class="mt-8">

                <x-section-title-component title="Our products"/>
                <div class=" mt-4 flex items-center justify-between">
                    <h3 class="lg:text-2xl text-xl font-medium">Explore Our Products</h3>
                    <x-button-component link="#" title="View All"/>
                </div>


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
