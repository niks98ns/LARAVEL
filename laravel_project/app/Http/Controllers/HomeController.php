<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        //
        // dd('mhvh');
        $restaurants = Restaurant::all();
        // $restaurants = Restaurant::with(['Menu'])->get();
        // dd($restaurants);
        // return view('restaurants.index')->with('restaurants', $restaurants);
        return view('home')->with('restaurants', $restaurants);
    }
}
