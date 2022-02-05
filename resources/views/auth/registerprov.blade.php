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

<x-guest-layout>
<x-jet-validation-errors class="mb-4" />

        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors  />

        <form method="POST" action="/addprovider">
            @csrf


            <div class="form-group mb-3">
                <x-jet-label  class="label" for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="form-group mb-3">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="form-group mb-3">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="form-group mb-3">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
 
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
               
                </a>
            

             
                <div class="form-group">
                <button class="form-control btn btn-primary rounded submit px-3">
                Register
                                </button>
            </div>
                                </div>
        </form>
 
</x-guest-layout>
	</section>

	<script src="login1/js/jquery.min.js"></script>
  <script src="login1/js/popper.js"></script>
  <script src="login1/js/bootstrap.min.js"></script>
  <script src="login1/js/main.js"></script>

</body>
</html>