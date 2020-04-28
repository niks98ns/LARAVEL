{{-- @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    Please check the form below for errors
</div>
@endif --}}


@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif

        <form action="{{url('user_login')}}" method="post" enctype="multipart/form-data" data-toggle="validator" role="form">
          
            {{ csrf_field() }}

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

            {{-- <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Register</button> --}}
            <div class="form-group">
                <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Login</button>
                <p class="float-right mt-2"> Don't have an account?  <a href="{{ url('restaurant_users/registration')}}" class="text-success">Register</a></p>
            </div>
        </form>
    </div>
</div>
@endsection



