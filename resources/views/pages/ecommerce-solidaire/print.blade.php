<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <title>Affiche du site {{ $url }}</title>

    <!-- Styles -->
    <link href="{{ mix('assets/css/pages/ecommerce-solidaire/app.css') }}" rel="stylesheet">

    <!-- Matomo -->
    <x-matamo/>
</head>

<body class="p-1">
    <a class="btn btn-secondary w-100 my-2 d-print-none" href="javascript:window.print()">Imprimer</a>
    <h1>Commandez<br> nos produits en ligne</h1>
    <h2 class="text-secondary">{{ htmlentities(trim(str_replace('https://','', $url),'/')) }}</h2>

    <div class="text-center">
        <img class="d-block mx-auto" width="547" height="547" src="https://chart.googleapis.com/chart?chs=547x547&cht=qr&chl={{ urlencode($url) }}&choe=UTF-8"/>
    </div>

    <p class="text-center">
        Site ecommerce proposé gratuitement par l'initiative e-Commerce Solidaire par Friends-of-Presta
        <a class="text-secondary" href="{{ route('pages.ecommercesolidaire.index') }}">
            https://friendsofpresta.org/ecommerce-solidaire
        </a>
    </p>
    <div class="d-flex align-items-center justify-content-center">
        <img class="img-fluid mr-2" src="{{ asset('assets/images/pages/ecommerce-solidaire/logo.svg') }}" width="200" alt="Logo" />
        <div>
            <h1 class="h2 text-secondary font-weight-bold ml-n2 mb-0">e-Commerce Solidaire</h1>
            <img class="ml-lg-1 ml-n2 ml-sm-1 my-1" src="{{ asset('assets/images/pages/ecommerce-solidaire/logo/fop.svg') }}" height="30" alt="Friends-of-Presta" />
        </div>
    </div>
</body>