<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
</head>

<body id="app-client">
<div class="bg-black text-white w-full text-center py-2 text-sm">
    <span class="capitalize">Summer sold for all swim Suits and free express delivery</span> - OFF 50% <span
        class="font-medium"><a href="">shop now</a></span>
</div>
<div class="border-b bg-white text-slate-900 ">
    <header class="flex items-center justify-between container mx-auto py-4">
        <h3 class="text-3xl font-medium"><a href="">Buy<span class="text-orange-500">Me</span></a></h3>
        <nav>
            <ul class="flex items-center">
                <x-nav-link :href="route('home')" name="Home" :isActive="request()->routeIs('home')"/>
                <x-nav-link :href="route('products.index')" name="Product" :isActive="request()->routeIs('products.index')"/>
                <x-nav-link href="" name="About" :isActive="false"/>
                <x-nav-link href="" name="Sign Up" :isActive="false"/>
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
                                    S381.9,104.65,381.9,203.25z"/>
                            </g>
                        </g>
                        </svg>
                    </button>
                </div>
            </form>

            <button class="mx-2">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960" class="w-[24px] h-[24px]"
                         fill="#5f6368">
                        <path
                            d="m480-190-22-20q-97-89-160.5-152t-100-110.5Q161-520 146.5-558T132-634q0-71 48.5-119.5T300-802q53 0 99 28.5t81 83.5q35-55 81-83.5t99-28.5q71 0 119.5 48.5T828-634q0 38-14.5 76t-51 85.5Q726-425 663-362T502-210l-22 20Zm0-38q96-87 158-149t98-107.5q36-45.5 50-80.5t14-69q0-60-40-100t-100-40q-48 0-88.5 27.5T494-660h-28q-38-60-78-87t-88-27q-59 0-99.5 40T160-634q0 34 14 69t50 80.5q36 45.5 98 107T480-228Zm0-273Z"/>
                    </svg>
                </a>
            </button>

            <button class="mx-2 relative">
                <a href="{{route("cart.index")}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"  class="h-[24px] w-[24px]"
                         fill="#5f6368">
                        <path
                            d="M296-126q-23 0-38.5-15.5T242-180q0-23 15.5-38.5T296-234q23 0 38.5 15.5T350-180q0 23-15.5 38.5T296-126Zm368 0q-23 0-38.5-15.5T610-180q0-23 15.5-38.5T664-234q23 0 38.5 15.5T718-180q0 23-15.5 38.5T664-126ZM232-746l110 232h261q9 0 16-4.5t12-12.5l103-187q6-11 1-19.5t-17-8.5H232Zm-14-28h500q27 0 40.5 21.5T760-708L654-514q-8 13-20.5 20.5T606-486H324l-50 92q-8 12-.5 26t22.5 14h422v28H296q-32 0-47.5-26.5T248-406l62-110-148-310H92v-28h88l38 80Zm124 260h280-280Z"/>
                    </svg>
                </a>
                <cart-counter/>
            </button>
        </div>
    </header>
</div>
@yield('content')

<footer aria-labelledby="footer-heading" class="hidden md:block bg-black">
    <h2 id="footer-heading" class="sr-only">Footer</h2>

    <div class="mx-auto max-w-7xl py-12 px-6 lg:py-16 lg:px-8">

        <div class="xl:grid xl:grid-cols-3 xl:gap-8">

            <div class="space-y-8 xl:col-span-1">
                <img class="h-10" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600"
                     alt="Company name">
                <p class="text-base text-gray-500">Making the world a better place through constructing
                    elegant hierarchies.</p>
                <div class="flex space-x-6">

                    <a href="#" class="text-gray-400 hover:text-gray-500 dark:hover:text-emerald-400">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500 dark:hover:text-emerald-400">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500 dark:hover:text-emerald-400">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500 dark:hover:text-emerald-400">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500 dark:hover:text-emerald-400">
                        <span class="sr-only">Dribbble</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>

                </div>
            </div>

            <div class="mt-12 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">

                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-base font-medium text-white">Solutions</h3>
                        <ul role="list" class="mt-4 space-y-4">

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Marketing</a>
                            </li>

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Analytics</a>
                            </li>

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Commerce</a>
                            </li>

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Insights</a>
                            </li>

                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-base font-medium text-white">Support</h3>
                        <ul role="list" class="mt-4 space-y-4">

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Pricing</a>
                            </li>

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Documentation</a>
                            </li>

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Guides</a>
                            </li>

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">API
                                    Status</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-base font-medium text-white">Account</h3>
                        <ul role="list" class="mt-4 space-y-4">

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">My Account</a>
                            </li>

                            <li>
                                <a href="{{route('login')}}"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Login / Register</a>
                            </li>

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Cart</a>
                            </li>

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Shop</a>
                            </li>


                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-base font-medium text-white">Legal</h3>
                        <ul role="list" class="mt-4 space-y-4">

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Claim</a>
                            </li>

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Privacy</a>
                            </li>

                            <li>
                                <a href="#"
                                   class="text-base text-gray-500 hover:text-gray-900 dark:hover:text-emerald-400">Terms</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-12 border-t border-gray-200 pt-8">
            <p class="text-base text-gray-400 xl:text-center">© 2024 BUYME, Inc. All rights reserved.
            </p>
        </div>
    </div>
</footer>
</body>

</html>
