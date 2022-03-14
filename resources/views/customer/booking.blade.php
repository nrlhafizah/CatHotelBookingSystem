<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>
	<link href="http://code.jquery.com/ui/1.9.2/themes/smoothness/jquery-ui.css" rel="stylesheet" />

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

	   <!--date picker -->
	   <!-- <script>
	   $(document).ready(function(){
	   $("#datepicker").datepicker({
	   minDate: +2
	   });
	   
	   });
	   </script> -->
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset ('booking/css/bootstrap.min.css')}}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset ('booking/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>

.button-40 {
  background-color: #111827;
  border: 1px solid transparent;
  border-radius: .75rem;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  flex: 0 0 auto;
  font-family: "Inter var",ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 1.125rem;
  font-weight: 600;
  line-height: 1.5rem;
  padding: .75rem 1.2rem;
  text-align: center;
  text-decoration: none #6B7280 solid;
  text-decoration-thickness: auto;
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
			<button class="button-40" role="button"><a href="{{url('/redirect')}}"> Go Back</a></button><br><br><br>
			@include('flash-message')
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
                        
						<form action="/add" method="POST">
							@csrf
							<div class="form-header">
								<h2>Book Your Hotel</h2>
							</div>
							<div class="form-group">
								<input class="form-control" name="name" type="text" placeholder="Enter your Name">
								<span class="form-label">Name</span>
							</div>
							<div class="form-group">
								<input class="form-control" name="email" type="tel" placeholder="Enter your Email">
								<span class="form-label">Email</span>
							</div>
							<div class="form-group">
								<input class="form-control" name="no" type="tel" placeholder="Enter your Phone Number">
								<span class="form-label">Phone Number</span>
							</div>
                            <div class="form-group">
								<select  name="cats" class="form-control" required>
									<option value="cats" label="&nbsp;" selected hidden></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<span class="select-arrow"></span>
								<span class="form-label">Cats</span>
							</div>
					
					
							<div class="row">
							<div class="col-md-6">
									<div class="form-group">
										<input name="in" class="form-control" type="date" required>
										<span class="form-label">Check Out</span>
									</div>
								</div>
                                <div class="col-md-6">
									<div class="form-group">
										<input name="out" class="form-control" type="date" required>
										<span class="form-label">Check Out</span>
									</div>
								</div>
								<!-- <div class="col-md-6"> -->
									<!-- <div class="form-group"> -->
										<!-- <input class="form-control" type="time" required> -->
										<!-- <span class="form-label">Pickup Time</span> -->
									<!-- </div> -->
								<!-- </div> -->
                                
							</div>

							<div class="form-btn">
							<input type="hidden" value="{{$data->id}}" name="bookid">
								<button type="submit" value="{{$data->id}}" name="bookid" class="submit-btn">Book Now</button>
							</div>

							
						</form>
						<br><br>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="booking/js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>