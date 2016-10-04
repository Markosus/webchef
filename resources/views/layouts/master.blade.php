<!DOCTYPE html>

<html>
	<head>
		<title>
		
		</title>	

		

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="{{ URL::to('srv/css/main.css')}}">


    

	</head>

	<body>

		<div id="pagecontainer">

			<header>
				
				<div id="heroimagediv">
				<img class="logo" src="{{ URL::to('/images/logo5.svg')}}">
					<div class="herotext">
						<h1>
	   					 web development, hosting, and projects
	   					</h1>
	   					<h3>
	   					My moto goes right here.
	   					</h3>
					</div>

					<div class="menudiv">
						
						@include('partials.nav')
					</div>


				</div>

				

				

			</header>


			

			<br>
		<div id="content">
			@yield('content')
		</div>


			@include('partials.footer')

		</div> <!-- end page container -->
		


	




	</body>

	<!-- JavaScripts -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="{{ URL::to('srv/js/jquery.min.js') }}"></script> -->
    <script type='text/javascript' src="{{ URL::to('srv/js/bootstrap.js') }}"></script>
    

</html>


