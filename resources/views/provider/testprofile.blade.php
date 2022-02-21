<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Meowie</title>
    <link rel="shortcut icon" type="cat/png" href="img/cat.png">

	<link rel="shortcut icon" href="profile/assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="profile/assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="profile/assets/images/smirk.jpg" alt="">
			<span class="title">{{Auth::user()->name}} </span>
			<span class="tagline">A mystery person<br><br>
				<a href=""><b>{{Auth::user()->email}} <b></a></span>
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
					<li><a href="{{url('/listDown')}}">List</a></li>
                    <li><a href="{{url('/listDown')}}">Request</a></li>
                    <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
						<ul class="dropdown-menu">					
							<li><a href={{"showProfile/".Auth::user()->id}}>Edit Profile</a></li>
							<li><a href="{{url('/change')}}">Change Password</a></li>
							<li><a href="{{url('/delete')}}">Delete Account</a></li>
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
@foreach($data as $data)
@if (Auth::user()->id == $data-> id)
<main id="main">

	<div class="container">
		
		<div class="row section topspace">
			<div class="col-md-12">
				<p class="lead text-center text-muted"> {{$data->description}} </p>
			</div>
		</div> <!-- / section -->
		
		<div class="row section featured topspace">
			<h2 class="section-title"><span>Services</span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">{{$data->service1}}</h3>
					<p>{{$data->desc1}}</p>
		
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">{{$data->service2}}</h3>
					<p>{{$data->desc2}}</p>
				
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">{{$data->service3}}</h3>
					<p>{{$data->desc3}}</p>
			
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">{{$data->service4}}</h3>
					<p>{{$data->desc4}}</p>
					
				</div>
			</div>
		</div> <!-- / section -->
		<p class="text-center"><a href="" class="btn btn-action">Make a booking</a></p>
	
		<div class="row section recentworks topspace">
			
			<h2 class="section-title"><span>Pictures</span></h2>
			
			<div class="thumbnails recentworks row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="profile/assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Sample title - big data solutions</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Wordpress</a> | <a href="">Logotype</a></span>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="profile/assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Pure ipsum - development services for people</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Wordpress</a></span>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="profile/assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Lorem studios - interior and patio design</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
					<h4></h4>
					<p></p>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="profile/assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Pure ipsum - development services for people</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Wordpress</a></span>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="profile/assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Lorem studios - interior and patio design</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
					<h4></h4>
					<p></p>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="profile/assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Lorem studios - interior and patio design</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
					<h4></h4>
					<p></p>
				</div>
			</div>

		</div> <!-- /section -->

	</div>	<!-- /container -->

</main>
@endif
@endforeach

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
<script src="profile/assets/js/template.js"></script>
</body>
</html>
