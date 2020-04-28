@extends('layouts.app')

@section('content')
<div class="container">
   
    <a href="{{route('restaurant_users.create')}}" class="btn btn-success">Login</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
         @foreach ($restaurant_users as $restaurant_user)
            <tr>
                <td>{{ $restaurant_user->id }}</td>
                <td>{{ $restaurant_user->name }}</td>
                <td>{{ $restaurant_user->email }}</td>
                <td>{{ $restaurant_user->password }}</td>
                <td>
                    <a href="{{ route('restaurant_users.edit', $restaurant_user->id) }}" class="btn btn-primary">
                        Edit
                    </a>
    
                    <form class="form-horizontal pull-right" action="{{ URL::route('restaurant_users.destroy', [$restaurant_user->id]) }}" method="POST" >
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
