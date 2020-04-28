@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Add Food</h1>
        <hr>
        <form action="{{route('user_orders.store')}}" method="post" enctype="multipart/form-data" data-toggle="validator" role="form">
            <input type="hidden" id="restaurant_id">
            <input type="hidden" id="user_id">
            <input type="hidden" id="food_id" name="food_id" value="">

            {{ csrf_field() }}      
            
            <div class="form-group">
                <label for="food_name" class="col-md-4 control-label">Food Name</label>
                <select name="food_name" class="form-control" data-error="Food Name Is Required." id="food_name" placeholder="Food Name" required />
                    <option value="">----Select-----</option>
                    @foreach($foods as $food)
                    <option value="{{ $food->id }}">{{ $food->food_name }}</option>
                    @endforeach   
                </select>
                <div class="text-danger help-block with-errors"></div>                
            </div>

            {{-- <div class="form-group">
                <label for="price" class="col-md-4 control-label">Price</label>
                <input type="number" class="form-control" id="price" name="price">
                <select name="price" class="form-control" data-error="Price is Required." id="price" placeholder="price" required />
                    <option value="">----Select-----</option>
                    @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->price }}</option>
                    @endforeach   
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div> --}}

            <div class="form-group">
                <label for="status" class="col-md-4 control-label">Status</label>
                <select name="status" class="form-control" data-error="Status Is Required." id="status" required>
                    <option value="">----Select-----</option>
                    <option value="Available" >Available</option>
                    <option value="Un-Available">Un-Available</option>   
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="food_type" class="col-md-4 control-label">Food Type</label>
                <select name="food_type" class="form-control" data-error="Food Type Is Required." id="food_type" required>
                    <option value="">----Select-----</option>
                    <option value="Veg" >Veg</option>
                    <option value="Non-Veg">Non-Veg</option>   
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="name"> Restaurant Name</label>
                <select class="form-control" name="restaurant_id" data-error="Restaurant Name Is Required." id="name" required>
                    <option>Choose Restaurant</option> 
                    @foreach($restaurants as $restaurant)
                    <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                    @endforeach
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>          
             
            
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection