@extends('layouts.app')

@section('content')

<div class="container-lg text-center">
        <h1>Friends of Presta</h1>
        <p>Cette page présente le collectif Friends of Presta, ses missions, objectifs et publics.</p>
        <h2>Qui sommes-nous ?</h2>
        <p>Nous sommes des intégrateurs et dévelopeurs Prestashop, travaillant ensemble sur des actions, modules open source et autres ressources.</p>
        <p>Est-ce que cette organisation est ouvertes aux débutants et e-commerçants ?</p>
        <p>Il est préférable de vous referer au forum Officiel Prestashop si vous êtes marchand ou à la documentation Prestashop si vous débutez.</p>
        <h2>Que faisons-nous ?</h2>
        <p>
            Nous voulons un espace d'entraide pour partager des ressources et astuces.
            
            Tout ce qui est proposé est gratuit et open source. Vous pouvez nous contacter via notre <a rel="nofollow" href="http://friends-of-presta.slack.com">communauté Slack</a>.
            Voici <a rel="nofollow" href="https://join.slack.com/t/friends-of-presta/shared_invite/enQtNzQ5ODMyODY2MDgxLTA2MmE0MjQ5NTA3NjdmZWE5NzAyZDI2N2YzZTY1OGQwZDZhYmQyOTU0NGZhYmFmYmJkMGQxNzU2NzUzZjM2ZmM">le lien d'inscription</a>
        </p>

        <h2>Notre action e-Commerce Solidaire</h2>
        <p>
        La communauté Friends-of-Presta se mobilise dans le cadre du mouvement #EcommerceSolidaire pour offrir aux petites entreprises impactées par le confinement lié au COVID-19 un site de vente en ligne de proximité, gratuitement. Rendez-vous sur <a href="{{ route('pages.ecommercesolidaire.index') }}">https://friendsofpresta.org/ecommerce-solidaire</a> pour tout savoir sur notre action d'ecommerce solidaire</p>
        </h2>
    </div>

    <div class="container-lg text-center mt-2">
        <p>English version</p>
        <h1>Friends of Presta</h1>
        <p>This page presents Friends of Presta community, its missions, intents and publics.</p>
        <h2>People</h2>
        <p>We are PrestaShop integrators and developers, working together actions, modules and additional resources.</p>
        <p>Is this organization and its differents channels open for merchants and complete beginners?</p>
        <p>No, please refers to the official forum of PrestaShop if you're a
            merchant or to the official User or Developers documentations if you
            need to learn PrestaShop basics.</p>
        <h2>What we do</h2>
        <p>
            We want a space to share resources, tips and help each other.
            Everything provided here is free and open source. You can contact us on our <a rel="nofollow" href="http://friends-of-presta.slack.com">Slack community</a>.
            Here is the <a rel="nofollow" href="https://join.slack.com/t/friends-of-presta/shared_invite/enQtNzQ5ODMyODY2MDgxLTA2MmE0MjQ5NTA3NjdmZWE5NzAyZDI2N2YzZTY1OGQwZDZhYmQyOTU0NGZhYmFmYmJkMGQxNzU2NzUzZjM2ZmM">subscription link</a>
        </p>
    </div>
@endsection
