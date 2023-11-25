<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class SignupController extends Controller
{
    function signup(){
        return view("dashbord.sign-up");

       
    }

    function handle_signup(Request $request){


        $request->validate([
            'FullName' => 'required',
            'Image' => 'required',
            'Email' => 'required',
            'password' => 'required',
            'mobile' => 'required',
            'location' => 'required',
           ]);

        $imgHolder = "";
        $data = $request->all();

        if($request->hasFile('Image')){
            $image = $request->file('Image');
            // reneme

             $name = time() . "_profile_"   . "." . $image->getClientOriginalExtension();
             $destintion = public_path("/uploads");
            // move
            $image->move( $destintion , $name);
           $imgHolder = "uploads/{$name}";
           $data['Image']=$imgHolder;

        }else{
            $data['Image']="default.png";
        }
 
       
          
       $data['password'] = Hash::make($data['password']);
       $profile = new User();
        
        $profile::create( $data);
        session()->flash('msg','!');
       return redirect("/sign-in");
    }
}
