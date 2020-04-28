@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Create Restaurants</h1>
        <hr>
        <form action="{{route('restaurants.store')}}" method="post" enctype="multipart/form-data" data-toggle="validator" role="form">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Restaurant Name</label>
                <select name="name" class="form-control" data-error="Restaurant Name Is Required." id="name" placeholder="Restaurant Name" required />
                    <option value="">----Select-----</option>
                    <option value="Vaishno Dhaba">Vaishno Dhaba</option>
                    <option value="Bhena Da Dhaba">Bhena Da Dhaba</option> 
                    <option value="Captain Saim's">Captains Saim's</option> 
                    <option value="Punjabi Dhaba">Punjabi Dhaba</option>   
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email</label>
                <input type="email" class="form-control" name="email" data-error="Email Is Required." id="email" placeholder="Email" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Password</label>
                <input type="password" class="form-control" name="password" data-error="Password Is Required." id="password" placeholder="Password" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="address" class="col-md-4 control-label">Address</label>
                <input type="text" class="form-control" name="address" data-error="Address Is Required." id="address" placeholder="Address" required>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="restaurant_image" class="col-md-4 control-label">Restaurant Image</label>
                <input type="file" class="form-control" name="restaurant_image" data-error="Restaurant Image Is Required." id="restaurant_image" placeholder="Restaurant Image" required>
                <div class="text-danger help-block with-errors"></div>
            </div>
 

            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection