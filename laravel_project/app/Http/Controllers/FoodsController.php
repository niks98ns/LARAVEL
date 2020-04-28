<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Restaurant;

class FoodsController extends Controller
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
        // $menus = Menu::all();
        $foods = Food::with(['Restaurant'])->get();
        return view('foods.index')->with('foods', $foods);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $restaurants = Restaurant::all();
        return view('foods.create')
        ->with('restaurants', $restaurants)
        ->with('success','Item created successfully!');

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
        // dd($request->all());
        $food = new Food;
        // $restaurants = Restaurant::find($request->get('restaurant_id'));
        $food->food_name = $request->input('food_name');
        $food->price = $request->input('price');
        $food->status = $request->input('status');
        $food->food_type = $request->input('food_type');
        $food->restaurant_id = $request->input('restaurant_id');
        $food->save();
        
        // dd($foods);
        return redirect('/foods')->with('success','Item Store Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $food = Food::find($id);
        // dd($menu);
        return view('foods.edit')->with('food', $food);
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
        // dd($request->all());
        $food = Food::find($id);
        $food->food_name = $request->input('food_name');
        $food->price = $request->input('price');
        $food->status = $request->input('status');
        $food->food_type = $request->input('food_type');
        $food->restaurant_id = $request->input('restaurant_id');
        $food->save();
        // dd($menus);
        return redirect('/foods')->with('success','Item Updated successfully!');
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
        $foods = Food::find($id);
        $foods->delete();
        return redirect('/foods')->with('success','Item Deleted Successfully!');
    }
}
