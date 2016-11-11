@extends ('layouts.pagelayout')

@section('content')



<div class="mywork">

	<div class="container">

		<div class="row">

			<div class="col-md-12">
				
				<br>
   				<br><br>
   				<br>

   				<h2>selected works</h2>	
   				<br>
   				<h3>Some samples of my work. </h3>	
   				<hr style="background-color: #741618; width: 30%; height: 1px; border: none;">		
   				<!-- <h3 class="text-center">A little bit about myself</h3> -->
   				<br>
   				<p class="firstparagraph text-center">
   					Here are two of the more recent and live projects  I have on the go at the moment.  Im defintely looking to increase this in the future. Both of these sites were designed with Wordpress however Webchef.ca itself was created using the Laravel framework and with more of an effort to adhere to object oriented coding structure versus procedural coding. 
   				</p>

   				<div class="thumbnail-container">
   					
   					<a href="{{ URL::to('portfolioliberated')}}" class="thumb-unit" style="background: url('/images/mywork/liberated.png') center center no-repeat;">
   						<div class="boxoverlay">
   							<strong>Liberated Living</strong>
   							<p>Designed with wordpress.</p>
   							<div class="iconplaceholder"></div>

   						</div>
					</a>

						<a href="{{URL::to('/portfoliograceful')}}" class="thumb-unit" style="background: url('/images/mywork/graceful.png') center center no-repeat;">
   						<div class="boxoverlay">
   							<strong>Graceful Angels</strong><p>Designed with wordpress.</p>
   							<div class="iconplaceholder"></div>

   						</div>
					</a>





   						

   				</div>



			</div>
			

		</div><!--  end row -->

	</div><!--  end container -->

</div> <!-- end mywork -->










@endsection