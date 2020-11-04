@extends('pages/ecommerce-solidaire/layout')

@push('head')
    <meta name="description" content="Plate-forme de crise proposant la création de sites e-commerce pour les petites entreprises.">
    <meta property="og:title" content="e-Commerce Solidaire par Friends-of-Presta"/>
    <meta property="og:image" content="{{ asset('assets/images/pages/ecommerce-solidaire/header.jpg') }}"/>
    <meta property="og:type" content="website"/>
@endpush

@section('content')
    <section class="container-lg mt-4">
        <div class="row flex-row-reverse">
            <div class="col-lg-6 d-lg-block d-none">
                <img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/bg-portable.svg') }}" alt=""/>
            </div>
            <div class="col-lg-6">
                <div class="">
                    <h3 class="text-secondary h-underline-secondary">
                        Les objectifs d'E-commerce <span class="text-dark">Solidaire</span>
                    </h3>
                    <ul class="list-unstyled list-hyphens">
                        <li class="pt-2">
                            <strong>Favoriser la continuité d'activité des petites entreprises dans la durée</strong> pour passer les périodes de confinement et s'adapter aux changements.
                        </li>
                        <li class="pt-2">
                            <strong>favoriser le développement d'un e-commerce de proximité pour les TPE</strong><br/>
                            Avoir une boutique en ligne c'est acquérir un outil qui complète son activité traditionnelle de vente en magasin. Cela correspond aux nouveaux usages de vos clients et facilite les transactions sans contact.
                        </li>
                        <li class="pt-2">
                            <strong> maximiser la sécurité autour des livraisons et retraits en click and collect</strong> en respectant les règles d'hygiène pour <strong>faire barrière au virus.</strong>
                        </li>
                    </ul>
                </div>

                <div class="mt-5">
                    <h3 class="text-secondary h-underline-secondary">Pour qui ?</h3>
                    <ul class="list-unstyled list-hyphens">
                        <li class="pt-2">
                            <strong>Commerçants, artisans, producteurs</strong> et groupements de producteurs, primeurs, cavistes, magasins de bricolage, commerces d'aliments pour animaux …
                        </li>
                        <li class="pt-2">
                        Toute <strong> ou entreprise</strong> de moins de 20 salariés <strong>nécessitant de poursuivre son activité</strong> et qui n'a pas encore de site de vente en ligne et n'est pas encore non plus présente sur une plate-forme de commande en ligne (deliveroo, ...).
                        </li>
                    </ul>
                </div>

                <div class="text-center mt-3">
                    <a href="#form-container" class="btn btn-secondary text-white">Je m'inscris</a>
                </div>
            </div>

        </div>
    </section>

    <section class="container-lg mt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 d-md-block text-center mb-2">
                <img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/bg-groupe.svg') }}" alt=""/>
            </div>
            <div class="col-lg-6">
                <h3 class="text-secondary h-underline-secondary mb-2">
                    E-commerce Solidaire : Comment créer une boutique en ligne ?
                </h3>
                <p>
                    <strong>Commerçants, producteurs et gérants de petites entreprises,</strong>
                    vous qui faîtes face au challenge de repenser votre organisation suite à cette période mouvementée et à ce second confinement, nous vous livrons un <strong>site e-commerce fonctionnel en 24 à 48h*</strong>.</p>

                <p>
                    <strong>Un expert e-commerce vous accompagne</strong> pour la mise en place : logo, présentation de l'activité & catalogue produit. C'est ensuite à vous de jouer ! Vous gérez librement vos commandes et vos produits : prix, descriptifs, photos, ...<br/>
                    Vous pouvez ainsi <strong> à servir votre clientèle ou trouver de nouveaux clients proches de vous</strong>.

                </p>
                <p>
                    Vous proposez vos produits en <strong>livraison ou en click & collect</strong>. Vous sécurisez davantage la santé des personnes autour de vous, la vôtre et celle de vos salariés.

                    Vous pouvez consultez les recommandations gouvernementales :
                </p>
                <ul>
                    <li>
                        <a href="https://www.economie.gouv.fr/coronavirus-precautions-sanitaires-livraison-colis">L'article du gouvernement</a>
                    </li>
                    <li>
                        <a href="https://www.economie.gouv.fr/files/files/Guide_precautions_sanitaires_livraison_colis.pdf">Le guide des précautions sanitaires</a>
                    </li>
                </ul>
                    <p>
                    Commerçants, créateurs, artisans qui ont fermé l’accueil au public peuvent ainsi continuer à servir leur clientèle et proposer leurs produits en livraison ou en retrait.
                    </p>
                    <p>
    Pour vous accompagner au mieux, avoir un site ne suffit pas, il faut aussi que vous soyez visible pour vos clients. C'est pourquoi nous complétons notre offre par davantage de visibilité avec une prestation réseaux sociaux et google my business.

<                   </p>
                    <p>
                    * (délai variable en fonction du nombre de demandes)
                    </p>
                </p>
            </div>
        </div>
    </section>

    <section class="container-lg mt-5 py-md-5">
        <h3 class="text-uppercase font-weight-bold h4 text-center">
            Les avantages d'un e-commerce de proximité <span class="text-secondary">à tarif solidaire</span>
        </h3>
        <div class="row">
            <div class="mt-2 col-md-3 col-6 d-flex align-items-center px-1 flex-fill flex-column">
                <img src="{{ asset('assets/images/pages/ecommerce-solidaire/icon-touches.svg') }}" height="60" alt=""/>
                <span class="mt-1 text-center">Commande et Paiement <span class="d-block text-secondary font-weight-bold text-capitalize">sans contact physique</span></span>
            </div>
            <div class="mt-2 col-md-3 col-6 d-flex align-items-center px-1 flex-fill flex-column">
                <img src="{{ asset('assets/images/pages/ecommerce-solidaire/icon-livraison.svg') }}" height="60" alt=""/>
                <span class="mt-1 text-center">Livraison et click & collect <span class="d-block text-secondary font-weight-bold text-capitalize">sans contact physique</span></span>
            </div>
            <div class="mt-2 col-md-3 col-6 d-flex align-items-center px-1 flex-fill flex-column">
                <img src="{{ asset('assets/images/pages/ecommerce-solidaire/icon-caddie.svg') }}" height="60" alt=""/>
                <span class="mt-1 text-center"><span class="d-block text-secondary font-weight-bold text-capitalize">Continuité</span> de votre activité</span>
            </div>
            <div class="mt-2 col-md-3 col-6 d-flex align-items-center px-1 flex-fill flex-column">
                <img src="{{ asset('assets/images/pages/ecommerce-solidaire/icon-securit.svg') }}" height="60" alt=""/>
                <span class="mt-1 text-center">Respect <span class="d-block">des <span class="text-secondary font-weight-bold text-capitalize">règles sanitaires</span></span></span>
            </div>
        </div>
    </section>

    <section class="container-lg mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-secondary h-underline-secondary mb-2">
                Un site efficace pour soutenir les <span class="text-dark">commerces de proximité dans la durée</span>
                </h3>
            </div>
        </div>
        <div class="row flex-md-row flex-column-reverse">
            <div class="col-lg-6 mb-2">
                <p>
                    Nous proposons un site aux <strong>fonctionnalités essentielles que vous pourrez conserver
                        dans la durée  pour un prix solidaire de 300€ HT (valeur marchande d'environ 1000€) :</strong>
                </p>
                <ul class="">
                    <li>La plate-forme de vente en ligne PrestaShop</li>
                    <li>Une <strong>adresse</strong> du type monentreprise.ecommerce-solidaire.fr</li>
                    <li>Un <strong>design fonctionnel</strong></li>
                    <li><strong>L'accompagnement</strong> initial par l’un de nos experts</li>
                </ul>

                A prévoir en supplément : 
                <ul class="">
                    <li>Un <strong>hébergement web</strong> (cela sert à mettre à disposition le site web sur un serveur pour qu'il soit consultable)</li>
                    <li>Un un nom de domaine dédié (facultatif)</li>
                    <li>Un mode de <strong>paiement en ligne pour recevoir les paiements par carte bleu</strong> (facultatif)</li>
                    <li><strong>L’adhésion à l'association Friends of Presta</strong> pour 50€  La communauté Friends of Presta est l’association qui regroupe des développeurs et intégrateurs autour de la solution e-commerce française PrestaShop. </li>
                </ul>
                <p>
                    <strong>PrestaShop</strong> est la plate-forme open-source de commerce en ligne <strong>leader
                        en Europe</strong> avec plus de 300 000 marchands dans le monde. PrestaShop s'adapte à tout type
                    de produit ou service. Consultez le site <a href="https://www.prestashop.com/" target="_blank">PrestaShop.com</a> pour obtenir plus d'information. Créer
                    votre boutique avec la solution PrestaShop est très rapide et vous permet de vendre vos articles
                    en toute fiabilité.

                </p>
                <p>
                <strong>Une prestation pour augmenter la visibilité de votre boutique en ligne</strong> Comment augmenter la visibilité de votre site et trouver de nouveaux clients ? Nous vous accompagnons pour prendre en main votre présence sur les réseaux sociaux et en créant avec vous une fiche google my business.

                    <div class="text-center">
                        <a href="{{ route('pages.ecommercesolidaire.inscriptions') }}" class="btn btn-secondary text-white mt-2">Voir toutes les boutiques en ligne</a>
                    </div>
                </p>
            </div>
            <div class="col-lg-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://player.vimeo.com/video/403631892?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="container-lg mt-5">
        <div class="row flex-md-row flex-column-reverse align-items-center">
            <div class="col-md-6 mt-md-0 mt-2">
                <a href="https://lestareesduvrac.fr/" target="_blank"><img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/screen-les-tarees-du-vrac.jpg') }}" alt=""/></a>
            </div>
            <div class="col-md-6">
                <h3 class="text-secondary h-underline-secondary mb-2">Un exemple ? <span class="text-dark">Les Tarées du Vrac à Toulouse</span></h3>
                <p>
                    Marlène et Mélanie ont ouvert leur commerce en plein confinement mi-mars et vendent des produits alimentaires et accessoires en mode zéro déchet. Elles proposent le retrait sans contact ou la livraison à vélo.<br/>
                    Comble de malchance, elles n’ont pas reçu leur caisse du magasin et ne peuvent pas accepter les cartes bancaires : le site vient à la rescousse avec le paiement en ligne.

                </p>
                <p><strong>Mélanie explique :</strong> <q class="font-italic">En plus d'avoir découvert notre nouveau métier dans des circonstances un peu particulières nous avons pu apprécier la solidarité des autres commerçants de la rue et des autres professionnels comme Jean-François Viguier qui nous a proposé de réaliser ce site de e-commerce, pièce maîtresse de notre futur succès !</q>
                </p>

                <div class="text-center mt-3">
                    <a href="https://lestareesduvrac.fr/" target="_blank" class="btn btn-secondary text-white">Voir le site exemple</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container-lg mt-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3 class="text-secondary h-underline-secondary mb-2">
                    Comment lancer mon e-commerce <span class="text-dark">facilement ?</span>
                </h3>
                <p>
                    Accédez aux avantages d'un <strong>e-commerce de proximité</strong> en 24h à 48h* dès réception de l'ensemble des pièces demandées.
                </p>
                <p>
                    La création de votre site web est <strong>simple et rapide</strong>.<br>C'est une
                    <strong>e-boutique standard avec les fonctionnalités essentielles</strong> pour être mise en
                    œuvre rapidement et efficacement.
                </p>
                <ol class="pl-1">
                    <li>Vous remplissez le <strong>formulaire</strong> sur le site.</li>
                    <li>
                        Un <strong>expert volontaire</strong> Friends-of-Presta vous contacte et vous
                        <strong>accompagne</strong> pour la mise en place du site.
                    </li>
                    <li>
                        Vous fournissez un <strong>fichier tableur type excel</strong> comprenant votre catalogue
                        produit (nom, description, prix, …)
                    </li>
                    <li>L’expert met en place le site.</li>
                    <li>Vous le gérez librement.</li>
                </ol>
                <p>Vous pouvez conserver le site autant de temps que vous le voulez, il est à vous.<br/>
                    Aucune autre prestation ni assistance ne sera fournie par l’expert mais vous pourrez le solliciter pour un devis, sans aucune obligation ni exclusivité.</p>

            </div>
            <div class="col-lg-6 d-none d-lg-flex">
                <a href="https://www.mylittlebigtruck.fr/" target="_blank"><img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/boutique-food.jpg') }}" alt=""/></a>
            </div>
        </div>
    </section>

    <section class="container-lg mt-5">
        <div class="text-center">
            <h3 class="text-uppercase text-secondary font-weight-bold">Les sites solidaires déjà en ligne</h3>
            <div class="text-dark h5">Ils l'ont fait, pourquoi pas vous ?</div>
            <a href="#form-container" class="btn btn-secondary text-white mt-2">Je m'inscris</a>
        </div>

        <div class="row">
            <div class="col-md-4 col-12 mt-2">
                <div class="d-flex flex-column">
                    <h4 class="h5">La boulangerie Vrignaud près de Toulouse</h4>
                    <p class="font-italic">La boulangerie - pâtisserie a déjà mis une
                        soixantaine de produits en ligne et s'est vite réorganisée :
                        madame en boutique et monsieur en livraison.
                        Merci à notre expert Xavier BERNARD
                        qui les a accompagnés.</p>
                    <a href="https://tartines-et-gourmandises.ecommerce-solidaire.fr/" target="_blank">
                        <img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/boutique-boulangerie.jpg') }}" alt="Boulangerie Vrignaud" />
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-12 mt-2">
                <div class="d-flex flex-column">
                    <h4 class="h5">L'épicerie japonaise Autour du yuzu à Mâcon</h4>
                    <p class="font-italic">L'épicerie fine japonaise Autour du Yuzu de Mâcon
                        propose 200 références en ligne.
                        Merci à Christophe VIDAL, expert basé à Lyon qui a
                        pu livrer le site dans des délais records.</p>
                    <a href="https://blz68.ecommerce-solidaire.fr/" target="_blank">
                        <img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/boutique-blz68.jpg') }}" alt="Boutique Autour du yuzu" />
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-12 mt-2">
                <div class="d-flex flex-column">
                    <h4 class="h5">Le chocolatier Jeff de Bruges à Thionville</h4>
                    <p class="font-italic">Le magasin Jeff de Bruges à Thionville
                        peut poursuivre ses ventes de lapins,
                        cloches et œufs de Pâques.
                        Merci à Julien Mutzenhardt qui a mis en place
                        leur boutique en ligne.</p>
                    <a href="https://jeff-de-bruges.ecommerce-solidaire.fr/" target="_blank">
                        <img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/boutique-jdb.jpg') }}" alt="Boutique Jeff de Bruges à Thionville" />
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('pages.ecommercesolidaire.inscriptions') }}" class="btn btn-secondary text-white mt-2">Voir toutes les boutiques en ligne</a>
        </div>
    </section>

    <section class="container-lg mt-5">
        <div class="text-center">
            <h3 class="text-uppercase text-secondary font-weight-bold">Les extensions régionales s’engagent aux côtés de Friends-of-Presta</h3>
            <p>Les extensions régionales bretonne <strong>.bzh</strong>, parisienne <strong>.paris</strong>, corse <strong>.corsica</strong> et alsacienne <strong>.alsace</strong> rejoignent l’initiative lancée par le collectif Friends of Presta. Acteurs engagés du numérique, elles relaient ainsi auprès des TPE de leur territoire notre offre solidaire qui permet aux professionnels de l’alimentaire et aux fournisseurs de produits essentiels de proposer une vente à distance à leurs clients confinés et d’organiser au mieux leurs livraisons ou retraits.
            </p><p>Votre adresse de boutique en ligne prendra alors la forme suivante : monentreprise.ecommerce-solidaire.bzh, monentreprise.ecommerce-solidaire.alsace, monentreprise.ecommerce-solidaire.corsica ou monentreprise.ecommerce-solidaire.paris</p>
        </div>

        <div class="d-flex flex-md-row flex-column mt-2">
            <div class="col text-center">
                <a href="https://www.pik.bzh" target="_blank"><img height="50" src="{{ asset('assets/images/pages/ecommerce-solidaire/ext/bzh.png') }}" alt=".bzh"/></a>
                <p class="mt-1 font-italic">La région Bretagne se rassemble autour du .bzh pour valoriser les produits locaux et soutenir les TPE bretonnes.</p>
            </div>
            <div class="col text-center">
                <a href="https://www.mondomaine.alsace/" target="_blank"><img height="50" src="{{ asset('assets/images/pages/ecommerce-solidaire/ext/alsace.png') }}" alt=".alsace"/></a>
                <p class="mt-1 font-italic">La Région Grand Est, registre du .alsace, offre un domaine à chaque bénéficiaire pendant cette opération.</p>
            </div>
            <div class="col text-center">
                <a href="http://bienvenue.paris" target="_blank"><img height="50" src="{{ asset('assets/images/pages/ecommerce-solidaire/ext/paris.png') }}" alt=".paris"/></a>
                <p class="mt-1 font-italic">Vous avez monté votre affaire à Paris et vous en êtes fier ? Confortez votre ancrage parisien avec une adresse web dans la même veine.</p></div>
            <div class="col text-center">
                <a href="https://www.puntu.corsica/" target="_blank"><img height="50" src="{{ asset('assets/images/pages/ecommerce-solidaire/ext/corsica.png') }}" alt=".corsica"/></a>
                <p class="mt-1 font-italic">Le seul point de l’île visible du monde entier. le .corsica c'est affirmer son attachement au territoire Corse, à ses valeurs, à sa culture, à son patrimoine.</p></div>
        </div>
    </section>

    <section class="container-lg mt-5">
        <h3 class="text-center text-secondary h-underline-secondary">On répond à <span class="text-dark">vos questions</span>
        </h3>

        <div class="px-lg-4 px-sm-2">
            <h4 class="h5 mt-4">Quelles sont les conditions ?</h4>
            <div class="ml-sm-5">
                <p>Nous souhaitons aider en priorité les TPE françaises touchées par le confinement :</p>
                <ul class="list-unstyled list-hyphens">
                    <li>Société avec SIREN de 0 à 20 salariés</li>
                    <li>Siège social en France</li>
                    <li>Impactée par le confinement</li>
                    <li>Un catalogue produit compatible avec la vente en ligne ou en retrait</li>
                </ul>
            </div>

            <h4 class="h5 mt-4">Comment ouvrir ma boutique en ligne ?</h4>
            <div class="ml-sm-5">
                <ol class="pl-1">
                    <li>Vous remplissez le formulaire sur le site</li>
                    <li>
                        Un expert volontaire Friends-of-Presta vous est attribué et vous échangez pour la mise en place
                    </li>
                    <li>
                        Vous fournissez un fichier tableur type excel comprenant votre catalogue produit
                        (nom, description, prix, …)
                    </li>
                    <li>L’expert met en place le site et vous le gérez librement</li>
                </ol>
                <p>
                    Aucune autre prestation ni assistance ne sera fournie par l’expert mais vous pourrez le
                    solliciter pour un devis, sans aucune obligation ni exclusivité.
                </p>
            </div>

            <h4 class="h5 mt-4">Pour combien de temps ?</h4>
            <div class="ml-sm-5">
                <p>
                    <strong>Vous êtes propriétaire de votre site</strong> et pouvez l'utiliser autant que que vous le voulez.
                    L’hébergement est un abonnement mensuel et peut être arrêté quand vous le souhaitez.
                </p>
            </div>

            <h4 class="h5 mt-4">Comment lancer mon e-commerce sur Google ?</h4>
            <div class="ml-sm-5">
                <p>
                    Notre partenaire La Mandrette, expert en référencement naturel ou SEO, (pour rendre votre site plus visible dans les moteurs de recherche) vous offre un guide des bonnes pratiques
                    pour faire connaitre votre site dans Google et Maps.
                    Vous pouvez également utilisez les réseaux sociaux.
                </p>
            </div>

            <h4 class="h5 mt-4">Pourquoi passer du tout gratuit à une offre à prix solidaire ?</h4>
            <div class="ml-sm-5">
                <p>
                Certains sites ont très peu servi, voire pas du tout. Cela a mobilisé du temps et de l'énergie pour peu de résultat.
                </p>
                <p>
                Nous avons besoin que l'aidé s'implique vraiment dans sa boutique en ligne. Nous le voyons comme un outil dans la durée et pas seulement pour un mois ou deux. Il nous apparaît donc cohérent de demander une participation pour couvrir une petite partie des frais engagés.

                </p>
            </div>
        </div>
    </section>

    <section class="container-lg mt-5">
        <h3 class="text-secondary h-underline-secondary mb-2">Qui sommes-nous ?</h3>

        <div class="row px-lg-4 px-sm-2">
            <div class="col-xl-3">
                <p>
                    Friends-of-Presta est un collectif d’experts Prestashop de différents métiers (dev, intégration,
                    design, seo, commerçants).
                </p>
            </div>
            <div class="col-xl-9">
                <div id="teams" class="row">
                    @foreach ($volonteerlist as $volonteer)
                    @if($volonteer->url)
                    <a href="{{ $volonteer->url }}" class="col-md-6">
                        <span>{{ $volonteer->name }}</span>
                        <span class="text-secondary">{{ $volonteer->company }}</span>
                        <span>{{ $volonteer->city }} ({{ $volonteer->department }})</span>
                    </a>
                    @else
                    <span class="col-md-6">
                        <span>{{ $volonteer->name }}</span>
                        <span class="text-secondary">{{ $volonteer->company }}</span>
                        <span>{{ $volonteer->city }} ({{ $volonteer->department }})</span>
                    </span>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="container-lg mt-5">
        <h3 class="text-secondary h-underline-secondary">Nos partenaires</h3>

        <div id="sponsors" class="pt-2 pl-sm-3 pr-sm-3">
            <div class="row">
                @foreach ($sponsorlist as $sponsor)
                    <div class="col-md-4">
                        <a href="{{ $sponsor->url }}" class="h-100 d-block rounded p-1">
                            <span class="d-flex align-items-center">
                                <span class="h5 pr-1 mr-1 border-right">{{ $sponsor->theme }}</span>
                                <span class="text-center">
                                    <img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/logo/' . $sponsor->logo) }}" alt="{{ $sponsor->name }}">
                                </span>
                            </span>
                            <span class="text-muted w-100 pt-0-5 d-block">{{ $sponsor->description }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="form-container" class="position-relative mt-5 py-4">
        <div class="container-lg">
            <h3 class="text-secondary h-underline-secondary mb-2">
                Je m'inscris
            </h3>
            
            <div class="px-lg-4 px-sm-2">
                <div class="row">
                    <div class="col-12">
                        <form class="needs-validation" method="post" action="{{ route('pages.ecommercesolidaire.mail') }}" id="contact-form" novalidate>
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nom" class="col-form-label">Nom *</label>
                                    <input type="text" autocomplete="off" class="form-control" id="nom"
                                           name="nom" required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="prenom" class="col-form-label">Prénom *</label>
                                    <input type="text" autocomplete="off" class="form-control" id="prenom"
                                           name="prenom" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telephone" class="col-form-label">Téléphone *</label>
                                <input type="tel"
                                       pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
                                       autocomplete="off" class="form-control" id="telephone" name="telephone" required/>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">E-mail *</label>
                                <input type="email" autocomplete="off" class="form-control" id="email" name="email"
                                       required/>
                            </div>
                            <div class="form-row align-items-end">
                                <div class="form-group col-md-2">
                                    <label for="statut">Statut *</label>
                                    <select class="form-control" name="statut" id="statut"
                                            required>
                                        <option value="">-</option>
                                        <option value="SARL">SARL</option>
                                        <option value="SASU">SASU</option>
                                        <option value="SAS">SAS</option>
                                        <option value="EURL">EURL</option>
                                        <option value="SA">SA</option>
                                        <option value="Micro">Micro/AE</option>
                                        <option value="EI">EI</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="societe" class="col-form-label">Raison sociale *</label>
                                    <input type="text" autocomplete="off" class="form-control" id="societe" name="societe"
                                           required/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="siren" class="col-form-label">Siren *</label>
                                    <input type="text" autocomplete="off" placeholder="Ex : 451789356"
                                           class="form-control" id="siren" name="siren"
                                           pattern="[0-9]{3}[ \.\-]?[0-9]{3}[ \.\-]?[0-9]{3}" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="salaries">Nombre de salariés *</label>
                                <select class="form-control" name="salaries" id="salaries" required>
                                    <option value="">-</option>
                                    <option value="0-20">0 à 20</option>
                                    <option value="21-50">21 à 50</option>
                                    <option value="50-">+ de 50</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="adresse" class="col-form-label">Adresse *</label>
                                <input type="text" autocomplete="off" class="form-control" id="adresse" name="adresse"
                                       required/>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="cp" class="col-form-label">Code postal *</label>
                                    <input type="text" autocomplete="off" class="form-control" id="cp"
                                           name="cp" required/>
                                </div>
                                <div class="form-group col-md-9">
                                    <label for="ville" class="col-form-label">Ville *</label>
                                    <input type="text" autocomplete="off" class="form-control" id="ville" name="ville"
                                           required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="commentaires" class="col-form-label">Parlez-nous de vous *</label>
                                <textarea class="form-control" rows="6" id="commentaires" name="commentaires"
                                          required></textarea>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="gpdr" value="0"/>
                                <input class="form-check-input" type="checkbox" name="gpdr" value="1" id="gpdr"
                                       required/>
                                <label class="form-check-label" for="gpdr">
                                    En soumettant ce formulaire, j’accepte que les informations saisies soient
                                    exploitées dans le cadre de la création du site et de la relation commerciale qui
                                    peut en découler.
                                </label>
                            </div>
                            <div class="text-center">
                                <button id="submit" type="submit" class="btn btn-secondary text-white mt-3">
                                    Je m'inscris
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-lg my-5">
        <div class="row">
            <div class="col-md-6 col-12">
                <h3 class="h-underline-secondary mb-2">Le mot des volontaires Friends-of-Presta</h3>
                <p>Il est important pour la communauté Friends-of-Presta d'apporter sa contribution à la
                    situation de <strong>crise sanitaire et économique</strong> due au coronavirus en
                    France.<br />Nous sommes sensibles à la précarité économique des commerçants et Très Petites
                    Entreprises. <br />
                    Notre action s'inscrit dans <strong>un contexte de crise</strong>
                    pour limiter les pertes de produits alimentaires, faciliter le commerce de tout produit
                    utile et <strong>limiter l'impact économique</strong> au plus près de chacun d'entre nous.
                    L’objectif est de pouvoir traverser les difficultés avec un outil numérique pérène.
                </p>
                <a href="https://www.facebook.com/ecommercesolidaire" target="_blank" class="d-block text-center mt-2">
                <img class="" src="{{ asset('assets/images/pages/ecommerce-solidaire/icons/fbpage.jpg') }}" alt="Rejoignez-nous sur facebook"/>
                </a>
            </div>
            <div class="col-md-6 col-12">
                <h3 class="h-underline-secondary mb-2">Retour d'expérience</h3>
                <p>Nous avons aidé l'entreprise les Tarées du vrac, épicerie vrac et zéro déchet de Toulouse.
                    Voici en vidéo son retour d'expérience sur la création de ce site e-commerce et comment elle a pu sauver son activité avec beaucoup d'agilité, de volonté et notre coup de pouce. 

                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ukwYi82E6Aw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </p>
            </div>
        </div>
    </section>
@endsection