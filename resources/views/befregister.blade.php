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
        

<section id="home">

	<div class="container">
		<div class="row">
				<div class="home-thumb">
                <button onclick="history.back()" class="button-40" role="button">Go Back</button><br><br><br>
                <h3 class="wow fadeInUp" data-wow-delay="0.6s"><strong>Are you looking for a cat hotel or you are here for a business? Let's join us as a customer or provider &#128512;</strong></h3>
          			
          			@if (Route::has('login'))
                            
                            @auth
                            <x-app-layout>

                            </x-app-layout>
                            @else

                            <a href="{{url('/form')}}" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="0.8s">REGISTER AS PROVIDER</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}"   class="btn btn-lg btn-success smoothScroll wow fadeInUp" data-wow-delay="1.0s">REGISTER AS CUSTOMER</a>
                            @endif
                            @endauth
                        </div>
                    @endif      
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