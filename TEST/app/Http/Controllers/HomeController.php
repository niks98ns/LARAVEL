<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // dd('index');
        return view('home');
    }

    public function admin()
    {
        // dd('admin');
        return view('admin');
    }

    public function student()
    {
        dd('student');
        return view('student');
    }
    
}
