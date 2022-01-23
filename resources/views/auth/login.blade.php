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
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">      

</head>
<body>
<div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="img/cat1.png" alt="Site logo">
                                MEOWIE
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}"><strong>Home</strong> <span class="sr-only">(current)</span></a>
                                  </li>
                                  
                            
                                  
                                                       
                                </ul>
                            </div>                            
                        </nav>            
                    </div>
                </div>
            </div>
        

    <section>
        
        <div class="container">
            <div class="user singinBx">
                <div class="imgBx"><img src="Picture1.jpg" width="100px" height="100px" alt=""></div>
                <div class="formBx">
                   
                
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo />  -->
            <h2>SIGN IN</h2><br>
        </x-slot>

        <x-jet-validation-errors  />
                              @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <input id="email"  type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>


           <br>
                <x-jet-button class="btn btn-primary tm-btn-search">
                    {{ __('Log in') }}
                </x-jet-button>

                
            </div>
        </form>
        </x-jet-authentication-card>

                </div>
            </div>
 
        </div>
    </section>
</body>
</html>

