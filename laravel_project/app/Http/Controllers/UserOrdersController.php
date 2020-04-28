<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserOrder;
use App\Restaurant;
use Auth;
use App\Food;
use App\User;

class UserOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('mhvh');
        $userOrders = UserOrder::all();
        // $userOrders = UserOrder::with(['User'])->get();
        return view('user_orders.index')->with('user_orders', $userOrders);
        
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
        $foods = Food::all();
        return view('user_orders.create')
        ->with('restaurants', $restaurants)
        ->with('foods', $foods)
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
        $user_id = Auth::user()->id;
        $userOrders = new UserOrder;

        $userOrders->user_id = $user_id;
        $restaurants = Restaurant::find($request->get('restaurant_id'));
        // $restaurants = Restaurant::find($request->get('restaurant_id'));

        // $userOrders->food_name = $request->input('food_name');
        // $userOrders->price = $request->input('price');
        $userOrders->status = $request->input('status');
        $userOrders->food_type = $request->input('food_type');
        // $userOrders->image = $request->file('image')->store('userOrders','public');

        $userOrders->food_id = $request->input('food_id');
        $restaurants->userOrders()->save($userOrders);
        
        // dd($userOrderss);
        return redirect('/user_orders')->with('success','Item Store Successfully!');
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
        $userOrder = UserOrder::find($id);
        // dd($userOrders);
        return view('user_orders.edit')->with('user_order', $userOrder);
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
        $userOrders = UserOrder::find($id);
        // $userOrders->food_name = $request->input('food_name');
        // $userOrders->price = $request->input('price');
        $userOrders->status = $request->input('status');
        $userOrders->food_type = $request->input('food_type');
        // $userOrders->image = $request->file('image')->store('userOrders','public');
        $userOrders->food_id = $request->input('food_id');
        $userOrders->save();
        // dd($userOrderss);
        return redirect('/user_orders')->with('success','Item Updated successfully!');
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
        $userOrders = UserOrder::find($id);
        $userOrders->delete();
        return redirect('/user_orders')->with('success','Item Deleted Successfully!');
    }
}
