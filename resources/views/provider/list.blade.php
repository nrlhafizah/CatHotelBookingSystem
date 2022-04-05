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

    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="tablelist/images/icons/favicon.ico"/>
    
<!--===============================================================================================-->
	
<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tablelist/css/util.css">
	<link rel="stylesheet" type="text/css" href="tablelist/css/main.css">
<!--===============================================================================================-->

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="profile/assets/images/smirk.jpg" alt="">
			<span class="title">{{Auth::user()->hotelName}} </span>
			<span class="tagline">{{Auth::user()->email}} <br><br>
				<a href=""><b>{{Auth::user()->address}} <b></a></span>
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

<main id="main">

	<div class="container">
		
		
    </div>       
</main>


	  <div class="limiter">

<div class="container-table100">
	<div class="wrap-table100">
		<div class="table100 ver1 m-b-110">
			<table data-vertable="ver1">
				<thead>
					<tr class="row100 head">
					
						<th class="column100 column2" data-column="column2">Name</th>
						<th class="column100 column3" data-column="column3">Check In</th>
						<th class="column100 column4" data-column="column4">Check Out</th>
						<th class="column100 column5" data-column="column5">Total cats</th>
					
						<th class="column100 column6" data-column="column6">Date of Booking</th>
						<th class="column100 column5" data-column="column5">Status</th>
						<th class="column100 column6" data-column="column6"></th>
					</tr>
				</thead>
@foreach($history as $history)
@if(Auth::user()->id == $history->hotelID)
				<tbody>
					<tr class="row100">
						<td class="column100 column1" data-column="column1">{{$history->name}}</td>
						<td class="column100 column2" data-column="column2">{{$history->checkIn}}</td>
						<td class="column100 column3" data-column="column3">{{$history->checkOut}}</td>
						<td class="column100 column4" data-column="column4">{{$history->totalCats}}</td>
						<td class="column100 column5" data-column="column5">{{$history->created_at}}</td>
						<td class="column100 column4" data-column="column4">{{$history->mark == false ? 'Ongoing' : 'Completed'}}</td>
						
						<form action="mark/{{$history->id}}" method="post" >
                            @csrf
							
                        <td> <button class="badge badge-warning p-2" value="{{$history->UserID}}">{{$history->mark == true ? 'Mark Ongoing' : 'Mark Complete'}}</button></td>
                        </form>
						
					</tr>
				</tbody>
@endif
@endforeach
			</table>
		</div>
	</div>
</div>
</div>
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


<!--===============================================================================================-->	
<script src="tablelist/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="tablelist/vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="tablelist/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="tablelist/js/main.js"></script>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="profile/assets/js/template.js"></script>


</body>
</html>
