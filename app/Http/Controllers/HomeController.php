<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
   
   function Home(){
      return view("dashbord.sign-in");
   }
   function index(){
    return view("indexx");
 }
  
   function contact(){
     return  view("contact-us");
   }

   function about(){
      return view("about-us");
   }
   function pages(){
    return view("pages");
 }

   function singlepost(){
     return  view("single-post");
   }
   function book(){
      return  view("bookTable");
    }

    function menu(){
      return view("menu");
    }
 
  
 
}
