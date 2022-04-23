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
			<img class="img-circle" src="profile/assets/images/logo.jpg" alt="">
			@foreach($detail as $detail)
			@if($detail->userID == Auth::id())
			<span class="title">{{$detail->hotelName}} </span>
			<span class="tagline">{{Auth::user()->email}} <br><br>
			<a href=""><b>{{$detail->address}} <b></a></span>
			@endif
			@endforeach
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
                    <li><a href="{{url('/custRequest')}}">Request</a></li>
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
		@if(isset($data))
		<div class="row section featured topspace">
			<h2 class="section-title"><span>Services</span></h2>
			<div class="row">
			<br>
			<?php
				$name=$data->services;
				$result = str_replace(',', '<br> •', $name);

				echo "<h3 class='text-center'> • $result</h3>"
			?>	
			
			</div>
		</div> <!-- / section -->
		@endif
	@if($data['images'])
		<div class="row section recentworks topspace">
			
			<h2 class="section-title"><span>Pictures</span></h2>
			
			<div class="thumbnails recentworks row">
			
	
				
				@php $images = json_decode($data->images,true); @endphp
   			@if(is_array($images) && !empty($images))
			   
   			@foreach ($images as $images)
			   <div class="col-xs-12 col-sm-6 ">
			   <span class="img">
     			<img src="{{ asset('storage/images/services/'.$images)}}"/>
				 </span>
				 </a>
				
					<h4></h4>
					<p></p>
				 </div>
				 @endforeach
   			@endif	
			 	

   			
			

				

		</div> <!-- /section -->

	</div>	<!-- /container -->
@endif
</main>
@endif
@endforeach



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
