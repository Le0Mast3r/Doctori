{{-- @extends('layouts.app') --}}

<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Ajax dynamic dependent country state city dropdown using jquery ajax in Laravel 5.6</title>
    <link rel="stylesheet" href="http://www.codermen.com/css/bootstrap.min.css">    
    <script src="http://www.codermen.com/js/jquery.js"></script>
		<link rel="stylesheet" href="{{asset('css/css_user.css')}}">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<h1><a href="index.html" class="logo">Splash</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
			  <a href="{{url('home')}}">Accueil</a>
	          </li>
	          <li>
			  <a href="{{route('prend-rdv')}}">Prenze Un RDV</a>
	          </li>
	          <li>
              
	          </li>
	          <li>
              <a href="{{route('mes-rdv')}}">Mes RDV</a>
	          </li>
	          <li>
              <a href="#">Paramètre & Edit</a>
              </li>
              <li>
			  <a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
            </li>
	        </ul>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
	        <div class="mb-5">
						<h3 class="h6">Subscribe for newsletter</h3>
						<form action="#" class="colorlib-subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>

	       

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        @yield('content')
      </div>
		</div>

    <script src="{{asset('js-user/jquery.min.js')}}"></script>
    <script src="{{asset('js-user/popper.js')}}"></script>
    <script src="{{asset('js-user/bootstrap.min.js')}}"></script>
	<script src="{{asset('js-user/main.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
	
  </body>
</html>