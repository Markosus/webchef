

@include('partials.nav')

@if (count($errors))
	@foreach ($errors->all() as $error)
		{{ $error }}
	@endforeach
@endif


<!-- use App\Classes\MathQuestion;

$question = new MathQuestion();    	
$test->createQuestion(); -->




<form action="/contact" method="POST">
	
	<label for="name">Name:</label>
	<input type="text" name="name">

	<br><br>

	<label for="name">Email:</label>
	<input type="text" name="email">

	<br><br>

	<label for="message">Message:</label>
	<textarea rows="4" cols="50" name="message">
	</textarea>

	<br><br>
	<label for="question">Question: {{ $question }} =</label>
	<input type="text" name="questioninput">

	<br><br>
	<input type="submit" name="submit" value="Send">

	<input type="hidden" name="question" value="{{ $question }}">
	<input type="hidden" name="_token" value="{{csrf_token()}}">

</form>

