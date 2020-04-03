<!doctype html>
<html class="no-js h-100" lang="fr">

<head>
    <meta charset="utf-8">
    <title>Affiche du site {{ $url }}</title>

    <!-- Styles -->
    <link href="{{ mix('assets/css/pages/ecommerce-solidaire/app.css') }}" rel="stylesheet">

    <!-- Matomo -->
    <x-matamo />
</head>

<body>
<div id="affiche">
    <section class="container">
        <div class="mx-auto pt-5 col-8 d-flex flex-column justify-content-lg-around">
            <h1 class="pl-4">Commandez<br> nos produits en ligne</h1>
            <h2 class="pl-4 text-secondary">{{ htmlentities(trim(str_replace('https://','', $url),'/')) }}</h2>
            <div class="text-center"><img
                        src="https://chart.googleapis.com/chart?chs=547x547&cht=qr&chl={{ urlencode($url) }}&choe=UTF-8" />
            </div>
            <div class="col px-5 text-center">
                <p class="px-5">Site ecommerce proposé gratuitement par l'initiative e-Commerce Solidaire par
                    Friends-of-Presta <a class="text-secondary" href="https://friendsofpresta.org/ecommerce-solidaire/
">https://friendsofpresta.org/ecommerce-solidaire/</a>
                </p>
                <img src="{{ asset('assets/images/pages/ecommerce-solidaire/friendsofv2.2.svg') }}" class="col-6">
            </div>
        </div>
    </section>
</div>
</body>