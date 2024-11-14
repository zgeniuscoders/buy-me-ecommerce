{{-- nav bar --}}
<nav class="desktop-navigation-menu">

    <div class="container">

        <ul class="desktop-menu-category-list">

            <x-nav-link :href="route('home')" name="Accueil" :isActive="request()->routeIs('home')"/>

            <x-nav-link :href="route('products.index')" name="Articles"
                        :isActive="request()->routeIs('products.index')"/>

            <x-nav-link :href="route('products.new-arrivals')" name="Nouveaux Arrivages"
                        :isActive="request()->routeIs('products.new-arrivals')"/>

            @auth
                <x-nav-link :href="route('account.index')" name="Mon compte"
                            :isActive="request()->routeIs('store.index')"/>
            @endauth

            @guest
                <x-nav-link href="{{ route('login') }}" name="Se connecter" :isActive="false"/>
            @endguest

        </ul>

    </div>

</nav>
