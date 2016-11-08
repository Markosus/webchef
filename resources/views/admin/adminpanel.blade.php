@extends('layouts.pagelayout')

@section('content')

<div id="container">

	<div class="row">
        <div class="col-md-6 col-md-offset-3">
        

         <div class="panel panel-default">
            <div class="panel-heading">Admin Panel</div>
                <div class="panel-body">
	
					<ul>
						<li>
							<a href="/viewaccounts">View Client Accounts</a>
						</li>
						<li>
							<a href="/register">Add Client</a>
						</li>
					</ul>
				</div>
			</div>
		</div>		<!-- end col -->
	</div>		<!-- end row -->
</div>	<!-- end container -->
	
	

@endsection
