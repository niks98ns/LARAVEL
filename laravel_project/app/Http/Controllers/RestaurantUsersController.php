<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\RestaurantUser;
use Session;
class RestaurantUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index()
    // {
    //     //
    //     dd('index');
    //     $restaurantUsers = RestaurantUser::all();
    //     return view('restaurant_users.registration')->with('restaurant_users', $restaurantUsers);
        
    // }

    // -------------------- [ user registration view ] -------------
    public function registration()
    {
        //
        // dd('registration');
        $restaurantUsers = RestaurantUser::all();
        return view('restaurant_users.registration')->with('restaurant_users', $restaurantUsers);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    //     // dd('ff');
    //     return view('restaurant_users.create')->with('success','Item Created successfully!');

    // }

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
        $restaurantUsers = new RestaurantUser;
        $restaurantUsers->name = $request->input('name');
        $restaurantUsers->email = $request->input('email');
        $restaurantUsers->password = bcrypt($request->password);
        // $data->password = bcrypt($request->password);
        $restaurantUsers->save();
        
        // dd($restaurants);
        if(!is_null($restaurantUsers)) {
            return redirect('/restaurant_users')->with('success', 'You have registered successfully.');
        }

        // else return with error message
        else {
            return redirect('/restaurant_users')->with('error', 'Whoops! some error encountered. Please try again.');
        }
        // return redirect('/restaurant_users')->with('success','Item Store successfully!');
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
    // public function edit($id)
    // {
    //     //
    //     // dd($id);
    //     $restaurantUser = RestaurantUser::find($id);
    //     return view('restaurant_users.edit')->with('restaurant_user', $restaurantUser);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    //     // dd($request->all());
    //     $restaurantUsers = RestaurantUser::find($id);
    //     $restaurantUsers->name = $request->input('name');
    //     $restaurantUsers->email = $request->input('email');
    //     $restaurantUsers->password = $request->input('password');
    //     $restaurantUsers->save();
    //     return redirect('/restaurant_users')->with('success','Item Updated successfully!');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    //     $restaurantUsers = RestaurantUser::find($id);
    //     $restaurantUsers->delete();
    //     return redirect('/restaurant_users')->with('success','Item Deleted Successfully!');
    // }


    

    

    // -------------------- [ User login view ] -----------------------
    public function loginform()
    {
        //
        // dd('login');
        return view('user_login');
        
    }
    


    // --------------------- [ User login ] ---------------------
    public function userPostLogin(Request $request){

        $email = $request->email;
        $password = $request->password;
        $data = RestaurantUser::where('email',$email)->first();
        // dd($data);
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                // Session::put('email',$data->email);
                // $new = Session::get('email');
                // echo $new;die;
                Session::put('user_login',TRUE);
                return redirect('restaurants/create');
            }
            else{
                return view('user_login');alert('Password not matched !');
            }
        }
        else{
            return view('user_login');alert('This email id  is not existed');
        }
    }

    // ------------------ [ User Dashboard Section ] ---------------------
    public function dashboard() {

        // check if user logged in
        if(Auth::check()) {
            return view('dashboard');
        }

        return redirect::to("user_login")->withSuccess('Oopps! You do not have access');
    }

    // ------------------- [ User logout function ] ----------------------
    public function logout(Request $request )
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('user_login');
    }

    


}
