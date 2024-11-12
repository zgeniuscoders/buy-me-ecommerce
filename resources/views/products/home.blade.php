@extends('layouts.default')

@section("meta-description")
    Découvrez des fabricants, fournisseurs, exportateurs, importateurs, acheteurs, grossistes, produits et opportunités commerciales de notre site de commerce international primé. Importez et exportez sur matrixt-e-commerce.top.
@endsection

@section('title')
    Page d'accueil
@endsection

@section('content')
    <main class="container">

        @include('partials.banner')

        @if ($categories->isNotEmpty())
            {{--        categories --}}
            <section class="border-t mt-4">
                <div class="mt-8">

                    <x-section-title-component title="Categories"/>

                    {{--                categories listing --}}
                    <div class="grid lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4 my-4">
                        @foreach ($categories as $category)
                            <a href="{{ route('products.index') }}?category={{ $category->name }}"
                               class="flex flex-col items-center justify-center">
                                <img src="{{$category->image}}" alt="image de la categorie {{$category->image}}"
                                     class="w-12 h-12 rounded-full object-cover">
                                <span>{{ $category->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        {{-- flash sales --}}
        <section class="my-6">
            <div class="">
                <x-section-title-component title="Aujourd'hui."/>
            </div>

            @include('partials.product-grid')

            <div class="w-full text-center mt-6">
                <x-button-component :link="route('products.index')" title="Voir plus"/>
            </div>
        </section>

        {{--        recommanded Products --}}
{{--        <section class="border-t mt-4 mb-6">--}}
{{--            <div class="mt-8">--}}

{{--                <x-section-title-component title="Ce mois-ci"/>--}}
{{--                <div class=" mt-4 flex items-center justify-between">--}}
{{--                    <h3 class="lg:text-2xl text-xl font-medium dark:text-white">Articles recommandés</h3>--}}
{{--                    <x-button-component link="#" title="Voir plus"/>--}}
{{--                </div>--}}


{{--                @include('partials.product-grid')--}}

{{--            </div>--}}
{{--        </section>--}}


        @if($randomAds)
            {{--        promotion --}}
            <section class="border-t dark:border-outline-dark mt-12">

                <img src="{{$$randomAds->image}}" alt="{{$$randomAds->title}}" class="w-full">

            </section>
        @endif


        {{--        explore Products --}}
        <section class="mt-4 mb-8">
            <div class="mt-8">

                <x-section-title-component title="Nos Produits"/>
                <div class=" mt-4 flex items-center justify-between">
                    <h3 class="lg:text-2xl text-xl font-medium dark:text-white">Explorez Nos Produits</h3>
                    <x-button-component link="#" title="Voir plus"/>
                </div>


                @include('partials.product-grid')


                <div class="w-full text-center mt-6">
                    <x-button-component link="" title="View All Products"/>
                </div>
            </div>
        </section>


    </main>
@endsection
