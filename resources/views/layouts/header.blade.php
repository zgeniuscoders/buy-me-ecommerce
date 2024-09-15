<div class="bg-black text-white w-full text-center py-2 text-sm">
    <span class="capitalize">Summer sold for all swim Suits and free express delivery</span> - OFF 50% <span
        class="font-medium"><a href="">shop now</a></span>
</div>
<div class="border-b bg-white text-slate-900 ">
    <header class="flex items-center justify-between container mx-auto py-4">
        <h3 class="text-3xl font-medium"><a href="">Buy<span class="text-orange-500">Me</span></a></h3>
        <nav>
            <ul class="flex items-center justify-center">
                <x-nav-link :href="route('home')" name="Home" :isActive="request()->routeIs('home')" />
                <x-nav-link :href="route('products.index')" name="Products" :isActive="request()->routeIs('products.index')" />
                <x-nav-link :href="route('store.index')" name="Stores" :isActive="request()->routeIs('store.index')" />

                @guest
                    <x-nav-link href="{{ route('login') }}" name="Sign Up" :isActive="false" />
                @endguest
            </ul>
        </nav>

        <div class="flex items-center">
            <form action="" method="get" class="mr-4">
                <div class="bg-gray-100 rounded-md flex items-center py-2 px-4">
                    <input type="search" name="q" class="outline-none border-none bg-transparent w-[250px]"
                        placeholder="Search">
                    <button type="submit">
                        <svg fill="#000000" version="1.1" id="Capa_1" class="h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 488.4 488.4" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6
                                s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2
                                S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7
                                S381.9,104.65,381.9,203.25z" />
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </form>

            <button class="mx-2">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-[24px] h-[24px]"
                        fill="#5f6368">
                        <path
                            d="m480-190-22-20q-97-89-160.5-152t-100-110.5Q161-520 146.5-558T132-634q0-71 48.5-119.5T300-802q53 0 99 28.5t81 83.5q35-55 81-83.5t99-28.5q71 0 119.5 48.5T828-634q0 38-14.5 76t-51 85.5Q726-425 663-362T502-210l-22 20Zm0-38q96-87 158-149t98-107.5q36-45.5 50-80.5t14-69q0-60-40-100t-100-40q-48 0-88.5 27.5T494-660h-28q-38-60-78-87t-88-27q-59 0-99.5 40T160-634q0 34 14 69t50 80.5q36 45.5 98 107T480-228Zm0-273Z" />
                    </svg>
                </a>
            </button>

            <button class="mx-2 relative">
                <a href="{{ route('cart.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="h-[24px] w-[24px]"
                        fill="#5f6368">
                        <path
                            d="M296-126q-23 0-38.5-15.5T242-180q0-23 15.5-38.5T296-234q23 0 38.5 15.5T350-180q0 23-15.5 38.5T296-126Zm368 0q-23 0-38.5-15.5T610-180q0-23 15.5-38.5T664-234q23 0 38.5 15.5T718-180q0 23-15.5 38.5T664-126ZM232-746l110 232h261q9 0 16-4.5t12-12.5l103-187q6-11 1-19.5t-17-8.5H232Zm-14-28h500q27 0 40.5 21.5T760-708L654-514q-8 13-20.5 20.5T606-486H324l-50 92q-8 12-.5 26t22.5 14h422v28H296q-32 0-47.5-26.5T248-406l62-110-148-310H92v-28h88l38 80Zm124 260h280-280Z" />
                    </svg>
                </a>
                <cart-counter />
            </button>
        </div>
    </header>
</div>