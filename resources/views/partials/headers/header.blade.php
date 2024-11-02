<div class="bg-primary text-white w-full text-center py-2 text-sm">
    <span class="capitalize">Summer sold for all swim Suits and free express delivery</span> - OFF 50% <span
        class="md:font-medium text-sm md:text-md"><a href="">shop now</a></span>
</div>

<header>

    <div class="header-main">

        <div class="container">

            <a href="#" class="header-logo">
                <img src="" alt="Anon's logo" width="120" height="36">
            </a>

            <form method="get" action="{{ route('search') }}" class="header-search-container">

                <input type="search" name="q" class="search-field" placeholder="Entrer le nom de l'article...">

                <button class="search-btn" type="submit">
                    <ion-icon name="search-outline"></ion-icon>
                </button>

            </form>

            <div class="header-user-actions">

                <a class="action-btn" href="{{ route('account.index') }}">
                    <ion-icon name="person-outline"></ion-icon>
                </a>

                <button class="mx-2">
                    <ion-icon name="heart-outline"></ion-icon>
                    <a href="{{ route('account.favorite.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-[24px] h-[24px]"
                            fill="dark:text-white">
                            <path
                                d="m480-190-22-20q-97-89-160.5-152t-100-110.5Q161-520 146.5-558T132-634q0-71 48.5-119.5T300-802q53 0 99 28.5t81 83.5q35-55 81-83.5t99-28.5q71 0 119.5 48.5T828-634q0 38-14.5 76t-51 85.5Q726-425 663-362T502-210l-22 20Zm0-38q96-87 158-149t98-107.5q36-45.5 50-80.5t14-69q0-60-40-100t-100-40q-48 0-88.5 27.5T494-660h-28q-38-60-78-87t-88-27q-59 0-99.5 40T160-634q0 34 14 69t50 80.5q36 45.5 98 107T480-228Zm0-273Z" />
                        </svg>
                    </a>
                </button>

                <button class="action-btn">
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

        </div>

    </div>

    @include('partials.headers.headerDesktop')
    @include('partials.headers.headerMobile')

</header>

{{-- bottom navbar --}}

<div class="bg-background border-t border-gray-200 w-full fixed bottom-0 z-10 block md:hidden mt-10">
    <nav class="flex">
        <ul class="flex gap-4 items-center justify-around w-full container mx-auto py-2">
            <x-bottom-bar-item :href="route('home')" name="Accueil" :isActive="request()->routeIs('home')" />
            <x-bottom-bar-item :href="route('products.index')" name="Articles" :isActive="request()->routeIs('products.index')" />
            {{-- <x-bottom-bar-item :href="route('store.index')" name="Boutiques" :isActive="request()->routeIs('store.index')" /> --}}
            <x-bottom-bar-item href="" name="Mon Compte" :isActive="false" />
        </ul>
    </nav>
</div>
