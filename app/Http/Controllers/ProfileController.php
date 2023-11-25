<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Auth;
class ProfileController extends Controller
{
   
    public function profile($id_user)
    {
        $profile = User::with("books")->find($id_user);
       
        return view('dashbord.profile', compact('profile'));
    }
 
    public function book(){
    return view("bookTable");
    }
    public function createBook(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'totalphone' => 'required',
            'date' => 'required',
            'time' => 'required',
           ]);

        $add =  Book::create([
        'name' => $request->input('name'),
        'phone' =>$request->input('phone'),
        'totalphone' => $request->input('totalphone'),
        'date' => $request->input('date'),
        'time' => $request->input('time'),
        'user_id' => auth()->id()
    ]);

    session()->flash('msg','!');

    return redirect("/book");


    }






}




