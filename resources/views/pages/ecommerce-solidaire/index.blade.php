@extends('pages/ecommerce-solidaire/layout')

@push('head')
    <meta name="description" content="Plate-forme de crise proposant la création de sites e-commerce gratuits pour votre commerce ou TPE.">
    <meta property="og:title" content="e-Commerce Solidaire par la communauté Friends-of-Presta"/>
    <meta property="og:image" content="{{ asset('assets/images/pages/ecommerce-solidaire/header.jpg') }}"/>
    <meta property="og:type" content="website"/>
@endpush

@section('content')
    <section class="container-lg mt-4">
        <div class="row">
            <div class="col-lg-6 d-md-block mt-n2 order-lg-2 mb-2">
                <img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/bg-portable.svg') }}" alt=""/>
            </div>
            <div class="col-lg-5 offset-1 order-md-1">
                <div class="">
                    <h3 class="text-secondary h-underline-secondary">
                        Les objectifs de <span class="text-dark">l'initiative</span>
                    </h3>
                    <ul class="list-unstyled list-hyphens">
                        <li class="pt-2">
                            Aider les TPE qui, partout en France, <strong>doivent se réorganiser pour vendre sans contact</strong> et lutter contre la propagation du virus.
                        </li>
                        <li class="pt-2">
                            <strong>Favoriser la continuité de l'activité des petites entreprises</strong>
                            et préparer la reprise.
                        </li>
                    </ul>
                </div>

                <div class="mt-5">
                    <h3 class="text-secondary h-underline-secondary">Pour qui ?</h3>
                    <ul class="list-unstyled list-hyphens">
                        <li class="pt-2">
                            <strong>Toute entreprise impactée par le confinement</strong> : nous aidons déjà des boulangeries, éleveurs, chocolatiers, food trucks, épiceries fines, un affineur …
                        </li>
                        <li class="pt-2">
                            L'entreprise est en <strong>société de moins de 20 salariés</strong> et n'a pas encore de site de vente en ligne.
                        </li>
                    </ul>
                </div>

                <div class="text-center mt-3">
                    <a href="#form-container" class="btn btn-secondary text-white">Je m'inscris gratuitement</a>
                </div>
            </div>

        </div>
    </section>

    <section class="container-lg mt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 d-md-block mb-2">
                <img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/bg-groupe.svg') }}" alt=""/>
            </div>
            <div class="col-lg-5 offset-1">
                <h3 class="text-secondary h-underline-secondary mb-2">
                    E-commerce Solidaire : Comment ouvrir ma boutique en ligne ?
                </h3>
                <p>
                    <strong>Commerçants, producteurs et gérants de petites entreprises,</strong>
                    vous qui faîtes face au challenge de repenser votre organisation suite au confinement, nous vous
                    livrons un <strong>site e-commerce fonctionnel en 24 à 48h*</strong>.</p>

                <p>
                    <strong>Un expert e-commerce vous accompagne</strong> pour la mise en place : logo, présentation de l'activité & catalogue produit. C'est ensuite à vous de jouer ! Vous gérez librement vos commandes et vos produits : prix, descriptifs, photos, ...
                </p>
                <p>
                    Vous proposez vos produits en <strong>livraison ou en retrait sans contacts physiques pour
                        limiter la propagation du virus</strong>. Vous sécurisez davantage la santé des personnes autour
                    de vous, la vôtre et celle de vos salariés.
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
                </p>
            </div>
        </div>
    </section>

    <section class="container-lg my-5 py-5">
        <h3 class="text-uppercase font-weight-bold h4 text-center">
            Les avantages d'un e-commerce de proximité full <span class="text-secondary">sans contact</span>
        </h3>
        <div class="row">
            <div class="mt-2 col-md-3 col-6 d-flex align-items-center px-1 flex-fill flex-column">
                <img src="{{ asset('assets/images/pages/ecommerce-solidaire/icon-touches.svg') }}" height="60" alt=""/>
                <span class="mt-1 text-center">Commande et Paiement <span class="d-block text-secondary font-weight-bold text-capitalize">sans contact physique</span></span>
            </div>
            <div class="mt-2 col-md-3 col-6 d-flex align-items-center px-1 flex-fill flex-column">
                <img src="{{ asset('assets/images/pages/ecommerce-solidaire/icon-livraison.svg') }}" height="60" alt=""/>
                <span class="mt-1 text-center">Livraison et retrait <span class="d-block text-secondary font-weight-bold text-capitalize">sans contact physique</span></span>
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
            <div class="col-md-6 offset-sm-1 offset-lg-0">
                <h3 class="text-secondary h-underline-secondary mb-2">
                    Une boutique en ligne simple et efficace pour soutenir les <span class="text-dark">commerces de
                        proximité</span>
                </h3>
            </div>
        </div>
        <div class="row flex-md-row flex-column-reverse">
            <div class="col-lg-5 mt-2 mt-md-0 offset-sm-1 offset-lg-0">
                <p>
                    Nous proposons un site aux <strong>fonctionnalités essentielles que vous pourrez conserver
                        dans la durée :</strong>
                </p>
                <ul class="list-unstyled">
                    <li>La plate-forme de vente en ligne PrestaShop</li>
                    <li>Une <strong>adresse</strong> du type monentreprise.ecommerce-solidaire.fr</li>
                    <li>Un <strong>hébergement</strong> web (cela sert à mettre à disposition le site web sur un serveur pour qu'il soit consultable)
                    </li>
                    <li>Un <strong>design fonctionnel</strong></li>
                    <li>Un mode de <strong>paiement en ligne</strong></li>
                    <li>Un mode de <strong>livraison et retrait sur place</strong></li>
                    <li><strong>L'accompagnement</strong> initial par l’un de nos bénévoles</li>
                </ul>
                <p>
                    <strong>PrestaShop</strong> est la plate-forme open-source de commerce en ligne <strong>leader
                        en Europe</strong> avec plus de 300 000 marchands dans le monde. PrestaShop s'adapte à tout type
                    de produit ou service. Consultez le site PrestaShop.com pour obtenir plus d'information. Créer
                    votre boutique avec la solution PrestaShop est très rapide et vous permet de vendre vos articles
                    en toute fiabilité.
                </p>

                <div class="text-center mt-3">
                    <a href="https://tartines-et-gourmandises.ecommerce-solidaire.fr/" target="_blank" class="btn btn-secondary text-white">Voir le site exemple</a>
                </div>
            </div>
            <div class="col-lg-6 offset-md-1 mb-2 d-none d-lg-flex">
                <a href="https://tartines-et-gourmandises.ecommerce-solidaire.fr/" target="_blank"><img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/boutique-boulangerie.jpg') }}" alt=""/></a>
            </div>
        </div>
    </section>

    <section class="container-lg mt-5">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-sm-1 offset-lg-0">
                <h3 class="text-secondary h-underline-secondary mb-2">
                    Comment lancer mon e-commerce <span class="text-dark">facilement ?</span>*
                </h3>
                <p>
                    Accédez gratuitement aux avantages d'un <strong>e-commerce de proximité</strong> en 24h à 48h dès réception de l'ensemble des pièces demandées.
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
            <div class="col-lg-6 offset-md-1 d-none d-lg-flex">
                <a href="https://little-big-truck.ecommerce-solidaire.fr/" target="_blank"><img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/boutique-food.jpg') }}" alt=""/></a>
            </div>
        </div>
    </section>

    <section class="container-lg mt-5">
        <div class="text-center">
            <h3 class="text-uppercase text-secondary font-weight-bold">Les sites solidaires déjà en ligne</h3>
            <div class="text-dark h5">Ils l'ont fait, pourquoi pas vous ?</div>
            <a href="#form-container" class="btn btn-secondary text-white mt-2">Je m'inscris gratuitement</a>
        </div>

        <div class="d-flex flex-md-row flex-column">
            <div class="col d-flex flex-column mt-2">
                <h4 class="h5">La boulangerie Vrignaud près de Toulouse</h4>
                <p class="font-italic">La boulangerie - pâtisserie a déjà mis une
                    soixantaine de produits en ligne et s'est vite réorganisée :
                    madame en boutique et monsieur en livraison.
                    Merci à notre expert Xavier BERNARD
                    qui les a accompagnés.</p>
                <a class="d-block align-self-end" href="https://tartines-et-gourmandises.ecommerce-solidaire.fr/" target="_blank"><img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/boutique-boulangerie.jpg') }}" alt="Boulangerie Vrignaud" /></a>
            </div>
            <div class="col d-flex flex-column mt-2">
                <h4 class="h5">L'épicerie japonaise Autour du yuzu à Mâcon</h4>
                <p class="font-italic">L'épicerie fine japonaise Autour du Yuzu de Mâcon
                    propose 200 références en ligne.
                    Merci à Christophe VIDAL, expert basé à Lyon qui a
                    pu livrer le site dans des délais records.</p>
                <a class="d-block align-self-end" href="https://blz68.ecommerce-solidaire.fr/" target="_blank"><img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/boutique-blz68.jpg') }}" alt="Boutique Autour du yuzu" /></a>
            </div>
            <div class="col d-flex flex-column mt-2">
                <h4 class="h5">Le chocolatier Jeff de Bruges à Thionville</h4>
                <p class="font-italic">Le magasin Jeff de Bruges à Thionville
                    peut poursuivre ses ventes de lapins,
                    cloches et œufs de Pâques.
                    Merci à Julien Mutzenhardt qui a mis en place
                    leur boutique en ligne.</p>
                <a class="d-block align-self-end" href="https://jeff-de-bruges.ecommerce-solidaire.fr/" target="_blank"><img class="img-fluid" src="{{ asset('assets/images/pages/ecommerce-solidaire/boutique-jdb.jpg') }}" alt="Boutique Jeff de Bruges à Thionville" /></a>
            </div>
        </div>
    </section>

    <section class="container-lg mt-5">
        <div class="text-center">
            <h3 class="text-uppercase text-secondary font-weight-bold">Les extensions régionales s’engagent aux côtés de Friends-of-Presta</h3>
            <p>Les extensions régionales bretonne <strong>.bzh</strong>, alsacienne <strong>.alsace</strong> et parisienne <strong>.paris</strong> rejoignent l’initiative lancée par le collectif Friends of Presta. Acteurs engagés du numérique, elles relaient ainsi auprès des TPE de leur territoire notre offre solidaire qui permet aux professionnels de l’alimentaire et aux fournisseurs de produits essentiels de proposer une vente à distance à leurs clients confinés et d’organiser au mieux leurs livraisons ou retraits.
            </p><p>Votre adresse de boutique en ligne prendra alors la forme suivante : monentreprise.ecommerce-solidaire.bzh, monentreprise.ecommerce-solidaire.alsace ou monentreprise.ecommerce-solidaire.paris</p>
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
                    <li>Société avec SIREN de 0 à 10 salariés</li>
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
                    L’hébergement sera accessible pendant toute la durée du confinement. L’objectif est d’aider les
                    TPE à passer ce cap du confinement mais n’est pas de fournir une concurrence déloyale aux
                    prestataires. L’hébergement sera arrêté deux mois après l’arrêt du confinement : vous pourrez
                    récupérer l’ensemble du site pour l’héberger où vous le souhaitez, il reste à vous.
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

            <h4 class="h5 mt-4">Pourquoi le hashtag #EcommerceSolidaire ?</h4>
            <div class="ml-sm-5">
                <p>
                    <a href="https://twitter.com/WiziShop_fr/status/1239946881574240256?s=20" rel="nofollow">La
                        société Wizishop</a> est à l’origine du mouvement citoyen Covid-19 #EcommerceSolidaire en
                    proposant leur solution gratuitement suite à l’appel de Cédric O, Secrétaire d’Etat au
                    Numérique. Merci à eux d’avoir lancé cette formidable dynamique et de <a href="https://ecommerce-solidaire.com/" target="_blank">référencer toutes les initiatives #EcommerceSolidaire ici</a>.
                    Le Hashtag <a href="https://twitter.com/hashtag/ecommercesolidaire">#EcommerceSolidaire</a> a
                    quant à lui été <a href="https://twitter.com/chanezzzzzz/status/804031091246039040">lancé par
                        Emmaüs</a> il y a quelques années.
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
                        <span>{{ $volonteer->city }}</span>
                    </a>
                    @else
                    <span class="col-md-6">
                        <span>{{ $volonteer->name }}</span>
                        <span class="text-secondary">{{ $volonteer->company }}</span>
                        <span>{{ $volonteer->city }}</span>
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
                Je m'inscris <span class="text-dark">gratuitement</span>
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
                                    Je m'inscris gratuitement
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
                    Notre action s'inscrit dans une démarche de <strong>crise sanitaire et économique</strong>
                    pour limiter les pertes de produits alimentaires, faciliter le commerce de tout produit
                    utile et <strong>limiter l'impact économique</strong> au plus près de chacun d'entre nous.
                    L’objectif est bien de préparer le redémarrage qui aura lieu dans les prochaines semaines.
                </p>

            </div>
            <div class="col-md-6 col-12">
                <h3 class="h-underline-secondary mb-2">Quelques conseils</h3>
                <p>Il reste primordial de respecter les <strong>recommandations gouvernementales</strong> :</p>
                <ul>
                    <li>se déplacer pour des <strong>achats strictement nécessaires</strong> dans les points de
                        vente ou de retrait de proximité</li>
                    <li>respecter tous les <strong>gestes barrières</strong> pour protéger les personnes autour
                        de vous ainsi que vous-même et particulièrement pendant le retrait de vos courses.</li>
                    <li>appliquer un <strong>gel hydro-alcoolique</strong> ou se laver les mains régulièrement
                    </li>
                    <li>respecter la <strong>distance d'1 mètre</strong> avec les personnes alentour</li>
                    <li> <strong>désinfection</strong> avec des lingettes des zones de contact (comme un caddy
                        de supermarché)</li>
                    <li>tousser dans son coude ou dans un masque pour éviter les projections de gouttelettes
                    </li>
                </ul>
                <p>Chacun a son rôle à jouer. </p>
            </div>
        </div>
    </section>
@endsection