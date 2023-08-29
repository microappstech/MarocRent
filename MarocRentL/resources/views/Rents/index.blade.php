@extends('layout')
@section("title","Posts")
@section("content")
<div class="body">
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