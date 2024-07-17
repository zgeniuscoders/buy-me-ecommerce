<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="bg-black text-white w-full text-center py-2 text-sm">
        <span class="capitalize">Summer sold for all swim Suits and free express delivery</span> - OFF 50% <span class="font-medium"><a href="">shop now</a></span>
    </div>
    <div class="border-b bg-white text-slate-900 ">
        <header class="flex items-center justify-between container mx-auto py-4">
            <h3 class="text-3xl font-medium"><a href="">Buy<span class="text-orange-500">Me</span></a></h3>
            <nav>
                <ul class="flex items-center">
                    <x-nav-link href="" name="Home" :isActive="true" />
                    <x-nav-link href="" name="Contact" :isActive="false" />
                    <x-nav-link href="" name="About" :isActive="false" />
                    <x-nav-link href="" name="Sign Up" :isActive="false" />
                </ul>
            </nav>

            <div class="flex items-center">
                <form action="" method="get" class="px-4" class="bg-gray-200 rounded-md flex items-center">
                    <input type="search" name="q" class="outline-none border-none bg-transparent" placeholder="Search">
                    <button type="submit">search</button>
                </form>

                <button class="px-4">
                    <a href="">favorite</a>
                </button>

                <button class="px-4">
                    <a href="">cart</a>
                </button>
            </div>
        </header>
    </div>
    @yield('content')
</body>

</html>
