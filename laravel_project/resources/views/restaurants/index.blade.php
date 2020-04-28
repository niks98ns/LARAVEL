@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Restaurants</h2>    
    <a href="{{route('restaurants.create')}}" class="btn btn-success">Create Restaurants</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Restaurant</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Restaurant Image</th>
            {{-- <th scope="col">Food Name</th> --}}
            <th scope="col">Action</th>
            
            </tr>
        </thead>
        <tbody>
              
         @foreach ($restaurants as $restaurant)
            <tr>
                <td>{{ $restaurant->id }}</td>
                <td><a href="{{ route('restaurants.show', $restaurant->id) }}" >
                    {{ $restaurant->name }}
                </td>
                <td>{{ $restaurant->email }}</td>
                <td>{{ $restaurant->address }}</td>
                <td><img class="rounded" src='{{asset('storage/'.$restaurant->restaurant_image)}}' height="50px" width="100px"></td>
                {{-- <td>
                    @foreach ($restaurant->food as $food)
                        {{ $food->food_name }}
                    @endforeach 
                </td> --}}
                <td>
                    {{-- {{dd($menu)}} --}}
                    <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="btn btn-primary">
                        Edit
                    </a>                       
    
                    <form class="form-horizontal pull-right" action="{{ URL::route('restaurants.destroy', [$restaurant->id]) }}" method="POST" >
                            {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" class="btn btn-danger" name="button" onclick="return confirm('Are you sure to delete this record?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
