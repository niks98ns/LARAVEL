@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Create Foods</h1>
        <hr>
        <form action="{{route('foods.store')}}" method="post" enctype="multipart/form-data" data-toggle="validator" role="form">
            {{-- <input type="hidden" id="restaurant_id" method="post"> --}}
            <input type="hidden" id="restaurant_id" name="restaurant_id" value="">
            {{ csrf_field() }}


             
            <div class="form-group">
                <label for="food_name" class="col-md-4 control-label">Food Name:</label>
                <select name="food_name" class="form-control" data-error="Food Name Is Required." id="food_name" placeholder="Food Name" required />
                    <option value="">----Select-----</option>
                    <option value="Smosha">Smosha</option>
                    <option value="Cold Drink">Cold-Drink</option>
                    <option value="Momos">Momos</option>
                    <option value="Spring Roll">Spring Roll</option> 
                    <option value="Shakes">Shakes</option> 
                    <option value="Ice Cream">Ice Cream</option>
                    <option value="Pizza">Pizza</option> 
                </select>
                <div class="text-danger help-block with-errors"></div>  
                
            </div>

            <div class="form-group">
                <label for="price" class=" col-md-4 control-label">Price:</label>
                {{-- <input type="Number" class="form-control" name="price" data-error="Price Is Required." id="price" placeholder="Price" required> --}}
                <select name="price" class="form-control" data-error="Price is Required." id="price" placeholder="Price" required />
                    <option value="">----Select-----</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="70">70</option>
                    <option value="100">100</option> 
                    <option value="50">50</option> 
                    <option value="40">40</option>
                    <option value="250">250</option> 
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

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
                <label for="name" class="col-md-4 control-label">Restaurant Name</label>
                <select name="name" class="form-control" data-error="Restaurant Name Is Required." id="name" required>
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


