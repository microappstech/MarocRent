 {{-- <header>
    <section id="logo">
        <img src="./Assets/images/icon.png" width="40%" alt="">
    </section>
    <nav role="navigation" class="primary-navigation" id="navbar">
        <ul>
        <li><a href="/">Home</a></li>
        <li><a href="{{route('AllRents')}}">Rents</a></li>
        <li><a href="{{route('AllPosts')}}">Posts</a></li>
        <li><a href="{{route('home.about')}}">About</a></li>
        <li><a href="{{route('home.contact')}}">Contact</a></li>
        </ul>
    </nav>
</header>  --}}
<header style="margin-bottom:75px;">
    <nav class="navbar navbar-expand-lg  nav-home px-5 " style="background: #007574;position: fixed; top: 0; display: block;    width: 100%;   z-index: 2; ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand d-flex" href="/">
                <img src="../Assets/images/house.png" height="20px" width="30px" alt="">
                <h5 class="text-white">MarocRent</h5>
            </a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link text-white" href="{{route('AllRents')}}">Rents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('AllPosts')}}">Posts</a>
            </li>
            <li class="nav-item">
                <a href="{{route('home.about')}}" class="nav-link text-white">About</a>
            </li>
          </ul>
          <div class="form-inline my-2 my-lg-0">
            <a href="./Auth/Login.html" class="sign" align="center">Sign up / Sign in</a>
          </div>
        </div>
      </nav>          
  </header>