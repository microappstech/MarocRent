<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('Assets/images/house.png') }}" rel="stylesheet">
        
        <link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet">
        <title>MarocRent @yield('title')</title>
        @yield("HeaderLinks")
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
        @yield("Scripts")
    </body>
</html>
