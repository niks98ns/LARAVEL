@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                
                <table class="table table-striped">
                    {{-- <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Restaurant</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                        
                        </tr>
                    </thead> --}}
                    <tbody>
                          
                     @foreach ($restaurants as $restaurant)
                        <tr>
                            <td>
                                <h1><a href="{{ route('restaurants.show', $restaurant->id) }}" >
                                {{ $restaurant->name }}
                                </h1>
                            </td>    
                        </tr>
                        <tr>
                            <td>
                                <img class="rounded" src='{{asset('storage/'.$restaurant->restaurant_image)}}' height="200px" width="300px">
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
