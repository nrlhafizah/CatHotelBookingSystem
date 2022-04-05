<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Meowie</title>
    <link rel="shortcut icon" type="cat/png" href="img/cat.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="{{ asset ('profile/assets/css/styles.css')}}">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="{{ asset ('profile/assets/images/smirk.jpg')}}" alt="">
			<span class="title">{{Auth::user()->name}}</span>
			<span class="tagline">{{Auth::user()->name}}<br><br>
				<a href=""><b>{{Auth::user()->name}}<b></a></span>
		</h1> 
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="{{url('/redirect')}}">Home</a></li>
					<li><a href="{{url('/requestBooking')}}">Request</a></li>
					<li><a href="{{url('/history')}}">History</a></li>
                    <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
						<ul class="dropdown-menu">					
							<li><a href="{{url('/editaccount')}}">Edit Profile</a></li>
							<li><a href="{{url('/changepassword')}}">Change Password</a></li>
							<li><a href="{{url('/deleteaccount')}}">Delete Account</a></li>
						</ul>
					</li>
                    <li>
                                  @auth
                                    
                                    <a href="{{ route('logout') }}"  onclick = "event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     
                                    <form method="POST" action="{{ route('logout')}}">
                                    @csrf
                                    
                                    <a href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">LOG OUT</a>
  
                                    </form>
                                    </a>
                                    
                                 @endauth
                                 </li>
                               
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
		
 

		
		<div class="row section featured topspace">
			<h2 class="section-title"><span>About Me</span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center"></h3>
					<p></p>
		
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center"></h3>
					<p></p>
				
				</div>
		

			</div>
		</div> <!-- / section -->
	
	
		<div class="row section recentworks topspace">
			
			
		</div> <!-- /section -->

	</div>	<!-- /container -->

</main>


<footer id="footer">
	<div class="container">
		<div class="row">

			
			
		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 widget">
				<div class="widget-body">
					<p> </p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; 2022 Nurul Hafizah<br> 
						 </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="{{ asset ('profile/assets/js/template.js')}}"></script>
</body>
</html>