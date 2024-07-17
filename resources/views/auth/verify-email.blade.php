@extends('layouts.auth')

@section('title')
    Verifier l'adresse e-mail
@endsection

@section('text')
    Verification de l'adresse email
@endsection

@section('main')
    <p class="text-xl text-white mb-4">Nous sommes ravis de vous compter parmi nos utilisateurs et nous accordons une grande
        importance à la sécurité de votre compte. Dans cet esprit, nous avons récemment envoyé un e-mail de vérification à
        votre adresse e-mail.</p>
    <form action="{{ route('verification.send') }}" method="POST">
        @csrf
        <button type="submit"
            class="dark:text-gray-900 text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Renvoyer la vérification</button>
    </form>
@endsection
