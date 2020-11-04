@extends('pages/ecommerce-solidaire/layout')

@section('title', "Mentions légales - e-Commerce Solidaire par la communauté Friends-of-Presta")

@section('content')
    <section class="container-lg mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('pages.ecommercesolidaire.index') }}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mentions légales</li>
            </ol>
        </nav>

        <h3 class="text-secondary h-underline-secondary mb-2">Mentions <span class="text-dark">légales</span></h3>
        <p>Ce site internet est la propriété de communauté Friends-of-Presta</p>
        <p>
            Responsable de publication : Jean-François Viguier<br />
            Raison sociale : Association Friends-of-Presta - Association loi 1901 inscrite le 15 Mai 2020 sous le numéro W313033851<br />
            Siège social : 2 rue Antoine Becquerel, 31140 Launaguet<br />
        </p>
        <h4>RGPD</h4>
        <p>
            Le règlement européen de protection des données personnelles (RGPD) entré en vigueur le 25 mai 2018 étend et facilite l'exercice de vos droits en améliorant la transparence des traitements de vos données personnelles.
            Conformément à l'article 15 alinéa 3 du RGPD, vous disposez d'un droit de consultation de vos données personnelles. Conformément à l'article 16 du RGPD vous disposez d'un droit de rectification. Conformément à l'article 17 du RGPD, vous disposez du droit à l'oubli. Pour procéder à la suppression de vos données personnelles, effectuez votre demande par mail en précisant les informations que vous souhaitez retirer. Conformément à l'article 18 du RGPD, vous disposez du droit de demander la limitation du traitement. Conformément à l'article 20 du RGPD, vous disposez du droit de demander la portabilité de vos données. Contactez-nous via <a href="{{ route('pages.ecommercesolidaire.index') }}">formulaire suivant</a> pour exercer vos droits.
        </p>

        <h4>Droits d'auteur</h4>
        <p> Toute reproduction totale ou partielle du site est interdite conformément aux dispositions de l'article L. 122-4 du Code de la propriété intellectuelle.</p>

        <h4>Cookies</h4>
        <p>En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de Cookies pour réaliser des statistiques de visites. Vous pouvez désactiver l'utilisation de cookies en sélectionnant les paramètres appropriés de votre navigateur.</p>
    </section>
@endsection
