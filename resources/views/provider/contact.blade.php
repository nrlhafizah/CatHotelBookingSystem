<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Meowie</title>
    <link rel="shortcut icon" type="cat/png" href="img/cat.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="{{ asset ('profile/assets/css/styles.css')}}">
<style>
    

#container {
  border: solid 3px #474544;
  max-width: 768px;
  margin: 60px auto;
  position: relative;
  padding: 37.5px;
  margin: 50px 400px;
}

.email {
	float: right;
	width: 45%;
}

input[type='text'], [type='email'], select, textarea {
	background: none;
  border: none;
	border-bottom: solid 2px #474544;
	color: #474544;
	font-size: 1.000em;
  font-weight: 400;
  letter-spacing: 1px;
	margin: 0em 0 1.875em 0;
	padding: 0 0 0.875em 0;
  text-transform: uppercase;
	width: 100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	-o-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

input[type='text']:focus, [type='email']:focus, textarea:focus {
	outline: none;
	padding: 0 0 0.875em 0;
}

.message {
	float: none;
}

.name {
	float: left;
	width: 45%;
}




#form_button:hover {
  background: #474544;
  color: #F2F3EB;
}

  
  #form_button {
    padding: 15px 25px;
  }
}


  
  input[type='text'], [type='email'], select, textarea {
    font-size: 0.875em;
  }
}
    </style>

</head>
<body class="home">

<header id="header">
<div id="head" class="parallax" parallax-speed="2">
<h1 id="logo" class="text-center">
			<img class="img-circle" src="{{ asset ('profile/assets/images/smirk.jpg')}}" alt="">
			<span class="title">{{$data->hotelName}}</span>
			<span class="tagline">{{$data->email}}<br><br>
				<a href=""><b>{{$data->address}}<b></a></span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="{{ url('show/'.$data->id) }}">Profile</a></li>
					    <li><a href="">Contact</a></li>
                    <li><a href="{{url('/redirect')}}">Go Back</a></li>
                    
						
				
				</ul>
			
			</div><!--/.nav-collapse -->		
		</div>	
	</nav>
</header>


    <div>
    <div id="container">
  

  <form action="#" method="post" id="contact_form">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="My name is" name="name" id="name_input" required>
    </div>
    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="My e-mail is" name="email" id="email_input" required>
    </div>
    <div class="telephone">
      <label for="name"></label>
      <input type="text" placeholder="My number is" name="telephone" id="telephone_input" required>
    </div>
    <div class="subject">
      <label for="subject"></label>
      <select placeholder="Subject line" name="subject" id="subject_input" required>
        <option disabled hidden selected>Subject line</option>
        <option>I'd like to start a project</option>
        <option>I'd like to ask a question</option>
        <option>I'd like to make a proposal</option>
      </select>
    </div>
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="5" required></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="Send Message" id="form_button" />
    </div>
    
  </form><!-- // End form -->
</div><!-- // End #container -->
    </div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="{{ asset ('profile/assets/js/template.js')}}"></script>

</body>
</html>