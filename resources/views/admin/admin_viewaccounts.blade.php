@extends('layouts.pagelayout')

@section('content')

<div id="container">

	<div class="row">
        <div class="col-md-6 col-md-offset-3">
        

         <div class="panel panel-default">
            <div class="panel-heading">View/Edit Clients <br><br><a href="{{URL::to('admin')}}">Admin Panel</a></div>
                <div class="panel-body">

                	<ul>
	
					@foreach ($clients as $client)

						<li><a href="/users/{{ $client->id }}">{{ $client->name }}</a>
						  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						<br></li>

					@endforeach

					</ul>

				</div>
			</div>
		</div>		<!-- end col -->
	</div>		<!-- end row -->
</div>	<!-- end container -->
	
	

@endsection