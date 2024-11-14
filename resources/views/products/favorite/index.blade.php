@extends('layouts.default')

@section('title')
    Mes favoris
@endsection

@section('content')
    <main class="container mx-auto lg:px-0 px-4">

        {{--        flash sales --}}
        <section class="my-6">

            <x-section-title-component title="Favoris" />

            @foreach ($products as $product)
                <form class="space-y-2" method="POST"
                    action="{{ route('product.favorite.destroy', ['favorite' => $product->id]) }}">
                    @csrf
                    @method("DELETE")
                    <input type="hidden" value="{{ $product->id }}" name="productId">

                    <div
                        class="rounded-lg border border-gray-200 dark:border-outline-dark bg-white dark:bg-secondary-dark p-4 shadow-sm md:p-6">
                        <div class="space-y-4 md:flex md:items-center  md:gap-6 md:space-y-0">

                            <a href="{{ $product->image }}" class="shrink-0 md:order-1">
                                <img class="h-20 w-20 dark:hidden" src="{{ $product->image }}"
                                    alt="{{ $product->name }} image" />
                                <img class="$n h-20 ->-20 dark:block" src="{{ $product->image }}"
                                    alt="{{ $product->name }}" />
                            </a>

                            <div class="w-full min-w-0 flex-1 space-y-4 md:order-2  flex items-center justify-between">

                                <div class="">
                                    <a href="{{ route('Products.show', ['Products' => $product->id]) }}"
                                        class="text-base font-medium text-gray-900 dark:text-white hover:underline">{{ $product->name }}</a>
                                    <p href="{{ route('Products.show', ['Products' => $product->id]) }}"
                                        class="text-sm font-medium text-gray-900 dark:text-white">
                                        {{ $product->getExcerpt() }}
                                    </p>
                                </div>



                                <button type="submit"
                                    class="inline-flex items-center text-sm font-medium text-error hover:underline">
                                    <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                    </svg>
                                    Supprimer de la liste de favoris
                                </button>

                            </div>
                        </div>
                    </div>

                </form>
            @endforeach


        </section>


    </main>
@endsection
