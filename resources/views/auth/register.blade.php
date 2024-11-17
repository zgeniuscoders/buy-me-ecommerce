@extends('layouts.auth')

@section('title')
    Inscription
@endsection

@section('content')
    <div
        class="bg-background dark:bg-background-dark w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

        <div class="w-full h-100">


            <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Créer un compte.</h1>

            <form class="mt-6" action="{{ route('register') }}" method="POST">

                @csrf
                <x-input-component name="email" placeholder="exemple@domain.com" title="Adresse email" type="email"
                    value="{{ old('email') }}" />
                <x-input-component name="name" placeholder="john doe" title="Nom d'utilisateur" type="name"
                    value="{{ old('password') }}" />
                <x-input-component name="password" placeholder="Enter Your password" title="Mot de passe" type="password"
                    value="{{ old('password') }}" />
                <x-input-component name="password_confirmation" type="password" placeholder="Confirmer le mot de passe"
                    title="Confirmer le mot de passe" value="{{ old('password_confirmation') }}" />


                <button type="submit"
                    class="w-full block bg-primary focus:bg-gray-400 text-white font-semibold rounded-lg px-4 py-3 mt-6">Créer mon compte
                </button>
            </form>

            <hr class="my-6 border-gray-300 w-full">

            <p class="mt-8">Vous avez un compte ? <a href="{{ route('login') }}"
                    class="text-primary hover:text-primaryContainer font-semibold">Connectez-vous</a></p>


        </div>
    </div>
@endsection

@section('footer')
    <div class="text-gray-500 flex text-center flex-col mt-4 items-center text-sm">
        <p class="cursor-default">
            En vous connectant, vous acceptez nos
            <a class="group text-primary transition-all duration-100 ease-in-out" href="#">
                <span
                    class="cursor-pointer bg-left-bottom bg-gradient-to-r from-emerald-400 to-emerald-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
                    conditions
                </span>
            </a>
            and
            <a class="group text-primary transition-all duration-100 ease-in-out" href="#">
                <span
                    class="cursor-pointer bg-left-bottom bg-gradient-to-r from-emerald-400 to-emerald-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
                    Politique de confidentialité
                </span>
            </a>
        </p>
    </div>
@endsection
