@extends('layouts.default')

@section('title')
    Page d'accueil
@endsection

@section('content')
    <main class="container mx-auto">

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

        <section class="my-6">
            <div class="">
                <div class="flex items-center">
                    <div class="bg-red-500 rounded-sm h-[30px] w-[15px]"></div>
                    <h4 class="text-sm font-medium text-red-500 px-4">Today's</h4>
                </div>
                <div class="mt-4 grid grid-cols-hero-grid gap-4 items-center">
                    <h3 class="text-2xl font-medium">Flash Sales</h3>
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
            <div class="grid grid-cols-4 gap-4 mt-8">

                @for($i =0;$i<4;$i++)
                    <article>

                        <div
                            class="bg-gray-100 flex items-center justify-center h-[280px] rounded-md relative group overflow-hidden">


                            <div
                                class="absolute top-0 bg-red-600 left-4 mt-4 h-[30px] px-2 rounded-md text-white text-center flex items-center justify-center">
                                <span class="text-sm">-40%</span>
                            </div>

                            {{--                        favorite icon --}}
                            <button class="absolute right-4 bg-white p-2 rounded-full top-0 mt-4">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                         class="w-[24px] h-[24px]"
                                         fill="#5f6368">
                                        <path
                                            d="m480-190-22-20q-97-89-160.5-152t-100-110.5Q161-520 146.5-558T132-634q0-71 48.5-119.5T300-802q53 0 99 28.5t81 83.5q35-55 81-83.5t99-28.5q71 0 119.5 48.5T828-634q0 38-14.5 76t-51 85.5Q726-425 663-362T502-210l-22 20Zm0-38q96-87 158-149t98-107.5q36-45.5 50-80.5t14-69q0-60-40-100t-100-40q-48 0-88.5 27.5T494-660h-28q-38-60-78-87t-88-27q-59 0-99.5 40T160-634q0 34 14 69t50 80.5q36 45.5 98 107T480-228Zm0-273Z"/>
                                    </svg>
                                </a>
                            </button>


                            <img src="{{asset("pr1.png")}}" alt="">
                            <button
                                class="absolute bottom-0 bg-slate-900 w-full text-white p-2 hidden group-hover:block cursor-pointer transition-all hover:bg-slate-950">
                                Add to Cart
                            </button>
                        </div>

                        <div class="mt-4">
                            <h3>HAVIT HV-G92 Gamepad</h3>
                            <div class="mt-2">
                                <span class="text-red-600">$120</span>
                                <span class="px-3 text-gray-400 mt-3 line-through">$120</span>
                                <div class="flex  items-center mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-orange-400"><path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-orange-400"><path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-orange-400"><path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-orange-400"><path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-orange-400"><path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143Zm-43 59 45-192-149-129 196-17 77-181 77 181 196 17-149 129 45 192-169-102-169 102Zm169-242Z"/></svg>
                                </div>
                            </div>
                        </div>

                    </article>
                @endfor

            </div>

            <div class="w-full text-center mt-6">
                <button class="bg-red-600 text-white py-2 px-8 rounded-md w-[180px]"><a href="">View All</a></button>
            </div>
        </section>


        <section class="border-t mt-4">
            <div class="mt-8">

                <div class="flex items-center">
                    <div class="bg-red-500 rounded-sm h-[30px] w-[15px]"></div>
                    <h4 class="text-sm font-medium text-red-500 px-4">Categories</h4>
                </div>

                <div class="mt-4 grid grid-cols-hero-grid gap-4 items-center">
                    <h3 class="text-2xl font-medium">Browse By Categories</h3>
                </div>

{{--                categories listing --}}
                <div class="grid grid-cols-6 gap-4 mt-8">
                    @for($i=0;$i<6;$i++)
                        <div class="bg-white border h-[150px] rounded-md flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="60px" viewBox="0 -960 960 960" width="60px" fill="#5f6368"><path d="M296-126q-23 0-38.5-15.5T242-180q0-23 15.5-38.5T296-234q23 0 38.5 15.5T350-180q0 23-15.5 38.5T296-126Zm368 0q-23 0-38.5-15.5T610-180q0-23 15.5-38.5T664-234q23 0 38.5 15.5T718-180q0 23-15.5 38.5T664-126ZM232-746l110 232h261q9 0 16-4.5t12-12.5l103-187q6-11 1-19.5t-17-8.5H232Zm-14-28h500q27 0 40.5 21.5T760-708L654-514q-8 13-20.5 20.5T606-486H324l-50 92q-8 12-.5 26t22.5 14h422v28H296q-32 0-47.5-26.5T248-406l62-110-148-310H92v-28h88l38 80Zm124 260h280-280Z"/></svg>
                        </div>
                    @endfor
                </div>
            </div>
        </section>


    </main>
@endsection
