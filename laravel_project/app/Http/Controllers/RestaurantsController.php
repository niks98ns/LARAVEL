<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Auth;
use App\Food;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
        // dd('mhvh');
        $restaurants = Restaurant::all();
        // $restaurants = Restaurant::with(['Food'])->get();
        // dd($restaurants);
        return view('restaurants.index')->with('restaurants', $restaurants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // dd('ff');
        return view('restaurants.create')->with('success','Item Created successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user_id = Auth::user()->id;
        // dd($request->all());
        $restaurants = new Restaurant;
        $restaurants->user_id = $user_id;
        $restaurants->name = $request->input('name');
        $restaurants->email = $request->input('email');
        $restaurants->password = $request->input('password');
        $restaurants->address = $request->input('address');
        $restaurants->restaurant_image = $request->file('restaurant_image')->store('restaurants','public');
        $restaurants->save();
        
        // dd($restaurants);
        return redirect('/restaurants')->with('success','Item Store successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($restaurant_id)
    {
        //
        $restaurant = Restaurant::find($restaurant_id);
        // dd($restaurant);
        return view('restaurants.show')->with('restaurant', $restaurant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // dd($id);
        $restaurant = Restaurant::find($id);
        // dd($menu);
        // return view('menus.edit');
        return view('restaurants.edit')->with('restaurant', $restaurant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $restaurants = Restaurant::find($id);
        $restaurants->name = $request->input('name');
        $restaurants->email = $request->input('email');
        $restaurants->password = $request->input('password');
        $restaurants->address = $request->input('address');
        $restaurants->restaurant_image = $request->file('restaurant_image')->store('restaurants','public');
        $restaurants->save();
        // dd($restaurants);
        return redirect('/restaurants')->with('success','Item Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $restaurants = Restaurant::find($id);
        $restaurants->delete();
        return redirect('/restaurants')->with('success','Item Deleted successfully!');
    }
}
