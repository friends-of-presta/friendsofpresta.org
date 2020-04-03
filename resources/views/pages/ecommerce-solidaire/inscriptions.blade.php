@extends('pages/ecommerce-solidaire/layout')

@section('title', "Liste site - e-Commerce Solidaire par la communauté Friends-of-Presta")

@section('content')
    <section class="container-lg mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('pages.ecommercesolidaire.index') }}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sites solidaires</li>
            </ol>
        </nav>

        <h3 class="text-secondary h-underline-secondary mb-2">Sites <span class="text-dark">solidaires</span></h3>
        <p>
            Découvrez les boutiques e-commerce créées par notre plateforme en moins de 48h.<br />
            Vous y retrouvez les fonctionnalités essentielles : choix de livraison en point retrait, en boutique ou
            livraison à domicile, choix des délais de livraison, catalogue de produits complet avec photos et
            descriptifs.
        </p>
        <div class="row">
        @foreach ($inscriptionlist as $inscription)
            <div class="col-lg-4 col-sm-6 col-12 mt-2">
                <div class="d-flex p-0-5">
                    <a target="_blank" href="{{ route('pages.ecommercesolidaire.print') }}?url=https://{{ $inscription->slug }}.ecommerce-solidaire.fr">
                        <img height="50" src="{{ asset('assets/images/pages/ecommerce-solidaire/icons/scan.svg') }}" alt="" />
                    </a>
                    <div class="d-flex flex-column ml-0-5">
                        <a target="_blank" href="https://{{ $inscription->slug }}.ecommerce-solidaire.fr">
                            <span class="font-italic">{{ $inscription->slug }}.ecommerce-solidaire.fr</span>
                        </a>
                        <span class="text-secondary">{{ $inscription->cp }} <span class="text-uppercase">{{ $inscription->ville }}</span></span>
                    </div>

                </div>
            </div>
        @endforeach
        </div>
    </section>
@endsection