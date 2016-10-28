@extends('layouts.pagelayout',['title' => 'pagetitle'])

@section('content')


<div id="about">
   	<div class="container">

   		<div class="row">

   			<div class="col-md-12">

   				

   				<br>
   				<br><br>
   				<br>

   				<h2>contact</h2>	
   				<br>
   				<h3>Need a website? Get in touch with me. </h3>		
   				<!-- <h3 class="text-center">A little bit about myself</h3> -->
   				<br>
   				<p class="firstparagraph text-center">
   					Im a independant, freelance web developer. My experience is primarily with back-end development. I do dive into the front-end of web design here and there using Adobe Photoshop and Illustrator.
   				</p>
   				
   				
				
   				

			


   			</div> <!-- end col 12 -->

   			
   		</div> <!-- end row -->

   		
   		@if (count($errors))
   			<div class="row">
   			
   				<div class="col-md-12">
   				
   					<div class="contacterrors center-block">

						@foreach ($errors->all() as $error)
							
							{{ $error }} <br>

						@endforeach

							<!-- {{ $errors->first('name') }} -->
					
   				</div>
   			
   			</div>
   		@endif	



   		</div><!--  end row -->


 	<div class="row">

   			<div class="col-md-8 col-md-offset-2"  >
			
   				<div class="centerform">

	   				<br>
					<form action="/contact" method="POST">

					<div class="block">
						<label for="name">Name:
						<input type="text" name="name" value="{{ old('name') }}"></label>
					</div>

					

					
					
					<div class="block">
						<label for="name">Email:
						<input type="text" name="email" value="{{ old('email') }}"></label>
					</div>

					

					<div class="block">
						<label for="message">Message:
						<textarea rows="4" cols="50" name="message">{{ old('message') }}</textarea></label>
						
					</div>

					

					<div class="block">
						<label for="question">Question: {{ $question }} =
						<input type="text" name="questioninput"></label>
					</div>	
					

					<div class="block">
						<label for="submit"></label>
						<input type="submit" name="submit" value="Send" class="btn btn-default">
					</div>

					<input type="hidden" name="question" value="{{ $question }}">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

				</form>

   				</div>		
   			</div><!--  end col -->

   			
   		</div>


 	</div> <!-- end container -->
 	





<!-- use App\Classes\MathQuestion;

$question = new MathQuestion();    	
$test->createQuestion(); -->








@endsection