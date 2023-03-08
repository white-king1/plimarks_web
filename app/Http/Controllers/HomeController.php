<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.admin_dashboard');
    }

    public function redirect()
    {
       if (Auth::user()->usertype == 'admin') {
           return redirect()->route('admin');
       } else {
           return redirect()->route('user.dashboard');
       }

    }
}
