@extends('layouts.app')

@section('content')
<div class="container">
   
    <a href="{{route('foods.create')}}" class="btn btn-success">Create Food</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Food Name</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Food Type</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
         @foreach ($foods as $food)
         {{-- {{dd(asset('storage/'.$menu->image))}} --}}
            <tr>
                <td>{{ $food->id }}</td>
                <td>{{ $food->food_name }}</td>
                <td>{{ $food->price }}</td>
                <td>{{ $food->status }}</td>
                <td>{{ $food->food_type }}</td>
                <td>
                    {{-- {{dd($menu)}} --}}
                    <a href="{{ route('foods.edit', $food->id) }}" class="btn btn-primary">
                        Edit
                    </a>
    
                    <form class="form-horizontal pull-right" action="{{ URL::route('foods.destroy', [$food->id]) }}" method="POST" >
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
