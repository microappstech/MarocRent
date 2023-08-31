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
<div class="body" style="margin-top:100px ">
    <div class="filterIcon">
        Filter
    </div>
    <div id="filter" class="filter">
    <div class="closeIcon">X</div>
    <form action="post">
        <input type="text" name="city" placeholder="Ville"  id="incity">
        <div class="inputs d-flex justify-content-around">
            <span class="spane pt-1">
                Price :
            </span>
            <input type="number" name="inpriceMin" placeholder="Min" style="display:inline; width:5rem; padding: 0px 10px;">
            <input type="number" name="inpriceMax" placeholder="Max" style="display:inline; width:5rem; padding: 0px 10px;">
        </div>
        <input type="date"  name="insatart" id="insatart" placeholder="Date début">
        <input type="date" name="infin" id="infin" placeholder="Date fin">
        <button class="btn my-2 px-5 searchbtn" type="submit">Search</button>
    </form>
    </div>
    <div class="d-flex justify-content-around flex-wrap" style="float: left;">
        <a style="text-decoration: none; color:#1c1c1c;" href="">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="../Assets/images/Houses/medium.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">el oualfa haj fateh</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </a>
        <a style="text-decoration: none; color: #1c1c1c;" href="">
            <div class="card my-2" style="width: 20rem;">
            <img class="card-img-top" src="../Assets/images/Houses/flat.webp" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Bd anfa rue algerie</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </a>
        <a style="text-decoration: none; color:#1c1c1c;" href="">
            <div class="card my-2" style="width: 20rem;">
                <img class="card-img-top" src="../Assets/images/Houses/jatdin.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">15 rue tunise</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </a>
        <a style="text-decoration: none; color:#1c1c1c;" href="">
            <div class="card my-2" style="width: 20rem;">
                <img class="card-img-top" src="../Assets/images/Houses/straint.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">oualfa azhari</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </a>
        <a style="text-decoration: none; color:#1c1c1c;" href="">
            <div class="card my-2" style="width: 20rem;">
                <img class="card-img-top" src="../Assets/images/Houses/badroom.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Sanya raml el Rahma</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </a>
        <a style="text-decoration: none; color:#1c1c1c;" href="">
            <div class="card my-2" style="width: 20rem;">
                <img class="card-img-top" src="../Assets/images/Houses/kitchen.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Apartement hay matar el jadida</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </a>
        <a style="text-decoration: none; color:#1c1c1c;" href="">
            <div class="card my-2" style="width: 20rem;">
                <img class="card-img-top" src="../Assets/images/Houses/safa.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Studio Najd el jadida</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </a>
        <a style="text-decoration: none; color:#1c1c1c;" href="">
            <div class="card my-2" style="width: 20rem;">
                <img class="card-img-top" src="../Assets/images/Houses/eatingroom.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chambre rue massira el jadida</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection

@section("Scripts")
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../Assets/js/Houses.js"></script>
<script src="{{asset('Assets/js/Houses.js')}}"></script>
@endsection