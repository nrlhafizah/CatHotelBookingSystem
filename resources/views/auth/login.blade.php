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

        

<section class="ftco-section">

		<div class="container">
			<div class="row justify-content-center">
		
			</div>
            <button onclick="history.back()" class="button-40" role="button">Go Back</button><br><br><br>
			<div class="row justify-content-center">
                
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(login1/images/30.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">SIGN IN</h3>
			      		</div>
								
			      	</div>
                      <x-jet-authentication-card>
        <x-slot name="logo">
    
        </x-slot>

        <x-jet-validation-errors  />
                              @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form class="signin-form" method="POST" action="{{ route('login') }}">
            @csrf


            <div class="form-group mb-3">
                <label class="label" for="name">Email</label>
                <input type="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="form-group mb-3">
                <label class="label" for="password">Password</label>
                <input id="password"  class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <br>
 
           <div class="form-group">
                <x-jet-button class="form-control btn btn-primary rounded submit px-3">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>

                
            </div>

            <!-- <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									
		            </div> -->
        </form>
        <p class="text-center">Not a member? <a href="{{url('/befregister')}}">Sign Up</a></p>
        </x-jet-authentication-card>
                      
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

