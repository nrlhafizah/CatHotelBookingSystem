<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meowie</title>
    <link rel="shortcut icon" type="cat/png" href="img/cat.png">
<!--

Tooplate 2095 Level

https://www.tooplate.com/view/2095-level

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
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
                                    <a class="nav-link" href="#top"><strong>Home</strong> <span class="sr-only">(current)</span></a>
                                  </li>
                                 
                                  @if (Route::has('login'))
                            
                            @auth
                            <x-app-layout>

                            </x-app-layout>
                            @else
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('register') }}">Register</a>
                            </li>    
                            @endif
                            @endauth
                        </div>
                    @endif                        
                           
                       
                                </ul>
                            </div>                            
                        </nav>            
                    </div>
                </div>
            </div>
            <div class="tm-section tm-bg-img" id="tm-section-16">
                <div class="tm-form-dk ie-container-width-fix1">
                    
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            
                                <div class="tm-search-form tm-section-pad-2">
                              
                                    <div class="form-row tm-search-form-row">
                                        
                                        <div class="form-group tm-form-element tm-form-element-2">
                                        <button type="submit" name="search" class="btn btn-primary tm-btn-search"><a href="{{ route('register') }}">Customer</a></button>
                                        </div>
                                 
                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <button type="submit" name="search" class="btn btn-primary tm-btn-search">Provider</button>
                                        </div>
                                      </div>
                                    
    </div>
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>
           



        
        </div>
        
</body>
</html>