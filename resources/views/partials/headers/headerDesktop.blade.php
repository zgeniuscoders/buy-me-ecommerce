{{-- nav bar --}}
<nav class="desktop-navigation-menu">

    <div class="container">

        <ul class="desktop-menu-category-list">

            <x-nav-link :href="route('home')" name="Accueil" :isActive="request()->routeIs('home')" />

            <x-nav-link :href="route('products.index')" name="Articles" :isActive="request()->routeIs('products.index')" />


            <li class="menu-category">
                <a href="#" class="menu-title">Categories</a>

                <div class="dropdown-panel">

                    <ul class="dropdown-panel-list">

                        <li class="menu-title">
                            <a href="#">Electronics</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Desktop</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Laptop</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Camera</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Tablet</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Headphone</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">
                                <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection"
                                    width="250" height="119">
                            </a>
                        </li>

                    </ul>

                    <ul class="dropdown-panel-list">

                        <li class="menu-title">
                            <a href="#">Men's</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Formal</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Casual</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Sports</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Jacket</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Sunglasses</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">
                                <img src="./assets/images/mens-banner.jpg" alt="men's fashion" width="250"
                                    height="119">
                            </a>
                        </li>

                    </ul>

                    <ul class="dropdown-panel-list">

                        <li class="menu-title">
                            <a href="#">Women's</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Formal</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Casual</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Perfume</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Cosmetics</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Bags</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">
                                <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250"
                                    height="119">
                            </a>
                        </li>

                    </ul>

                    <ul class="dropdown-panel-list">

                        <li class="menu-title">
                            <a href="#">Electronics</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Smart Watch</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Smart TV</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Keyboard</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Mouse</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">Microphone</a>
                        </li>

                        <li class="panel-list-item">
                            <a href="#">
                                <img src="./assets/images/electronics-banner-2.jpg" alt="mouse collection"
                                    width="250" height="119">
                            </a>
                        </li>

                    </ul>

                </div>
            </li>

            <li class="menu-category">
                <router-link :to="{ name: 'store.index' }" class="menu-title">Boutiques</router-link>
            </li>

            @auth
                <x-nav-link :href="route('account.index')" name="Mon compte" :isActive="request()->routeIs('store.index')" />
            @endauth

            @guest
                <x-nav-link href="{{ route('login') }}" name="Se connecter" :isActive="false" />
            @endguest

        </ul>

    </div>

</nav>
