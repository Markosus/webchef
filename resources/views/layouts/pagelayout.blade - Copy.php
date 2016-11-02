<!DOCTYPE html>
<html>
	<head>
		<title>

						
		</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="{{ URL::to('srv/css/main.css')}}">

	</head>

	<style type="text/css">
			.headerTri {
	border-top-width: 50px;
	background: url(/images/{{ $headerimage }})  no-repeat center center;
	width: 100%;
	height: 185px;	

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

<BODY>

<div id="pagelayout">
	<div id='pagecontainer'>

		 <header>

		 <div class="headerTri">

		 	<div class="menudiv">
						
						@include('partials.nav')
			</div>
			<img class="logo" src="{{ URL::to('/images/logo5.svg')}}">
		 	
		 </div> <!-- end headerTri -->
    	
 		 </header>


			

		<div id="content">


				@yield('content')
				
		</div>
		
		@include('partials.footer')


	</div>
</div>

</BODY>

<!-- JavaScripts -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="{{ URL::to('srv/js/jquery.min.js') }}"></script> -->
    <script type='text/javascript' src="{{ URL::to('srv/js/bootstrap.js') }}"></script>

</html>
