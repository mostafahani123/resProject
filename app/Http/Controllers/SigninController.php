<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
class SigninController extends Controller
{
    function signin(){
        return view("dashbord.sign-in");

    }

    function handle_signin(Request $request){
        
        $data = $request->all();
        $result = Auth::Attempt(['email' => $data['email'], 'password' => $data['password']]);
 
        
     
if($result){
    return redirect("/index");
    
}else{
    return redirect()->back();
   
}

    }



}
