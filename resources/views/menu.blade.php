@extends('layout.appextend')

@section('section-center-content')
    
<div class="Our-Menu">
    <h1>Our Menu</h1>
    <p>We consider all the drivers of change gives you the components<br> you need to change to create a truly happens.</p>
</div>

    
<section class="container">
 <div class="row">
    @foreach ($data as $data)
    <div class="col-md-3 mb-2 my-5">
    <div class="card" id="crad">
        <img src="{{asset($data->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="text-center text-danger">{{$data->price}}</h2>
          <h3 class="card-title text-center">{{$data->name}}</h1>
          <p class="card-text text-center">{{$data->descraption}}</p>          
        </div>
    </div>
      
      </div>
      @endforeach
 </div>
</section>

 
 <div class="order">
<h2>You can order<br> through apps</h2>
<p class="left-p">Lorem ipsum dolor sit amet consectetur<br> adipiscing elit enim bibendum sed et aliquet aliquet <br>risus tempor semper.</p>
 </div>
 <div class="order-right">
    <div class="one">
        <img src="{{asset('assets/images/our1.jpg')}}" alt="">
        <img src="{{asset('assets/images/our2.jpg')}}" alt="" >
        <img src="{{asset('assets/images/our3.jpg')}}" alt="">
    </div>
    <div class="two">
        <img src="{{asset('assets/images/our4.jpg')}}" alt="">
        <img src="{{asset('assets/images/our6.jpg')}}" alt="">
        <img src="{{asset('assets/images/our7.jpg')}}" alt="">
    </div>
    
    <div class="three">
    <img src="{{asset('assets/images/our8.jpg')}}" alt="">
    <img src="{{asset('assets/images/our9.jpg')}}" alt="">
    <img src="{{asset('assets/images/our5.jpg')}}" alt="">
    </div>
 </div> 

@endsection