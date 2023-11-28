<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Massage;
class CreateitemController extends Controller
{
    
    function menu(Product $result){
  
        $data = $result->get();
        
        return view("menu" , ['data'=> $data]);
    }

      

    function edit($id){
        $product = Product::findOrFail($id);
        return view("dashbord.edit" ,['product'=>$product]);
    }

 
    function handle_edit(Request $request,$id){

    //      $request->validate([
       
    //      'image' => 'required',
            
    //    ]);


        $imgHolder = "";
        $data = $request->all();

        if($request->hasFile('image')){
            $image = $request->file('image');
            // reneme

             $name = time() . "_menu_"   . "." . $image->getClientOriginalExtension();
             $destintion = public_path("/uploads");
            // move
            $image->move( $destintion , $name);
           $imgHolder = "uploads/{$name}";
           $data['image']=$imgHolder;

        }else{
            $data['image']="default.png";
        }
        
        $item = Product::findOrFail($id);
        $item->update($request->all());
        $item->update($data);

       
        return redirect("/item");
    }

    function create(){

        return view("dashbord.createItem");
    }





    function handle_create(Request $request){

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'descraption' => 'required',
            'image' => 'required',
            
           ]);


        $imgHolder = "";
        $data = $request->all();

        if($request->hasFile('image')){
            $image = $request->file('image');
            // reneme

             $name = time() . "_menu_"   . "." . $image->getClientOriginalExtension();
             $destintion = public_path("/uploads");
            // move
            $image->move( $destintion , $name);
           $imgHolder = "uploads/{$name}";
           $data['image']=$imgHolder;

        }else{
            $data['image']="default.png";
        }
 
       
          
       $profile = new Product();
       
        $profile::create($data);
        session()->flash('msg','!');
        return redirect("/createItem");
    }

   
        

    function massage(){

        return view("contact-us");
    }


    function handle_massage(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            
           ]);

           $add =  Massage::create([
            'name' => $request->input('name'),
            'email' =>$request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
           
        ]);
    
        session()->flash('msg','!');
    
        return redirect("/contact");
    }


    public function showmassagedash(Massage $data){
          $result = $data->get();
          return view("dashbord.massagedash" , ['data' => $result]);
    }
    }

