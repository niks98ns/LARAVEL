@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <form action="{{url('restaurant_users.login')}}" method="post"  data-toggle="validator" role="form">
          
            {{ csrf_field() }}

            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif

            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Name:</label>
                <input type="name" class="form-control" name="name" data-error="Name Is Required." id="name" placeholder="Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email:</label>
                <input type="email" class="form-control" name="email" data-error="Email Is Required." id="email" placeholder="Email" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Password:</label>
                <input type="password" class="form-control" name="password" data-error="Password Is Required." id="password" placeholder="Password" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="confirm_password" class="col-md-4 control-label">Confirm Paassword:</label>
                <input type="confirm_password" class="form-control" name="confirm_password" data-error="Confirm Paassword Is Required." id="confirm_password" placeholder="Confirm Paassword" required>
                <div class="text-danger help-block with-errors"></div>
            </div>
 

            {{-- <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button> --}}


            <div class="form-group">
                <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Register</button>
                <p class="float-right mt-2"> Already have an account?  
                    <a href="{{ url('login_1')}}" class="text-success">Login</a>
                </p>
                
            </div>
        </form>
    </div>
</div>
@endsection


