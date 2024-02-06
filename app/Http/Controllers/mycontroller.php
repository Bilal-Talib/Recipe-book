<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Recipe;

class mycontroller extends Controller
{
    public function store(Request $req)
    {
       $user=new Recipe;
       $user->title=$req->title;
       $user->desp=$req->description;

       if($req->image)
       {
        $imageName=time();


       }

       else{
        $user->image="NULL";
       }
       $user->save();
       return redirect()->back();

    }


    public function index()
{
   $data=Recipe::all();
   return view('welcome',compact('data'));
    
}

 public function detail($id){

    $data=Recipe::find($id);
   //  echo $data;
    return view('detail',compact('data'));

 }


}


