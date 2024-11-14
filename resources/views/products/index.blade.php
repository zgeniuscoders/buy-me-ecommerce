@extends('layouts.default')

@section('title')
    Tout nos articles
@endsection

@section('content')
    <main class="container">


        <section class="my-6">

            <div class="flex items-center justify-between">
                <x-section-title-component title="Our products" />
                <a href="{{ route('filter') }}"
                    class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium  text-white hover:bg-primary focus:outline-none focus:ring-4 focus:ring-primary">
                    <ion-icon name="filter-outline"></ion-icon>
                </a>
            </div>

            @include('partials.product-grid')

            <div class="w-full text-center mt-8">
                {{ $products->links() }}
            </div>

        </section>


    </main>
@endsection
