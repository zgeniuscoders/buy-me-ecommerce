@extends('layouts.auth')

@section('title')
    Connexion
@endsection

@section('text')
    Connexion
@endsection

@section('content')
    <div class="bg-background dark:bg-background-dark w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

        <div class="w-full h-100">


            <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>

            <form class="mt-6" action="{{route("login")}}" method="POST">

                 @csrf
                <x-input-component name="email" placeholder="Votre adresse email" title="Email" type="email"/>
                <x-input-component name="password" placeholder="Votre mot de passe" title="Mot de passe" type="password"/>

                <div class="text-right mt-2">
                    <a href="{{ route("password.request") }}" class="text-sm font-semibold text-gray-700 hover:text-primary focus:text-primary">Mot de passe oubliè?</a>
                </div>

                <button type="submit" class="w-full block bg-primary hover:bg-primary-dark focus:bg-outline-dark text-white font-semibold rounded-lg px-4 py-3 mt-6">Se connecter
                </button>
            </form>

            <hr class="my-6 border-gray-300 w-full">

            <p class="mt-8">Vous n'avez pas de compte? <a href="{{ route("register") }}" class="text-primary hover:text-primary-dark font-semibold">Crèe un compte</a></p>

        </div>
    </div>
@endsection

