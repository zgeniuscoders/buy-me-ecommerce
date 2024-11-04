<div class="bg-primary text-white w-full text-center py-2 text-sm">
    <span class="capitalize w-full">Achetez aujourd'hui et faites-vous livrer aujourd'hui ! <span><a
                href="{{ route('products.index') }}">Achetez-maitenant</a></span> </span>
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

                <a class="action-btn" href="{{ route('account.favorite.index') }}">
                    <ion-icon name="person-outline"></ion-icon>
                </a>

                <button class="mx-2">
                    <a href="{{ route('account.favorite.index') }}">
                        <ion-icon name="heart-outline"></ion-icon>
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
