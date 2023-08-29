<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('Assets/images/house.png') }}" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('Assets/css/Houses.css')}}">
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
        <title>MarocRent @yield('title')</title>
        <style>
            .body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }
    
            .contact-form {
                background-color: #fff;
                padding: 20px 100px;
                border-radius: 5px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                width: 300px;
            }
    
            .contact-form h2 {
                font-size: 24px;
                margin-bottom: 10px;
            }
    
            .contact-form label {
                font-size: 14px;
                display: block;
                margin-bottom: 5px;
            }
    
            .contact-form input[type="text"],
            .contact-form textarea {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 3px;
                resize: vertical;
            }
    
            .contact-form button {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 3px;
                cursor: pointer;
            }
        </style>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net"/>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('Assets/css/Houses.css')}}">
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
        
    </head>
    <body class="antialiased">
        @include('navbar')
        @yield('content')
    
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{asset('Assets/js/Houses.js')}}"></script>
        <script src="{{asset('Assets/js/main.js')}}"></script>
    </body>
</html>
