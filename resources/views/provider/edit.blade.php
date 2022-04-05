<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
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

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="{{ asset ('profile/assets/images/smirk.jpg')}}" alt="">
			<span class="title">{{Auth::user()->hotelName}} </span>
			<span class="tagline">{{Auth::user()->email}} <br><br>
				<a href=""><b>{{Auth::user()->address}} <b></a></span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li><a href="{{url('/redirect')}}">Home</a></li>
					<li><a href="{{url('/listDown')}}">List</a></li>
                    <li><a href="{{url('/custRequest')}}">Request</a></li>

                    <li class="dropdown ">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" >Account <b class="caret"></b></a>
						<ul class="dropdown-menu">
						<li><a href={{"showProfile/".Auth::user()->id}}>Edit Profile</a></li>
							<li><a href="{{url('/change')}}">Change Password</a></li>
							<li><a href="{{url('/delete')}}">Delete Account</a></li>
						</ul>
					</li>

                    <li>
                                  @auth
                                    
                                    <a href="{{ route('logout') }}"  onclick = "event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     
                                    <form method="POST" action="{{ route('logout')}}">
                                    @csrf
                                    
                                    <a href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">LOG OUT</a>
  
                                    </form>
                                    </a>
                                    
                                 @endauth
                                 </li>
                               
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

		<br><br>
			<div wire:id="t47bknrawTal0dEy6sMB" class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Update Profile Information</h3>

        <p class="mt-1 text-sm text-gray-600">
            Update your account's profile information.
        </p>
    </div>

    <div class="px-4 sm:px-0">
        
    </div>
</div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="/editprof" method="post" enctype="multipart/form-data">
            @csrf
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                <div class="grid grid-cols-6 gap-6">

				
    <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700">
    		Main Description
			</label>
        	<input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" value="{{$data->description ?? ''}}" name="desc" id="desc" type="text" >
    	</div>
		<!-- <div class="col-span-6 sm:col-span-4">
		<label class="block font-medium text-sm text-gray-700">
    		Services
			</label>
		<select id="ddselect" onchange="ddlselect();">
			<option>Grooming</option>
			<option>Vaccination</option>
			<option>Walking</option>
			<option>Petting</option>
			<option>Boarding</option>
			</select>
			
		<input type="text"  id="test"/><br><br>
</div> -->

        <!-- S1 -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700">
    		Service 1
			</label>
            <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" value="{{$data->service1 ?? ''}}"  name="s1" id="s1" type="text">
        </div>

		<div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700">
    		Description
			</label>
        	<input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" value="{{$data->desc1 ?? ''}}" name="ds1" id="ds1" type="text">
    	</div>


        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700">
    		Service 2
			</label>
            <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" value="{{$data->service2 ?? ''}}" name= "s2" id="s2" type="text">
        </div>

		<div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700">
    		Description
			</label>
        	<input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" value="{{$data->desc2 ?? ''}}" name="ds2" id="ds2" type="text">
    	</div>

        <!-- S3 -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700">
    		Service 3
			</label>
            <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" value="{{$data->service3 ?? ''}}" name="s3" id="s3" type="text" >
        </div>

		<div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700">
    		Description
			</label>
        	<input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" value="{{$data->desc3 ?? ''}}"name="ds3" id="ds3" type="text">
    	</div>

        <!-- S4 -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700">
    		Service 4
			</label>
            <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" value="{{$data->service4 ?? ''}}" name="s4" id="s4" type="text">
        </div>
 
		<div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700">
    		Description
			</label>
            <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" value="{{$data->desc4 ?? ''}}"name="ds4" id="ds4" type="text">
        </div>

		<!-- IMG -->
		<div class="col-span-6 sm:col-span-4">
		<div class="image">
			<label class="block font-medium text-sm text-gray-700">
    		Image 1
			</label>
      		<input type="file" class="form-control"  name="image1">{{$data->image1}}
    	</div>
        </div>

		<div class="col-span-6 sm:col-span-4">
		<div class="image">
			<label class="block font-medium text-sm text-gray-700">
    		Image 2
			</label>
      		<input type="file" class="form-control" name="image2">{{$data->image2}}
    	</div>
        </div>

		<div class="col-span-6 sm:col-span-4">
		<div class="image">
			<label class="block font-medium text-sm text-gray-700">
    		Image 3
			</label>
      		<input type="file" class="form-control" name="image3">{{$data->image3}}
    	</div>
        </div>

		<div class="col-span-6 sm:col-span-4">
		<div class="image">
			<label class="block font-medium text-sm text-gray-700">
    		Image 4
			</label>
      		<input type="file" class="form-control" name="image4">{{$data->image4}}
    	</div>
        </div>

		<div class="col-span-6 sm:col-span-4">
		<div class="image">
			<label class="block font-medium text-sm text-gray-700">
    		Image 5
			</label>
      		<input type="file" class="form-control"  name="image5">{{$data->image5}}
    	</div>
        </div>

		<div class="col-span-6 sm:col-span-4">
		<div class="image">
			<label class="block font-medium text-sm text-gray-700">
    		Image 6
			</label>
      		<input type="file" class="form-control"  name="image6">{{$data->image6}}
    	</div>
        </div>
    </div>

    <div  class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('mkdb3GHd6KMtAPysa2Jl').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 mr-3">
    Saved.
</div>

<input type="hidden" value="{{Auth::user()->id}}" name="catid">

<button  name="id" type="submit" value="{{Auth::user()->id}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" >
    Save
</button>

</form>
</div>



                </div>
</div>

		

</x-app-layout>

<script>
	function ddlselect(){
		var d=document.getElementById("ddselect");
		var displaytext=d.options[d.selectedIndex].text;
		document.getElementById("test").value=displaytext;
	}
	</script>
	

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="{{ asset ('profile/assets/js/template.js')}}"></script>

</body>
</html>