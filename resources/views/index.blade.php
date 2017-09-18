@extends('layouts.master')

@section('content')

<div id="about">
   	<div class="container">

   		<div class="row">

	   			<div class="col-md-12">

	   				<h2>Web Development Made Simple</h2>
	   				<h3>What makes me unique with my apprach to web-design.</h3>
	   				<hr style="background-color: #e4eaf4; height: 1px; border: none;">	
					<br>
	   				<p>I'm currently an independent, freelance web developer. I've been creating sites on and off for over 15 years now. My experience is both with front-end and back-end web development. I also enjoy jumping into graphic design here and there using Adobe Photoshop and Illustrator which complement the web design creation process. </p>
   		
	   				
	   			</div> <!-- end col -->
 		

 		</div> <!-- end container -->

		<div class="row">

	   			<div class="col-md-3 pull-left" >

		   			<div class="icon_wrapper">

		   				<div class="image_icon">
		   					<img src="{{URL::to('images/code_icon.svg')}}" alt="">
		   				</div>
		   				<div class="icon_descrip">
		   					<h4>Coding</h4>
		   					<p>
		   						Using languagues and frameworks like <span style="font-weight: bold;">php</span>, <span style="font-weight: bold;">javascript</span>, <span style="font-weight: bold;">wordpress</span>, and <span style="font-weight: bold;">laravel</span> help me find the  suited tool for project.
		   					</p>
		   				</div>
					</div>
	   				


	   			</div>

	   			<div class="col-md-3">
	   				<div class="icon_wrapper">

		   				<div class="image_icon">
		   					<img src="{{URL::to('images/portrait_icon.svg')}}" alt="">
		   				</div>
		   				<div class="icon_descrip">
		   					<h4>Flexibility</h4>
		   					<p>
		   						All sites and projects I take on are progammed to be <span style="font-weight: bold;">responsive and flexible</span> with both desktop and mobile displays.
		   					</p>
		   				</div>
					</div>
	   			</div>

	   			<div class="col-md-3 icon_container">
	   				<div class="icon_wrapper">

		   				<div class="image_icon">
		   					<img src="{{URL::to('images/lightbulb_icon.svg')}}" alt="">
		   				</div>
		   				<div class="icon_descrip">
		   					<h4>Innovation</h4>
		   					<p>
		   						I like to explore new <span style="font-weight: bold;">innovatove ideas</span> when it comes to either design or web applications.
		   					</p>
		   				</div>
					</div>
	   			</div>

	   			<div class="col-md-3">
	   				<div class="icon_wrapper">

		   				<div class="image_icon">
		   					<img src="{{URL::to('images/graphic_icon.svg')}}" alt="">
		   				</div>
		   				<div class="icon_descrip">
		   					<h4>Graphic Design</h4>
		   					<p>
		   						I enjoy delving into areas of graphic design from time to time. Including logo design, and graphic manipulation in <span style="font-weight: bold;">Photoshop or Illustrator</span>.
		   					</p>
		   				</div>
					</div>
	   			</div>
	   	</div> <!-- end row -->


		<div class="row">

	   			<div class="col-md-12">

	   				<h2>My Biggest Assets</h2>
	   				<h3>What makes me unique with my apprach to web-design.</h3>
	   				<hr style="background-color: #e4eaf4; height: 1px; border: none;">	
					<br>
	   				<p>I would like to think my greatest assets in web development are my passion to learn new technologies, satisfaction from doing good work and stubbornness when troubleshooting any obstacles. I’ve had many of late night tackling stubborn problems head on.

					Did you need any work done? Contact me.  </p>
   		
	   				
	   			</div> <!-- end col -->
 		

 		</div> <!-- end container -->



 	</div>
</div>



 
 			

 	


@endsection