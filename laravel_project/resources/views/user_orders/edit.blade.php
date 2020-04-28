@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Edit Food</h1>
        <hr>
        <form action="{{URL::route('user_orders.update', $user_order->id)}}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" id="restaurant_id" method="post">
            <input type="hidden" id="user_id" method="post">
            <input type="hidden" id="food_id" name="food_id" value="">

            {{ csrf_field() }}

            {{-- <div class="form-group">
                <label for="food_name">Food Name</label>
                <input type="text" value="{{$user_order->food_name}}" class="form-control" name="food_name">
                <select name="food_name" class="form-control">
                    @foreach($foods as $food)
                    <option value="{{$food->id}}" @if ($food->id == $user_order->food_id) {{"selected"}} @endif>{{$food->name}}</option>
                @endforeach
                    {{-- <option value="smosha" @if ($user_order->food_name == 0) selected @endif>Smosha</option>
                    <option value="ice_cream" @if ($user_order->food_name == 1) selected @endif>Ice Cream</option>
                    <option value="cold_drink" @if ($user_order->food_name == 2) selected @endif>Cold-Drink</option>
                    <option value="shakes" @if ($user_order->food_name == 3) selected @endif>Shakes</option>
                </select>
                <select name="food_name" class="form-control" id="food_type">
                    <option value="">----Select-----</option>
                    <option value="smosha">Smosha</option>
                    <option value="cold_drink">Cold-Drink</option> 
                    <option value="shakes">Shakes</option> 
                    <option value="ice_cream">Ice Cream</option>   
                </select> --}}
            {{-- </div>  --}}

            {{-- <div class="form-group">
                <label for="price">Price</label>
                <input type="text" value="{{$user_order->price}}" class="form-control" name="price" data-error="Price is Required." id="price" placeholder="Price" required /> --}}
                {{-- <select name="price" class="form-control" data-error="Price is Required." id="price" placeholder="price" required />
                    <option value="">----Select-----</option>
                    @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->price }}</option>
                    @endforeach  
                </select> --}}
                {{-- @foreach($menus as $menu)
                    <option value="{{$menu->id}}" @if ($menu->id == $user_order->menu_id) {{"selected"}} @endif>{{$menu->price}}</option>
                @endforeach  --}}
                {{-- <div class="text-danger help-block with-errors"></div>
            </div> --}}

            <div class="form-group">
                <label for="status">Status</label>
                {{-- <input type="text" value="{{$user_order->status}}" class="form-control" name="status"> --}}
                <select name="status" class="form-control" data-error="Status Is Required." id="status" required>
                    <option value="Available" @if ($user_order->status == 0) selected @endif>Available</option>
                    <option value="Un-Available" @if ($user_order->status == 1) selected @endif>Un-Available</option>
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="food_type">Food Type</label>
                <select name="food_type" class="form-control" data-error="Food Type Is Required." id="food_type" required>
                    <option value="Veg" @if ($user_order->status == 0) selected @endif>Veg</option>
                    <option value="Non-Veg" @if ($user_order->status == 1) selected @endif>Non-Veg</option>
                </select>
                <div class="text-danger help-block with-errors"></div>
            </div>

            {{-- <div class="form-group">
                <label for="image">Image</label>
                <input type="file" value="{{$user_order->image}}" class="form-control" name="image" data-error="Image Is Required." id="image" placeholder="Image" required>
                <img class="rounded" src='{{asset('storage/'.$user_order->image)}}' height="50px" width="100px">
                <div class="text-danger help-block with-errors"></div>
            </div> --}}

            {{-- <div class="form-group">
                <label for="name" class="col-md-4 control-label">Rastaurant Name</label>
                <input type="name" value="{{$user_order->restaurant->name}}" class="form-control" name="name" data-error="Rastaurant Name Is Required." id="namr" placeholder="Name" required>
                <div class="text-danger help-block with-errors"></div>
            </div> --}}
        
            <button type="submit" class="col-md-8 offset-md-2 btn btn-success">Submit</button>

        </form>
    </div>
</div>
@endsection