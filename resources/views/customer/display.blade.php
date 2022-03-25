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
	<link rel="stylesheet" href="{{ asset ('profile/assets/css/styles.css')}}">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="{{ asset ('profile/assets/images/smirk.jpg')}}" alt="">
			<span class="title">{{$data->hotelName}}</span>
			<span class="tagline">{{$data->email}}<br><br>
				<a href=""><b>{{$data->address}}<b></a></span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="">Profile</a></li>
					    <li><a href={{"contactHotel/".$data['id']}}>Contact</a></li>
                    <li><a href="{{url('/redirect')}}">Go Back</a></li>
                    
						
				
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>
@foreach($prof as $prof)
@if ($data->id == $prof->id)
<main id="main">

	<div class="container">
		
 

		<div class="row section topspace">
			<div class="col-md-12">
				<p class="lead text-center text-muted"> {{$prof->description}} </p>
			</div>
		</div> <!-- / section -->
		
		<div class="row section featured topspace">
			<h2 class="section-title"><span>Services</span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">{{$prof->service3}}</h3>
					<p>{{$prof->desc3}}</p>
		
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">{{$prof->service1}}</h3>
					<p>{{$prof->desc1}}</p>
				
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">{{$prof->service2}}</h3>
					<p>{{$prof->desc2}}</p>
			
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">{{$prof->service4}}</h3>
					<p>{{$prof->desc4}}</p>
					
				</div>

			</div>
		</div> <!-- / section -->
		<p class="text-center"><a href={{"create/".$prof['id']}} class="btn btn-action">Make a booking</a></p>
	
		<div class="row section recentworks topspace">
			
			<h2 class="section-title"><span>Pictures</span></h2>
			
			<div class="thumbnails recentworks row">
			
			
   
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<span class="img">
						<img src="{{ asset('storage/images/services/'.$prof->image1)}}" onerror="this.src='https://www.macmillandictionary.com/external/slideshow/full/White_full.png'"  />
						</span>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<span class="img">
						<image src="{{ asset('storage/images/services/'.$prof->image2) }}" onerror="this.src='https://www.macmillandictionary.com/external/slideshow/full/White_full.png'" />
						</span>
				</div>
				

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a  href="sidebar-right.html">
						<span class="img">
						<image src="{{ asset('storage/images/services/'.$prof->image3) }}"  onerror="this.src='https://www.macmillandictionary.com/external/slideshow/full/White_full.png'" />
							<span class="cover"></span>
						</span>
					
					</a>
				
					<h4></h4>
					<p></p>
				</div>
				
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a  href="sidebar-right.html">
						<span class="img">
						<image src="{{ asset('storage/images/services/'.$prof->image4) }}" onerror="this.src='https://www.macmillandictionary.com/external/slideshow/full/White_full.png'" />
							<span class="cover"></span>
						</span>
					
					</a>
					<span ><a href="">  </a>  <a href="">  </a></span>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a  href="sidebar-right.html">
						<span class="img">
						<image src="{{ asset('storage/images/services/'.$prof->image5) }}" onerror="this.src='https://www.macmillandictionary.com/external/slideshow/full/White_full.png'"  />
							<span class="cover"></span>
						</span>
					
					</a>
					<span ><a href="">  </a>  <a href="">  </a></span>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a  href="sidebar-right.html">
						<span class="img">
						<image src="{{ asset('storage/images/services/'.$prof->image6) }}" onerror="this.src='https://www.macmillandictionary.com/external/slideshow/full/White_full.png'" />
							<span class="cover"></span>
						</span>
					
					</a>
					<span ><a href="">  </a>  <a href="">  </a></span>
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
<script src="{{ asset ('profile/assets/js/template.js')}}"></script>
</body>
</html> 