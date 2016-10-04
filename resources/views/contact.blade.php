@include('partials.nav')

<form>
	
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
	<label for="question">Question: 5 + 4 =</label>
	<input type="text" name="email">

	<br><br>
	<input type="submit" name="submit" value="Send">

	<input type="hidden" name="_token" value="{{csrf_token()}}">

</form>

