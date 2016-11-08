@extends('layouts.pagelayout')

@section('content')
<div class="container">

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
                </div>
               @endif   
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <br><br><br>

            <div class="panel panel-default">
                <div class="panel-heading">Create Client Account<br><br><a href="{{URL::to('admin')}}">Admin Panel</a></div>
                <div class="panel-body">

                

                        <br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">

                    <div class="block">
                        <label for="name">Name*:
                        <input type="text" name="name" value="{{ old('name') }}"></label>
                    </div>

                    

                    
                    
                    <div class="block">
                        <label for="name">Email*:
                        <input name="email" type="email" value="{{ old('email') }}"></label>
                    </div>

                    <div class="block">
                        <label for="website">Website*:
                        <input name="website" type="text" value="{{ old('website') }}"></label>
                    </div>

                     <div class="block">
                        <label for="telephone">Telephone:
                        <input name="telephone" type="text" value="{{ old('telephone') }}"></label>
                    </div>

                    <div class="block">
                        <label for="location">Location:
                        <input name="location" type="text" value="{{ old('location') }}"></label>
                    </div>
                    

                    <div class="block">
                        <label for="password">Password*:
                        <input name="password" type="password" id="password" value=""></label>
                    </div>

                     <div class="block">
                        <label for="password_confirmation">Confirm Password*:
                        <input  name="password_confirmation" type="password" id="password-confirm" value=""></label>
                    </div>

                                    

                    <div class="block">
                        <label for="submit"></label>
                        <input type="submit" name="submit" value="Create" class="btn btn-default">
                    </div>

                  
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                </form>   

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
