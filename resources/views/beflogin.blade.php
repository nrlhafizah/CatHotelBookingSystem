<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meowie</title>
    <link rel="shortcut icon" type="cat/png" href="img/cat.png">

	<link rel="stylesheet" href="option/css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

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
                                    <a class="nav-link" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>
                                  </li>
                                 
                                </ul>
                            </div>                            
                        </nav>            
                    </div>
                </div>
            </div>

           
        </div>

<section id="home">
	<div class="container">
		<div >
				<div class="home-thumb">

                    <h3 class="wow fadeInUp" data-wow-delay="0.6s">Are you looking for a cat hotel? Let's join us as a <strong>customer</strong> or are you here for a business? Let's join us as a <strong>provider</strong> :)</h3>
          			
          	

                            <a href="{{ route('login') }}" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="0.8s">LOGIN AS PROVIDER</a>

                            <a href="{{ route('login') }}"   class="btn btn-lg btn-success smoothScroll wow fadeInUp" data-wow-delay="1.0s">LOGIN AS CUSTOMER</a>

                        </div>
  
                        </div>
			</div>
		</div>
	</div>		
</section>


<script src="option/js/jquery.js"></script>
<script src="option/js/bootstrap.min.js"></script>

<script src="option/js/vegas.min.js"></script>

<script src="option/js/wow.min.js"></script>
<script src="option/js/smoothscroll.js"></script>
<script src="option/js/custom.js"></script>

<script>
var center;

            
            

function setPageNav(){
    if($(window).width() > 991) {
        $('#tm-top-bar').singlePageNav({
            currentClass:'active',
            offset: 79
        });   
    }
    else {
        $('#tm-top-bar').singlePageNav({
            currentClass:'active',
            offset: 65
        });   
    }
}


$(document).ready(function(){

    $(window).on("scroll", function() {
        if($(window).scrollTop() > 100) {
            $(".tm-top-bar").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".tm-top-bar").removeClass("active");
        }
    });      

 
    // Slick carousel
    setCarousel();
    setPageNav();

    $(window).resize(function() {
      setCarousel();
      setPageNav();
    });

    // Close navbar after clicked
    $('.nav-link').click(function(){
        $('#mainNav').removeClass('show');
    });

                    
});

</script>
</body>
</html>