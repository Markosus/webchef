<!DOCTYPE html>

<html>
	<head>
		<title>
		
		</title>	

		

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="{{ URL::to('srv/css/main.css')}}">

	<script>
var looper;
var degrees = 0;
function rotateAnimation(el,speed){
	var elem = document.getElementById(el);
	if(navigator.userAgent.match("Chrome")){
		elem.style.WebkitTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("Firefox")){
		elem.style.MozTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("MSIE")){
		elem.style.msTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("Opera")){
		elem.style.OTransform = "rotate("+degrees+"deg)";
	} else {
		elem.style.transform = "rotate("+degrees+"deg)";
	}
	looper = setTimeout('rotateAnimation(\''+el+'\','+speed+')',speed);
	degrees++;
	if(degrees > 359){
		degrees = 1;
	}
	document.getElementById("status").innerHTML = "rotate("+degrees+"deg)";
}
</script>	
		
    

	</head>

	<body>

		<div id="pagecontainer">

			<header>
				
				<div id="topbuffer">			
				</div>

				<div id="gear">

					<img id="img1" src="{{ URL::to('/images/gear2.png')}}">
					<script>rotateAnimation("img1",75);</script>


				</div>

				<div id="logo">
					
					<img src="{{ URL::to('/images/logo2.svg')}}" width="350px">
				</div>

			</header>


			@include('partials.nav')


			@yield('content')



		</div> <!-- end page container -->
		


	




	</body>

	<!-- JavaScripts -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="{{ URL::to('srv/js/jquery.min.js') }}"></script> -->
    <script type='text/javascript' src="{{ URL::to('srv/js/bootstrap.js') }}"></script>
    

</html>


