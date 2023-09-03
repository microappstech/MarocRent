<!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>MarocRent @yield("title")</title>      
      <link href="{{asset('Assets/Admin/css/simple-line-icons.css')}}" rel="stylesheet">      
      <link href="{{asset('Assets/Admin/css/style.css')}}" rel="stylesheet">
      <link href="{{ asset('Assets/images/house.png') }}" rel="stylesheet">
      @yield('Styles')
  </head>
  
  <body class="navbar-fixed sidebar-nav fixed-nav">
      <header class="navbar">
          <div class="container-fluid">
              <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
              <a class="navbar-brand hidden-md-down" href="#" style="color:darkgreen">MarocRents</a>
              <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
                </li>
            </ul>
              <ul class="nav navbar-nav pull-right hidden-md-down" style="float: right">
                  
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          <img src="{{ asset('Assets/images/1.png') }}" style="width: 30px" class="img-avatar" alt="admin@bootstrapmaster.com">
                          <span class="hidden-md-down">admin</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <div class="dropdown-header text-xs-center">
                              <strong>Account</strong>
                          </div>
                          <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="tag tag-info">42</span></a>
                          <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="tag tag-success">42</span></a>
                          <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="tag tag-danger">42</span></a>
                          <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="tag tag-warning">42</span></a>
                          <div class="dropdown-header text-xs-center">
                              <strong>Settings</strong>
                          </div>
                          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="tag tag-default">42</span></a>
                          <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="tag tag-primary">42</span></a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link navbar-toggler aside-toggle" href="#">&#9776;</a>
                  </li>
              </ul>
          </div>
      </header>
      <div class="sidebar">
          <nav class="sidebar-nav">
              <ul class="nav">
                  <li class="nav-item">
                      <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard <span class="tag tag-info">NEW</span></a>
                  </li>
                  <li class="nav-title">
                      UI Elements
                  </li>
                  <li class="nav-item nav-dropdown">
                      <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Components</a>
                      <ul class="nav-dropdown-items">
                          <li class="nav-item">
                              <a class="nav-link" href="components-buttons.html"><i class="icon-puzzle"></i> Buttons</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="components-social-buttons.html"><i class="icon-puzzle"></i> Social Buttons</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="components-cards.html"><i class="icon-puzzle"></i> Cards</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="components-forms.html"><i class="icon-puzzle"></i> Forms</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="components-switches.html"><i class="icon-puzzle"></i> Switches</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="components-tables.html"><i class="icon-puzzle"></i> Tables</a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item nav-dropdown">
                      <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
                      <ul class="nav-dropdown-items">
                          <li class="nav-item">
                              <a class="nav-link" href="icons-font-awesome.html"><i class="icon-star"></i> Font Awesome</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Widgets <span class="tag tag-info">NEW</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="charts.html"><i class="icon-pie-chart"></i> Charts</a>
                  </li>
                  <li class="divider"></li>
                  <li class="nav-title">
                      Extras
                  </li>
                  <li class="nav-item nav-dropdown">
                      <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
                      <ul class="nav-dropdown-items">
                          <li class="nav-item">
                              <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>
      </div>
      <!-- Main content -->
      <main class="main">
          <!-- Breadcrumb -->
          <ol class="breadcrumb">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Dashboard</li>
          </ol>
          <div class="container">






           @yield('content')
          
          
          
          
          
          </div>
      </main>
      
      <footer class="footer">
          <span class="text-left">
              All right are reserved, 
          </span>
          <span class="pull-right">
              Powered by <a href="http://hamza-mouddakir.tech">Hamza Mouddakir</a>
          </span>
      </footer>
  
      <script src="{{asset('Assets/Admin/js/jquery.min.js')}}"></script>
      <script src="{{asset('Assets/Admin/js/app.js')}}"></script>
      @yield('Scripts')
  </body>
  
  </html>
  