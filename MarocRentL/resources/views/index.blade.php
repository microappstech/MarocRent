@extends('layout')
@section("title","Rents")
@section("HeaderLinks")
<link rel="stylesheet" href="{{ asset('Assets/css/Houses.css')}}">
<link rel="shortcut icon" href="{{ asset('Assets/images/house.png')}}" type="image/x-icon">
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@endsection
@section("content")
        <div id="mainbanner" class="mt-5" style="background-image: url('./Assets/images/house.png')">
            
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
    
    @endsection
    @section("Scripts")
        <script src="{{asset('Assets/js/main.js')}}"></script>
    @endsection


