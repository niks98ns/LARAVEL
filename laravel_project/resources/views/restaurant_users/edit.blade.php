{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Edit Restaurant</h1>
        <hr> 
        <form action="{{ URL::route('restaurant_users.update', $restaurant_user->id) }}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email</label>
                <input type="email" value="{{$restaurant_user->email}}" class="form-control" name="email" data-error="Email Is Required." id="email" placeholder="Email" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Password</label>
                <input type="password" value="{{$restaurant_user->password}}" class="form-control" name="password" data-error="Password Is Required." id="password" placeholder="Password" required>
                <div class="text-danger help-block with-errors"></div>
            </div>
            
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>

        </form>
    </div>
</div>
@endsection --}}