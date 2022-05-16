<!doctype html>
<html lang="en">
  <head>
  	<title>Espace de Docteur </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css/style_docteur.css')}}">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1><a href="index.html" class="logo">D.</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
          <a href="{{route('doctor.dashboard')}}"><span class="fa fa-home"></span> Accueil</a>
          </li>
          <li>
          <a href="{{asset('calendrier')}}"><span class="fa fa-calendar"></span> Calendrier</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note"></span> Blog</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cogs"></span>Paramètre</a>
          </li>
          <li>
          <a href="{{route('docteur-logout')}}"><span class="fa fa fa-sign-out"></span> Log out</a>
          </li>
        </ul>

        <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('doctor.dashboard')}}">Accueil</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{asset('calendrier')}}">Calendrier</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Paramètre</a>
              </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Bienvenu !</h2>
        @yield('content')
      </div>
		</div>

    <script src="{{asset('js_docteur/jquery.min.js')}}"></script>
    <script src="{{asset('js_docteur/popper.js')}}"></script>
    <script src="{{asset('js_docteur/bootstrap.min.js')}}"></script>
    <script src="{{asset('js_docteur/main.js')}}"></script>
  </body>
</html>