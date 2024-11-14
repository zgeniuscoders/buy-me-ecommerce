@extends('layouts.default')

@section('title')
    Panier
@endsection

@section("header")
    @inertiaHead
@endsection

@section('content')

    {{--                @if (session('success'))--}}
    {{--                    <div class="bg-green-600 p-4 rounded-md text-white text-center mb-4">--}}
    {{--                        <p class="py-4">{{ session('success') }}</p>--}}
    {{--                        <clear-cart-button/>--}}
    {{--                    </div>--}}
    {{--                @endif--}}

    {{--                @if (session('error'))--}}
    {{--                    <div class="bg-red-600 p-4 rounded-md text-white text-center mb-4">--}}
    {{--                        <p>{{ session('error') }}</p>--}}
    {{--                    </div>--}}
    {{--                @endif--}}

    {{--                <form action="{{ route('checkout') }}" method="post">--}}
    {{--                    @csrf--}}
    {{--                    <cart/>--}}
    {{--                </form>--}}

    @inertia

@endsection
