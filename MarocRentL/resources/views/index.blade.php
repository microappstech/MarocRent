<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('Assets/images/house.png') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Oxygen:wght@300;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <title>MarocRent</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net"/>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div id="mainbanner" style="background-image: url('./Assets/images/house.png')">
            @include('navbar')
            
            <div class="overly"></div>
            <div class="search">
                <div class="citation">
                    <h2>Maisons et appartements  à louer  qui  correspondent à votre calendrier.</h2>
                </div>
                <input placeholder="Choisir la ville." type="text" class="input-search">
                <button class="material-symbols-outlined" id="iconsearch">
                    search
                </button>
            </div>
        </div>
        <div class="second-section">
            <div class="firstrow">
                <div class="left-img">
                    <img src="./Assets/images/download.png" alt="" >
                </div>
                <div class="right">
                    <div class="card" >
                        <h2 class="title">Une location simplifiée                    </h2>
                        <p class="bodyText">Parcourez les annonces de la plus haute qualité, postulez en ligne, signez votre bail et payez même votre loyer depuis n'importe quel appareil.</p>
                        <a href="./Pages/Houses.html">Voir Plus</a>
                    </div>
                </div>
            </div>
            <div class="firstrow">
                <div class="right-img">
                    <img src="./Assets/images/famillyhouse.jpg" alt="">
                </div>
                <div class="left">
                    <div class="card" >
                        <h2 class="title">
                            Besoin d'un prêt immobilier ? <br> Soyez pré-approuvé
                        </h2>
                        <p class="bodyText">Trouvez un prêteur qui peut offrir des taux hypothécaires compétitifs et vous aider avec l'approbation préalable. <br>
                            Obtenez une pré-approbation maintenant
                            Divulgation publicitaire</p>
                        <a href="./Pages/Houses.html">Voir Plus</a>
                        
                    </div>
                </div>
            </div>
            <div class="firstrow">
                <div class="left-img">
                    <img src="./Assets/images/flat.webp" alt="">
                </div>
                <div class="right">
                    <div class="card">
                        <h2 class="title">
                            Location 100% en ligne
                        </h2>
                        <p class="bodyText">
                            Acceptez les demandes, traitez les paiements de loyer en ligne et signez des baux numériques, le tout sur une seule plateforme.
                        </p>
                        <a href="./Pages/Houses.html">Voir notre offres</a>
                    </div>
                </div>
            </div>
            <div class="firstrow" >
                <div class="right-img" >
                    <img src="./Assets/images/sideAppart.png" alt="">
                </div>
                <div class="left">
                    <div class="card" >
                        <h2 class="title">
                            Annoncez votre location
                        </h2>
                        <p class="bodyText">
                            Connectez-vous avec plus de 75 millions de locataires à la recherche de nouvelles maisons à l'aide de notre plateforme de marketing complète.
                        </p>
                        <a href="./Pages/Houses.html">Voir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    
    <br>
    
        <footer>
            <div class="info-footer">
                <span class="logo">
                    <span>
                        <img src="./Assets/images/icon.png" alt="" >
                    </span>
    
                </span>
                <span class="cooperate">
                    <small>© 2023 Rents Group</small>
                </span>
                <span class="social">
                    <a target="_blank" href="https://web.facebook.com/hamza.modakur"><img src="./Assets/images/icons/facebook.png" alt="facebook"></a>
                    <a target="_blank" href="https://www.instagram.com/hamza_modakir/"><img src="./Assets/images/icons/instagram.png" alt="instagram"></a>
                    <a target="_blank" href="http://hamza-mouddakir.tech/"><img src="./Assets/images/icons/internet.png" alt="Potfolio"></a>
                    <a target="_blank" href="https://www.linkedin.com/in/hamza-mouddakir-b4467a1b9/"><img src="./Assets/images/icons/linkedin.png" alt="linkedIn"></a>
                    <a target="_blank" href="tel:+212637613306"><img src="./Assets/images/icons/whatsapp.png" alt="whatsapp"></a>
                </span>
            </div>
    
            <div class="footer">
                  <img src="./Assets/images/Footer1-removebg-preview.png" style="width: 100%;" alt="">
            </div>
        </footer>
    
        <script src="{{asset('Assets/js/main.js')}}"></script>
    </body>
</html>
