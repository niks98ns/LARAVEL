@extends('layouts.app')

@section('content')
<div class="container">
   
    <a href="{{route('user_orders.create')}}" class="btn btn-success">Food</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Food Name</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Food Type</th>
            {{-- <th scope="col">Image</th> --}}
            {{-- <th scope="col">Action</th> --}}
            </tr>
        </thead>
        <tbody>
         @foreach ($user_orders as $user_order)
         {{-- {{dd(asset('storage/'.$food->image))}} --}}
            <tr>
                <td>{{ $user_order->id }}</td>
                <td>{{ $user_order->user->name }}</td>
                <td>{{ $user_order->food->food_name }}</td>
                <td>{{ $user_order->food->price }}</td>
                <td>{{ $user_order->status }}</td>
                <td>{{ $user_order->food_type }}</td>
                {{-- <td><img class="rounded" src='{{asset('storage/'.$user_order->image)}}' height="50px" width="100px"></td>
                <td> --}}
                    {{-- {{dd($food)}} --}}
                    {{-- <a href="{{ route('user_orders.edit', $user_order->id) }}" class="btn btn-primary">
                        Edit
                    </a> --}}
    
                    {{-- <form class="form-horizontal pull-right" action="{{ URL::route('user_orders.destroy', [$user_order->id]) }}" method="POST" >
                            {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" class="btn btn-danger" name="button" onclick="return confirm('Are you sure to delete this record?')">
                            Delete
                        </button>
                    
                    </form> --}}
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      
</div>
@endsection
