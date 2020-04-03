@extends('pages/ecommerce-solidaire/layout')

@section('title', "Liste site - e-Commerce Solidaire par la communauté Friends-of-Presta")

@section('content')
    <section class="container-lg mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('pages.ecommercesolidaire.index') }}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Annuaire site</li>
            </ol>
        </nav>

        <h3 class="text-secondary h-underline-secondary mt-2 mb-2">Annuaire <span class="text-dark">site solidaire</span></h3>
        <div class="row">
        @foreach ($inscriptionlist as $inscription)
            <div class="col-6 mt-2">
                <a target="_blank" href="https://{{ $inscription->slug }}.ecommerce-solidaire.fr" class="d-flex flex-column bg-light p-1 text-decoration-none">
                    <span class="h5 text-uppercase">{{ $inscription->societe }}</span>
                    <span class="text-secondary font-italic">{{ $inscription->slug }}.ecommerce-solidaire.fr</span>
                    <span>{{ $inscription->cp }} <span class="text-uppercase">{{ $inscription->ville }}</span></span>
                </a>
            </div>
            @endforeach
        </div>
    </section>
@endsection