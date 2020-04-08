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
    <div>
        <img src="{{ asset('assets/images/pages/ecommerce-solidaire/friendsofv2.2.svg') }}" />
    </div>
</body>