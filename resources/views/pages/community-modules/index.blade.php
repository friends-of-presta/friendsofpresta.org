<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Modules communautaires par Friends of Presta')</title>

    @stack('head')

    <link rel="icon" href="{{ asset('assets/images/pages/ecommerce-solidaire/favicon.ico') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ mix('assets/js/pages/ecommerce-solidaire/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('assets/css/pages/ecommerce-solidaire/app.css') }}" rel="stylesheet">

    <!-- Matomo -->
    <x-matamo />
</head>
<body>
<!--[if IE]>
<p class="alert alert-warning">
    Vous utilisez un navigateur <strong>obsolète</strong>.
    Merci de <a href="https://browsehappy.com/">mettre à jour</a> votre navigateur.
</p>
<![endif]-->
<div id="app" class=" position-relative">
    <header class="w-100 d-flex align-items-start">
        <div class="container-lg position-relative">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-4 col-sm-6 col-12 mt-lg-n4">
                    @if(Route::currentRouteName() == 'pages.ecommercesolidaire.index')
                        <img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/logo.svg') }}" alt="Logo" />
                    @else
                        <a href="{{ route('pages.ecommercesolidaire.index') }}"><img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/logo.svg') }}" alt="Logo" /></a>
                    @endif
                </div>
                <div class="col-lg-7 col-md-8 col-12 position-relative">
                    <div class="px-2 py-lg-2 mt-md-2">
                        <h1 class="h1 text-secondary font-weight-bold ml-n2 mb-0">Community Modules</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- ICI la boucle pour afficher la liste de modules -->
    </main>


    <footer class="container-lg d-flex py-2 small">
        <div>© friends of Presta - 2020 - Une question ? contactez-nous par email :
            <script>document.write('<' + 'a' + ' ' + 'h' + 'r' + 'e' + 'f' + '=' + "'" + 'm' + 'a' + 'i' + 'l' + 't' + 'o' + '&' + '#' + '5' + '8' + ';' + 'c' + '&' + '#' + '3' + '7' +
                    ';' + '6' + '&' + '#' + '7' + '0' + ';' + 'n' + 't' + '%' + '&' + '#' + '5' + '4' + ';' + '1' + '&' + '#' + '3' + '7' + ';' + '6' + '&' + '#' + '5' +
                    '1' + ';' + 't' + '%' + '4' + '0' + 'e' + '&' + '#' + '9' + '9' + ';' + 'o' + '%' + '&' + '#' + '5' + '4' + ';' + 'D' + '&' + '#' + '1' + '0' + '9' +
                    ';' + '%' + '6' + '5' + 'r' + '%' + '&' + '#' + '5' + '4' + ';' + '3' + '&' + '#' + '3' + '7' + ';' + '6' + '5' + '-' + 's' + 'o' + 'l' + '%' + '6' +
                    '9' + '&' + '#' + '1' + '0' + '0' + ';' + '%' + '&' + '#' + '5' + '4' + ';' + '1' + '&' + '#' + '1' + '0' + '5' + ';' + 'r' + 'e' + '%' + '&' + '#' +
                    '5' + '0' + ';' + 'E' + 'f' + 'r' + "'" + '>' + '&' + '#' + '9' + '9' + ';' + 'o' + 'n' + 't' + 'a' + 'c' + 't' + '&' + '#' + '6' + '4' + ';' + 'e' +
                    'c' + '&' + '#' + '1' + '1' + '1' + ';' + 'm' + 'm' + 'e' + 'r' + 'c' + 'e' + '-' + 's' + 'o' + 'l' + '&' + '#' + '1' + '0' + '5' + ';' + 'd' + 'a' +
                    'i' + 'r' + '&' + '#' + '1' + '0' + '1' + ';' + '&' + '#' + '4' + '6' + ';' + 'f' + 'r' + '<' + '/' + 'a' + '>');</script>
        </div>
        <a href="{{ route('pages.ecommercesolidaire.legals') }}" class="ml-auto">Mentions légales</a>
    </footer>

    <x-facebook-chat />
</div>
</body>
</html>
