@extends('layouts.default')

@section('title')
    Page d'accueil
@endsection

@section('content')
    <main class="container mx-auto lg:px-0 px-4">


        {{--        flash sales--}}
        <section class="my-6">

            <x-section-title-component title="Our products"/>

            {{--            products listing--}}
            <div class="grid lg:grid-cols-4 gap-4 mt-8">

                @foreach($products as $product)
                    @include("partials.product-item",$product)
                @endforeach

            </div>

        </section>


    </main>
@endsection
