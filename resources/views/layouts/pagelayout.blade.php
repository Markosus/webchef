<!DOCTYPE html>

<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
		
		</title>	

		

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" >

		<link rel="stylesheet" type="text/css" href="{{ URL::to('srv/css/main.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('srv/css/sweetalert.css')}}">


    

	</head>

<style type="text/css">
 #pageimagediv { 
  	background: url(/images/{{ $headerimage }})  no-repeat center center;
	width: 100%;
	height: 500px;
	margin-bottom: 50px;
	

	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

    position:relative;
  	

    display: flex;
  	align-items: center;
  	justify-content: center;



 }

</style>

	<body>

		<div id="pagecontainer">

			<header>

				<div class="headerLine"></div>
				<div id="pageimagediv">
				<img class="logo" src="{{ URL::to('/images/logo5.svg')}}">
					<div class="herotext">

						<!-- <h3>
	   					Thanks for dropping by WebChef.ca
	   					</h3>
	   					<hr style="background-color: #ffffff; width: 50%; height: 2px; border: none;">	
	   					<br> -->

						<h1 style="margin-top:100px;">
	   					{{ $headertext }}
	   					</h1>
	   				
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

    <script type="text/javascript" src="{{ URL::to('srv/js/sweetalert.min.js') }}"></script>

     <script type="text/javascript">
    	
    	@if (notify()->ready())
	    	swal({

	    		title: "{!! notify()->message() !!}",	
	    		type: "{{ notify()->type() }}"

	    	});
	    @endif

    </script>
    

</html>