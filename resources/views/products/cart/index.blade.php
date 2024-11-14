@extends('layouts.default')

@section('title')
    Page d'accueil
@endsection

@section('content')
    <main class="container mx-auto lg:px-0 px-4">

        <section class="bg-white py-8 antialiased md:pb-16">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                @if (session('success'))
                    <div class="bg-green-600 p-4 rounded-md text-white text-center mb-4">
                        <p class="py-4">{{ session('success') }}</p>
                        <clear-cart-button/>
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-600 p-4 rounded-md text-white text-center mb-4">
                        <p>{{ session('error') }}</p>
                    </div>
                @endif

                <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Panier</h2>
                <form action="{{ route('checkout') }}" method="post">
                    @csrf
                    <cart />
                </form>
            </div>
        </section>
    </main>
@endsection
