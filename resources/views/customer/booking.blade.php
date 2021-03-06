<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meowie</title>
	<link rel="shortcut icon" type="cat/png" href="img/cat.png">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="{{ asset ('booking5/css/bootstrap.min.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{ asset ('booking5/css/style.css')}}" />
	
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
   
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>

<style>

.button-40 {
  background-color: #ebebeb;
  border: 1px solid transparent;
  border-radius: .75rem;
  box-sizing: border-box;
  color: black;
  cursor: pointer;
  flex: 0 0 auto;
  font-family: "Inter var",ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 14px;
  font-weight: 600;
  line-height: 1.5rem;
  padding: .75rem 1.2rem;
  text-align: center;
  text-decoration: none #6B7280 solid;
  transition-duration: .2s;
  transition-property: background-color,border-color,color,fill,stroke;
  transition-timing-function: cubic-bezier(.4, 0, 0.2, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: auto;
}

.button-40:hover {
  background-color: #374151;
}

.button-40:focus {
  box-shadow: none;
  outline: 2px solid transparent;
  outline-offset: 2px;
}

@media (min-width: 768px) {
  .button-40 {
    padding: .75rem 1.5rem;
  }
}

</style>




</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
			<button onclick="history.back()" class="button-40" role="button"> Go Back</button><br><br><br>
			@include('flash-message')
				<div class="row">
					<div class="booking-form">
					
							<div class="form-group">
								  
						<form action="/add" method="POST">
							@csrf
							<div class="form-label">
								<h3>Book Your Hotel</h3>
							</div>
							</div>
							<div class="row"> 
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" disabled>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="text" name="email" value="{{Auth::user()->email}}" disabled>
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Phone Number</span>
										<input class="form-control" name="no" type="text" placeholder="Enter Phone Number">
									</div>
								</div>
							<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Total Cats</span>
										<select name="cats" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label" >Check In</span>
										<input class="form-control" type="text" id="in" name="in" required>
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label" >Check Out</span>
										<input class="form-control" type="text" id="out" name="out" required>
									</div>
								</div>
								
								
							</div>
							<div class="row">
							<div class="col-md-9">
									<div class="form-group">
										<span class="form-label">Additional Information</span>
										<input name="additional" class="form-control" type="text" placeholder="Anything...">
									</div>
								</div>
	
							<div class="row">
								<div class="col-md-3">
									<div class="form-btn">
										<input type="hidden" value="{{$data->id}}" name="bookid">
										<button type="submit" value="{{$data->id}}" name="bookid" class="submit-btn">Book Now</button>
									</div>
								</div>
								</div>
								</form>
							</div>

					</div>
				</div>
			</div>
		</div>
	</div>


</body>

<script>
	
var msg = "";
var dateToday = new Date();
$('#in').datepicker({
	minDate: dateToday,
  beforeShowDay: function(date) {
    var day = jQuery.datepicker.formatDate('yy-mm-dd', date);
    return [msg.indexOf(day) == -1]
	
  }
});

var msg = "";
var dateToday = new Date();
$('#out').datepicker({
	minDate: dateToday,
  beforeShowDay: function(date) {
    var day = jQuery.datepicker.formatDate('yy-mm-dd', date);
    return [msg.indexOf(day) == -1]
	
  }
});

</script>

@foreach($info as $info)
@if($data->id == $info->hotelID)
<script>
	
var msg = "{{$info->checkIn}}";
var dateToday = new Date();
$('#in').datepicker({
	minDate: dateToday,
  beforeShowDay: function(date) {
    var day = jQuery.datepicker.formatDate('yy-mm-dd', date);
    return [msg.indexOf(day) == -1]
	
  }
});

</script>

<script>

var msg = "{{$info->checkIn}}";
var dateToday = new Date();
$('#out').datepicker({
	minDate: dateToday,
  beforeShowDay: function(date) {
    var day = jQuery.datepicker.formatDate('yy-mm-dd', date);
    return [msg.indexOf(day) == -1]
	
  }
});

</script>
@endif
@endforeach




</html>