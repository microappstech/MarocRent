@extends('layout')
@section("title","Rents")
@section("HeaderLinks")

        <link rel="stylesheet" href="{{ asset('Assets/css/House.css')}}">
        <link rel="shortcut icon" href="{{asset('Assets/images/house.png')}}" type="image/x-icon">
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
        <script src="https://use.fontawesome.com/77318b8ddc.js"></script>
@endsection
@section("content")


      <header>
        <nav style="width: 100%;" class="navbar navbar-expand-lg navbar-light bg-light nav-home px-5">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand d-flex" href="/">
                    <img src="../Assets/images/house.png" height="20px" width="30px" alt="">
                    <h5 class="text-muted">MarocRent</h5>
                </a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Appartements <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Houses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Garges</a>
                </li>
              </ul>
              <div class="form-inline my-2 my-lg-0">
                <a href="./Auth/Login.html" class="sign" align="center">Sign up / Sign in</a>
              </div>
            </div>
          </nav>          
      </header>
      
      <div class="main">
        <div class="mainimgs">
            <div class="mainimg">
                <img src="../Assets/images/Houses/kitchen.jpg" alt="">
            </div>
            
            <div class="secondimg" >
                <img src="../Assets/images/Houses/eatingroom.jpg" alt="">
                <img src="../Assets/images/Houses/safa.jpg" alt="">
                <img src="../Assets/images/Houses/medium.jpg" alt="">
                <img src="../Assets/images/Houses/flat.webp" alt="">
            </div>
        </div>
    
        <div class="maintext">
            <div class="hedearMain">
                <div class="header">
                    <div class="title">
                        <h1>Appartement Oualfa Azhari</h1>
                        <span class="adrs">555 W Madison St, Chicago, IL 60661  <span class="city">El Jadida</span></span>
                        <div class="price"><span>Price : </span> 1555 $</div>
                    </div>
                    <div class="review">
                        <span class="verified">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            Verified Listing
                        </span><br>
                        <span class="stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <a href="">(45 reviews)</a>
                        </span>
                    </div>
    
                </div>
                <div id="demandCard" class="demandCard">
                    <h3 >Contact This Property</h3>
                    <button class="demand">Demande Tour</button>
                    <button class="sendMsg">Send Message</button>
                    <a href="" class="whatsapp"><i class="fa fa-mobile" aria-hidden="true"></i> +212 637 6133 06</a>
                </div>
            </div>
            <div class="mainCardsReview">
                <div class="cardReview">
                    <div class="title">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <small class="date">July 21, 2023</small>
                    <div class="client">Hamza Miro</div>
                    <p class="bodyCard">Amazing experience to be here in Presidential Towers!!! I really feel this my home. Everything from an apartment tour, staff members...</p>
                    <div class="footerCard">
                        <a href="" class="quest">Was this helpful? <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                        <a href="" class="report">Report <i class="fa fa-flag-o" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="cardReview">
                    <div class="title">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <small class="date">July 21, 2023</small>
                    <div class="client">Hamza Miro</div>
                    <p class="bodyCard">Amazing experience to be here in Presidential Towers!!! I really feel this my home. Everything from an apartment tour, staff members...</p>
                    <div class="footerCard">
                        <a href="" class="quest">Was this helpful? <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                        <a href="" class="report">Report <i class="fa fa-flag-o" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="cardReview">
                    <div class="title">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <small class="date">July 21, 2023</small>
                    <div class="client">Hamza Miro</div>
                    <p class="bodyCard">Amazing experience to be here in Presidential Towers!!! I really feel this my home. Everything from an apartment tour, staff members...</p>
                    <div class="footerCard">
                        <a href="" class="quest">Was this helpful? <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                        <a href="" class="report">Report <i class="fa fa-flag-o" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="cardReview">
                    <div class="title">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <small class="date">July 21, 2023</small>
                    <div class="client">Hamza Miro</div>
                    <p class="bodyCard">Amazing experience to be here in Presidential Towers!!! I really feel this my home. Everything from an apartment tour, staff members...</p>
                    <div class="footerCard">
                        <a href="" class="quest">Was this helpful? <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                        <a href="" class="report">Report <i class="fa fa-flag-o" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="aboutAppart">
                <h3 class="title">About Appartement Oualfa Azhari</h3>
                <p>
                    Lake Meadows is a 70-acre lakefront community in the Bronzeville neighborhood on Chicago’s South Side that includes four high-rise residential buildings, five mid-rise residential buildings and a 170,000+ square foot shopping center.
                    Lake Meadows is a 70-acre lakefront community in the Bronzeville neighborhood on Chicago’s South Side that includes four high-rise residential buildings, five mid-rise residential buildings and a 170,000+ square foot shopping center. Offering a nice blend of size and value, floor plans at Lake Meadows include studios, one-, two- and three-bedrooms. All units offer city and park views, spacious closets, and utility packages. In select units, there are upgraded kitchens and baths, as well as a balcony.There are acres of scenic parks throughout Lake Meadows to walk through, tennis courts, a bark park and a clubhouse also to enjoy. The Bronzeville-IIT Red and Green Line CTA train station is also nearby giving residents quick access to go anywhere in Chicago.
                </p>
            </div>
            <div class="pictures"></div>
        </div>
    </div>
    
    
    

@endsection

@section("Scripts")
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('Assets/js/House.js')}}"></script>
@endsection