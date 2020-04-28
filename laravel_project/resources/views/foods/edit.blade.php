@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Edit Food</h1>
        <hr>
        <form action="{{URL::route('foods.update', $food->id)}}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" id="restaurant_id" name="restaurant_id" value="">


            {{ csrf_field() }}

            <div class="form-group">
                <label for="food_name">Food Name</label>
                {{-- <input type="text" value="{{$menu->food_name}}" class="form-control" name="food_name"> --}}
                <select name="food_name" class="form-control" data-error="Food Name Is Required." id="food_name" placeholder="Food Name" required />
                    <option value="smosha" @if ($food->food_name == 0) selected @endif>Smosha</option>
                    <option value="ice_cream" @if ($food->food_name == 1) selected @endif>Ice Cream</option>
                    <option value="cold_drink" @if ($food->food_name == 2) selected @endif>Cold-Drink</option>
                    <option value="shakes" @if ($food->food_name == 3) selected @endif>Shakes</option>
                </select>
                <div class="text-danger help-block with-errors"></div>
                {{-- <select name="food_name" class="form-control" id="food_type">
                    <option value="">----Select-----</option>
                    <option value="smosha">Smosha</option>
                    <option value="cold_drink">Cold-Drink</option> 
                    <option value="shakes">Shakes</option> 
                    <option value="ice_cream">Ice Cream</option>   
                </select> --}}
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" value="{{$food->price}}" class="form-control" name="price" data-error="Price is Required." id="price" placeholder="Price" required />
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                {{-- <input type="text" value="{{$menu->status}}" class="form-control" name="status"> --}}
                <select name="status" class="form-control" data-error="Status Is Required." id="status" required>
                    <option value="Available" @if ($food->status == 0) selected @endif>Available</option>
                    <option value="Un-Available" @if ($food->status == 1) selected @endif>Un-Available</option>
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="food_type">Food Type</label>
                <select name="food_type" class="form-control" data-error="Food Type Is Required." id="food_type" required>
                    <option value="Veg" @if ($food->status == 0) selected @endif>Veg</option>
                    <option value="Non-Veg" @if ($food->status == 1) selected @endif>Non-Veg</option>
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>
           
            
            
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>

        </form>
    </div>
</div>
@endsection