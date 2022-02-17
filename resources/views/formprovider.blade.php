<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meowie</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/tooplate-style.css">    
	<link rel="stylesheet" href="login1/css/style.css">


</head>
<body>

        

<section class="ftco-section">
            <button onclick="history.back()">Go Back</button><br><br>
		<div class="container">
			<div class="row justify-content-center">
		
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(login1/images/30.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">REGISTER</h3>
			      		</div>
								
			      	</div>
     
            <div class="mb-4 font-medium text-sm text-green-600">

            </div>
  

        <form class="signin-form" method="POST" action="/addProv">
  
        @csrf

            <div class="form-group mb-3">
                <label class="label" for="name">Name</label>
                <input type="name" class="form-control" type="name" name="name" required/>
            </div>

            <div class="form-group mb-3">
                <label class="label" for="password">Email</label>
                <input id="email"  class="form-control" type="email" name="email" required/>
            </div>
            <div class="form-group mb-3">
                <label class="label" for="password">Phone Number</label>
                <input id="no"  class="form-control" type="number" name= "no" required/>
            </div>
            <div class="form-group mb-3">
                <label class="label" for="password">Hotel Name</label>
                <input id="hname"  class="form-control" type="text" name="hname" required/>
            </div>
            <div class="form-group mb-3">
                <label class="label" for="password">Address Hotel</label>
                <input id="hname"  class="form-control" type="text" name="address" required/>
            </div>
            <div class="form-group mb-3">
                <label class="label" for="password">SSM Number</label>
                <input id="ssm"  class="form-control" type="number" name="ssm" required/>
            </div>


            <br>
            <div class="form-group">
                <button class="form-control btn btn-primary rounded submit px-3">
                    Register
                </button>
            </div>


                

        </form>


                      
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="login1/js/jquery.min.js"></script>
  <script src="login1/js/popper.js"></script>
  <script src="login1/js/bootstrap.min.js"></script>
  <script src="login1/js/main.js"></script>

</body>
</html>