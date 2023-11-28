
@extends('layout.appextend')
@section('title')
about-us
@endsection
@section('section-center-content')
            {{-- section one  --}}

<section class="oneontainer">
    <div class="row">
    <img src="{{asset('assets/images/Imageabout.JPG')}}">
    <div class="relative-item">
   <h5>Come and visit us</h5>
   <i class="fa fa-phone" aria-hidden="true"> <a href="">01145467021</a></i>  
   <i class="fa fa-envelope-o" aria-hidden="true"> <a href="">mostafajhgfd112gmail.com</a></i>
   <i class="fa fa-map-marker" aria-hidden="true"><a href="">837 W. Marshall Lane Marshalltown, IA 50158, Los Angeles</a></i>

    </div>
    </div>
    <div class="right-section" >
   <h2>We provide healthy<br> food for your family.</h2>

   <h6>Our story began with a vision to create a unique dining<br> experience that merges fine dining, exceptional service, and a<br> vibrant ambiance. Rooted in city's rich culinary culture, we aim to<br> honor our local roots while infusing a global palate.</h6>

<p>At place, we believe that dining is not just about food, but also about the<br> overall experience. Our staff, renowned for their warmth and dedication,<br> strives to make every visit an unforgettable event.</p>    

<button><a href="#">More About Us</a></button>
</div>

</section>
{{-- /* end section one */ --}}
{{-- section two --}}



<div class="video-container">
    <video controls autoplay >
        <source src="{{'assets/images/Restaurant Ad Video Template (Editable).mp4'}}"  type="video/mp4">
       
    </video>
    <div class="overlay">
        Feel the authentic &<br> original taste from us
    </div>
</div>
{{-- end section two --}}
{{-- section three --}}

<div class="section">
    <h2  class="h2">Easy To Order</h2>
    <i class="fa fa-sort" aria-hidden="true"></i>
    <p>In the new era of technology we look in<br> the future with certainty life.</p>
</div>

<div class="section">
    <h2 class="h2">Easy To Order</h2>
    <i class="fa fa-sort" aria-hidden="true"></i>
    <p>In the new era of technology we look in<br> the future with certainty life.</p>
</div>

<div class="section">
    <h2 class="h2">Fast Delivery</h2>
    <i class="fa fa-clock-o" aria-hidden="true"></i>
    <p>In the new era of technology we look in<br> the future with certainty life.</p>
</div>

{{-- end section three --}}



{{-- section four  --}}
<section class="section-four-about">
    <div class="img-about"><img src="{{asset('assets/images/Mask group (11).png')}}" alt=""></div>
<div class="up-abput-left">
    <h2 class="h2-about">A little information<br> for our valuable guest</h2>
    <p class="p-about">At place, we believe that dining is not just about food, but also about the<br> overall experience. Our staff, renowned for their warmth and dedication<br>, strives to make every visit an unforgettable event.</p>
   <div class="top-about">
    <div class="left-about">
    <h1 class="three-about">3</h1>
    <p>Locations</p>
    </div>
    <div class="right-about">
     <h1 class="three-about">1995</h1>
     <p>Founded</p>
    </div>
    </div>
    <div class="bottom-about">
    <div class="left-about">
        <h1 class="three-about">65+</h1>
        <p>Staff Members</p>
    </div>
    <div class="ten-about" >
        <h1>100%</h1>
        <p>Satisfied Customers</p>
    </div>
</div>
</div>
</section>


{{-- end section four  --}}





 {{-- section five  --}}
 <section class="section-five-about">
    <h2 id="h2">What Our Customers Say</h2>
    <div class="customers">
    <div class="customer-one" id="customer-one">
        <h2 class="oneh2">“One of a kind restaurant”</h2>
        <p class="p-up"> Last night, we dined at place and were<br> simply blown away. From the moment we stepped in, we<br> were enveloped in an<br> inviting atmosphere and greeted with<br> warm smiles.</p>
        <hr>
        <div class="con-im">
            <img src="{{asset('assets/images/1.jpg')}}">
            <h4>Sophire Robson</h4>
            <p class="onep">Los Angeles, CA</p>
            </div> 
    </div>
    <div class="customer-one" id="customer-two">
        <h2 class="oneh2">“One of a kind restaurant”</h2>
        <p class="p-up">Last night, we dined at place and were<br> simply blown away. From the moment we stepped in, we<br> were enveloped in an<br> inviting atmosphere and greeted with<br> warm smiles.</p>
        <hr>
        <div class="con-im">
            <img src="{{asset('assets/images/2.jpg')}}">
            <h4 >Matt Cannon</h4>
            <p class="onep">San Diego, CA</p>
            </div> 
    </div>
    <div class="customer-one" id="customer-three">
        <h2 class="oneh2">“One of a kind restaurant”</h2>
        <p class="p-up">Last night, we dined at place and were<br> simply blown away. From the moment we stepped in, we<br> were enveloped in an<br> inviting atmosphere and greeted with<br> warm smiles.</p>
        <hr>
        <div class="con-im">
        <img src="{{asset('assets/images/3.jpg')}}">
        <h4 >Andy Smith</h4>
        <p class="onep">San Francisco, CA</p>
        </div> 
    </div>
    </div>
    </section>
    
 {{-- end section five --}}

@endsection