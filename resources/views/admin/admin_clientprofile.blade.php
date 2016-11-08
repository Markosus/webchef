@extends('layouts.pagelayout')

@section('content')

<div id="container">

	<div class="row">
        <div class="col-md-6 col-md-offset-3">
        

         <div class="panel panel-default">
            <div class="panel-heading">{{ $userprofile->name }}'s Profile Details <br><br><a href="{{URL::to('admin')}}">Admin Panel</a></div>
                <div class="panel-body">

             <table >
				<tr>
					<td>Website:</td>
					<td>{{ $userprofile->website_url }}</td>
				</tr>
				<tr>
					<td>Email:</td>
					<td>{{ $userprofile->email }}</td>
				</tr>
				<tr>
					<td>Phone Number:</td>
					<td>{{ $userprofile->telephone }}</td>
				</tr>
				<tr>
					<td>Location:</td>
					<td>{{ $userprofile->location }}</td>
				</tr>
				<tr>
					<td>Cost Breakdown:</td>
				</tr>

				<tr>
					<td>Website Creation:</td>
					<td>$500.00</td>
				</tr>
				<tr>
					<td>Hosting (Semi Annually):</td>
					<td>$50.00</td>
				</tr>
			</table>

				</div>
			</div>
		</div>		<!-- end col -->
	</div>		<!-- end row -->
</div>	<!-- end container -->

@endsection
