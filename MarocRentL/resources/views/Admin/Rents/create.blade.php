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
<link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('Assets/css/AddPost.css')}}">
@endsection
@section("content")
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create new Rent Post </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Post Rent</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <section class="content">
      <div class="card">
        <div class="card-body row">
          <div class="col-6 text-center d-flex justify-content-center">
            <div class="">
                
            </div>
          </div>
          <div class="col-6">
            <form action="{{route('StoreRent')}}" method="post">
                @csrf
                <div class="form-group">
                <label for="inputName">Titre</label>
                <input type="text" id="inputName" name="title" placeholder="Titre de votre loyer" class="form-control" />
                </div>
                <div class="form-group py-1"  style="border: 1px solid rgba(195, 195, 195, 0.758);">
                <label class="file-input-label" for="filesInput">Select a main image</label>
                    <input type="file" name="moreimgs" name="mailImage" id="filesInput" class="form-control d-none" multiple>
                </div>
                <div class="form-group py-1" style="border: 1px solid rgba(195, 195, 195, 0.758);">
                <label class="file-input-label" for="filesInput">Select More Images</label>
                    <!-- <label for="otherPng">More Images</label> -->
                    <input type="file" name="moreimgs" id="filesInput" class="form-control d-none" multiple>
                </div>
                <div class="form-group">
                <label for="inputEmail">Adress</label>
                <input type="text" name="adresse" placeholder="Adresse de votre loyer" id="inputEmail" class="form-control" />
                </div>
                <div class="form-group">
                <label for="inputSubject">Ville</label>
                <input type="text" name="city" id="inputSubject" placeholder="Vile de votre loyer" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="inputMessage">Description</label>
                    <textarea id="inputMessage" name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group d-flex ">
                <label for="inputMessage" class="col-3">Type de contrat</label>
                <div class="d-flex col-9 justify-content-arround">
                    <div class="input-group mx-1">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><input id="rent"  name="TypeRent" value="0" type="radio"></span>
                        </div>
                        <label type="text" for="rent"  class="form-control bg-light">mensuel</label>
                    </div>
                    <div class="input-group mx-1">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><input id="rentdaily" name="TypeRent" value="1" type="radio"></span>
                        </div>
                        <label type="text" for="rentdaily"  class="form-control bg-light">journée</label>
                    </div>
                    <div class="input-group mx-1">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><input id="vente" name="TypeRent" value="0" type="radio"></span>
                        </div>
                        <label type="text" for="vente"  class="form-control bg-light">Vente</label>
                    </div>
                    
                </div>

                </div>
                <div class="form-group">
                    <label for="inputMessage">Price</label>
                    <input id="inputMessage" type="number" name="price" placeholder="Prix pour jour / Prix pour mois" class="form-control" rows="4"></input>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary px-5 mx-auto" value="Submit">
                </div>
            </form>
          </div>
        </div>
      </div>

    </section>
</div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        Created By
      <b>Hamza Mouddakir</b>
    </div>
    <strong>Copyright &copy; 2023 <a href="http://Hamza-mouddakir.tech">Hamza Dev</a>.</strong> All rights reserved.
  </footer>

</div>


@endsection

@section("Scripts")
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{asset('Assets/Admin/Dashboard.js')}}"></script>
<script src="{{asset('Assets/js/Houses.js')}}"></script>
@endsection