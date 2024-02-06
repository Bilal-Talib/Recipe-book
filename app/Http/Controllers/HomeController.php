<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return view('home');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //Admin functions
    public function adminHome()
    {
        return view('dashboard.index');
    }
    public function adminprofile()
    { 
        $user_data = Auth::user();
        return view('dashboard.pages.profile',compact('user_data'));
    }

    public function profiledata(Request $req)
    { 
        $user_id = Auth::user();
        $use_data=User::find($user_id->id) ;
        $use_data->name=$req->name;  
        // $use_data->password=Hash($req->nae); 
        $use_data->password=Hash::make($req->password);
        $use_data->update();
        return redirect('/adminprofile');    
    }




     //User Function
    public function normal()
    {
        return view('normal');
    }
}
