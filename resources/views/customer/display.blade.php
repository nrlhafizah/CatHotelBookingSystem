<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meowie</title>
    <link rel="shortcut icon" type="cat/png" href="{{ asset ('img/cat.png')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="{{asset ('slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset ('slick/slick-theme.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/datepicker.css')}}"/>
    <link rel="stylesheet" href="{{ asset ('css/tooplate-style.css')}}"/>             
    

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">

    @include("customer.displaycss")
   
</head>
        
<body>
<div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    
                        
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="{{ asset ('img/cat1.png')}}" alt="Site logo">
                                MEOWIE
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{url('/redirect')}}"><strong>Home</strong> <span class="sr-only">(current)</span></a>
                                  </li>
                                  
                            
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{url('/prof')}}"><strong>My Profile</strong></a>
                                  </li>
                                  <li class="nav-item">
                                  @auth
                                    
                                    <a href="{{ route('logout') }}"  onclick = "event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     
                                    <form method="POST" action="{{ route('logout')}}">
                                    @csrf
                                    
                                    <a href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();"><span class="nav-link"><strong>LOG OUT</strong></span>
                      
                                    </a>
  
                                    </form>
                                    </a>
                                    
                                 @endauth
                                 </li>
                               
                           
                                </ul>
                            </div>                            
                        </nav>            
                    </div>
                </div>
            </div>

<div class="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
		<div class="profile-content">
                
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar">
	                            <img src="{{ asset ('img/haein.png')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
	                        </div>
	                        <div class="name">
	                            <h3 class="title">{{$data->name}}</h3>
								<h6>MY LOVER</h6>
								<a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
	                        </div>
	                    </div>
    	            </div>
                </div>
                <div class="box">
                <a href="{{url('/book')}}">BOOK NOW!</a>
                </div>
                <div class="description text-center">
                    <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                </div>
				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                  <i class="material-icons">camera</i>
                                  About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                  <i class="material-icons">palette</i>
                                    Services
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                  <i class="material-icons">favorite</i>
                                    Contact
                                </a>
                            </li>
                          </ul>
                        </div>
    	    	</div>
            </div>
        
            <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="studio">
  				<div class="row">
                      
                  <div class="description text-center">
                  <img src="https://images.unsplash.com/photo-1524498250077-390f9e378fc0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83079913579babb9d2c94a5941b2e69d&auto=format&fit=crop&w=751&q=80" class="rounded">
                    <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                </div>
  				</div>
  			</div>
            <div class="tab-pane text-center gallery" id="works">
      			<div class="row">
      				<div class="col-md-3 ml-auto">
                      <img src="https://images.unsplash.com/photo-1524498250077-390f9e378fc0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83079913579babb9d2c94a5941b2e69d&auto=format&fit=crop&w=751&q=80" class="rounded">
  					  <img src="https://images.unsplash.com/photo-1506667527953-22eca67dd919?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6326214b7ce18d74dde5e88db4a12dd5&auto=format&fit=crop&w=750&q=80" class="rounded">
  					  <img src="https://images.unsplash.com/photo-1505784045224-1247b2b29cf3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ec2bdc92a9687b6af5089b335691830e&auto=format&fit=crop&w=750&q=80" class="rounded">  					</div>
      				<div class="col-md-3 mr-auto">
                      <img src="https://images.unsplash.com/photo-1504346466600-714572c4b726?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6754ded479383b7e3144de310fa88277&auto=format&fit=crop&w=750&q=80" class="rounded">
                      <img src="https://images.unsplash.com/photo-1494028698538-2cd52a400b17?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83bf0e71786922a80c420c17b664a1f5&auto=format&fit=crop&w=334&q=80" class="rounded">
      				</div>
      			</div>
  			</div>
            <div class="tab-pane text-center gallery" id="favorite">
      			<div class="row">
      				<div class="col-md-3 ml-auto">
      				  <img src="https://images.unsplash.com/photo-1504346466600-714572c4b726?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6754ded479383b7e3144de310fa88277&auto=format&fit=crop&w=750&q=80" class="rounded">
                      <img src="https://images.unsplash.com/photo-1494028698538-2cd52a400b17?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83bf0e71786922a80c420c17b664a1f5&auto=format&fit=crop&w=334&q=80" class="rounded">
      				</div>
      				<div class="col-md-3 mr-auto">
      				  <img src="https://images.unsplash.com/photo-1505784045224-1247b2b29cf3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ec2bdc92a9687b6af5089b335691830e&auto=format&fit=crop&w=750&q=80" class="rounded">  					
      				  <img src="https://images.unsplash.com/photo-1524498250077-390f9e378fc0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83079913579babb9d2c94a5941b2e69d&auto=format&fit=crop&w=751&q=80" class="rounded">
  					  <img src="https://images.unsplash.com/photo-1506667527953-22eca67dd919?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6326214b7ce18d74dde5e88db4a12dd5&auto=format&fit=crop&w=750&q=80" class="rounded">
      			    </div>
      			</div>
      		</div>
          </div>

        
            </div>
        </div>
	</div>
	
	
  


            <footer class="tm-bg-dark-blue">
                <div class="container">
                    <div class="row">
                        <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                        Copyright &copy; <span class="tm-current-year">2022</span> Nurul Hafizah</p>        
                    </div>
                </div>                
            </footer>
      

</body>
</html>