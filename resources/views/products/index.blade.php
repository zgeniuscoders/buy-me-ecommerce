@extends('layouts.default')

@section('title')
    Page d'accueil
@endsection

@section('content')
    <main class="container mx-auto lg:px-0 px-4">


        {{--        flash sales--}}
        <section class="my-6">

            <x-section-title-component title="Our products"/>

            @include("partials.product-grid")

        </section>


    </main>
@endsection
