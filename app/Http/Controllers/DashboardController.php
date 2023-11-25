<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Product;
use Auth;
class DashboardController extends Controller
{
   function Dashhome(){
    return view("dashbord.billing");
   }

   function dashboard(){
    return view("dashbord.dashboard");
   }
   function profile(){
    return view("dashbord.profile");
   }
   function rtl(){
    return view("dashbord.rtl");
   }
   function signin(){
    return view("dashbord.sign-in");
   } 

   function signup(){
    return view("dashbord.sign-up");
   }
   function item(Product $result){
    $data = $result->get();
      return view("dashbord.items" , ["data" => $data]);
     }
     
     function create(){
      return view("dashbord.createItem");
     }
   function tables(User $data){
      $details = $data->get();
     
    return view("dashbord.tables" , ["details" => $details]);
   }
   function deleteUser(User $id){
      $id->delete();
       return redirect("/tables");
} 
 
   function delete(Product $id){
      $id->delete();
       return redirect("/item");
} 

public function orders()
    {
        $dataBook = Book::get();
       
        return view('dashbord.orders' , ['dataBook' => $dataBook ]);
    }
    

   

    function editProfile($id){
      $profile = User::findOrFail($id);
      return view("dashbord.editProfile" ,['profile'=>$profile]);
  }


  function handle_editProfile(Request $request,$id){
   $request->validate([
      'Image' => 'required',
      
     ]);

      $imgHolder = "";
      $data = $request->all();

      if($request->hasFile('Image')){
          $image = $request->file('Image');
          // reneme

           $name = time() . "_menu_"   . "." . $image->getClientOriginalExtension();
           $destintion = public_path("/uploads");
          // move
          $image->move( $destintion , $name);
         $imgHolder = "uploads/{$name}";
         $data['Image']=$imgHolder;

      }else{
          $data['Image']="default.png";
      }
      
      $item = User::findOrFail($id);
      $item->update($request->all());
      $item->update($data);

     
      return redirect("/index");
  }

 
}
