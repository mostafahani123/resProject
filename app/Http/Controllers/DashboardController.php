<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Product;
use Auth;
class DashboardController extends Controller
{
  
  
   
  
  

 
   function item(Product $result){
    $data = $result->get();
      return view("dashbord.items" , ["data" => $data]);
     }
     
   function tables(User $data){

      $details = $data->get();
     
    return view("dashbord.tables" , ["details" => $details]);
   }
   function chart(){
      $Alluser = User::count();
      $Allorders = Book::count();
      $Allitem = Product::count();
      $Admin = User::where('role', 'admin')->count();
      $user =User::where('role', 'user')->count();
      return view("dashbord.HomeDashbord" , [
         "All_Users" => $Alluser,
         "All_orders" => $Allorders,
         "All_item" => $Allitem,
         "Admin" => $Admin,
         "user" => $user,
   ]);
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


  function request($id){
   $requestt = Product::findOrFail($id);
   return view("dashbord.request" ,['requestt'=>$requestt]);
}


function handle_request(Request $request,$id){


   $item = Product::findOrFail($id);
   $item->update($request->all());
  

  
   return redirect("/tables");
}

 
}
