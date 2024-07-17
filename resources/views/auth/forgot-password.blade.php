@extends('layouts.auth')

@section('title')
    Mot de passe oublier
@endsection

@section('content')
    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

        <div class="w-full h-100">


            <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Forgot Password</h1>

            <form class="mt-6" action="#" method="POST">
                <x-input-component name="email" placeholder="Enter Your Email" title="Email" type="email"/>

                <button type="submit" class="w-full block bg-blue-800 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg px-4 py-3 mt-6">Log In</button>
            </form>

            <hr class="my-6 border-gray-300 w-full">

            <p class="mt-8">Have an account? <a href="{{route("login")}}" class="text-blue-500 hover:text-blue-700 font-semibold">Sign in</a></p>

        </div>
    </div>
@endsection
