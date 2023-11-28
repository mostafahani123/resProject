@extends('layout.appextend')
@section('title')
Home
@endsection    
@section('section-center-content')

    <div class="sliderup">
            <div class="slider-caption">
                <h1 id="h1-home">Best food for<br>
                    your taste</h1>
                <p>Discover delectable cuisine and unforgettable moments <br> in our welcoming, culinary haven..</p>
                <a href="{{url('single-post')}}"  class="left-button">Shop Now</a>
                <a href="#" class="right-button">Explore Menu</a>
            </div>
          <img src="{{asset('assets/images/Capture.JPG')}}" alt="" />
    </div>



<div id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2 id="h2-home" class="in">Browse Our Menu</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-5">
                <div class="service-item">
                    <div class="icon">
                        <i class="fa fa-coffee" aria-hidden="true"></i>

                    </div>
                    <h4>Breakfast</h4>
                    <p>In the new era of technology we<br> look in the future with certainty<br> and pride for our life.</p>
                    <a href="#">Explore Menu</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <div class="icon">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                    </div>
                    <h4>Main Dishes</h4>
                    <p>In the new era of technology we<br> look in the future with certainty<br> and pride for our life.</p>
                    <a href="#">Explore Menu</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <div class="icon">
                        <i class="fa fa-glass" aria-hidden="true"></i>                 
                       </div>
                    <h4>Drinks</h4>
                    <p>In the new era of technology we<br> look in the future with certainty<br> and pride for our life.</p>
                    <a href="#">Explore Menu</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <div class="icon">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                    </div>
                    <h4>Main Dishes</h4>
                    <p>In the new era of technology we<br> look in the future with certainty<br> and pride for our life.</p>
                    <a href="#">Explore Menu</a>
                </div>
            </div>
        </div>
    </div>
</div>





 {{-- section three  --}}

<section class="ccontainer">
    <div class="row" id="section-top">
    <img src="{{asset('assets/images/sectionthree2.JPG')}}">
    <div class="relative-item">
   <h5>Come and visit us</h5>
   <i class="fa fa-phone" aria-hidden="true"> <a href="">01145467021</a></i>  
   <i class="fa fa-envelope-o" aria-hidden="true"> <a href="">mostafajhgfd112gmail.com</a></i>
   <i class="fa fa-map-marker" aria-hidden="true"><a href="">837 W. Marshall Lane Marshalltown, IA 50158, Los Angeles</a></i>

    </div>
    </div>
    <div class="right-section" >
   <h2 class="h2-res" id="h2-home-section">We provide healthy<br> food for your family.</h2>

   <h6>Our story began with a vision to create a unique dining<br> experience that merges fine dining, exceptional service, and a<br> vibrant ambiance. Rooted in city's rich culinary culture, we aim to<br> honor our local roots while infusing a global palate.</h6>

<p>At place, we believe that dining is not just about food, but also about the<br> overall experience. Our staff, renowned for their warmth and dedication,<br> strives to make every visit an unforgettable event.</p>    

<button><a href="#">More About Us</a></button>
</div>

</section>
{{-- /* end section three */ --}}

{{-- /* start section four */ --}}
<section class="section-four">
 <h3>We also offer unique<br> services for your events</h3>
<br>

 <div class="section-four">
<img src="{{asset('assets/images/sectionfour1.jpg')}}" alt="">
<br>

<h2>Caterings</h2>
<p>In the new era of technology we look<br> in the future with certainty for life.</p>
 </div>
 <div class="section-four">
<img src="{{asset('assets/images/sectionfour2.jpg')}}" alt="">
<br>

<h2>Birthdays</h2>
<p>In the new era of technology we look<br> in the future with certainty for life.</p>
 </div>
 <div class="section-four">
<img src="{{asset('assets/images/sectionfour3.jpg')}}" alt="">
<br>

<h2>Weddings</h2>
<p>In the new era of technology we look<br> in the future with certainty for life.</p>
 </div>
 <div class="section-four">
<img src="{{asset('assets/images/sectionfour4.jpg')}}" alt="">
<br>

<h2>Events</h2>
<p>In the new era of technology we look<br> in the future with certainty for life.</p>
 </div>

</section>
{{-- /* end section four */ --}}
{{-- /*  section five */ --}}

<section class="section-five" id="section-five">

    <div class="img-one-left">
        <img src="{{asset('assets/images/left1.jpg')}}" alt="">
    </div>
    <div class="img-two-left">
        <img src="{{asset('assets/images/right1.jpg')}}" class="img-top">
        <img src="{{asset('assets/images/right2.jpg')}}" class="img-bottom">
    </div>

<div class="right-div" id="right-div">
    <h2>Fastest Food<br> Delivery in City</h2>
    <p id="p-res">Our visual designer lets you quickly and of drag a down<br> your way to customapps for both keep desktop. </p>
    <i class="fa fa-clock-o" aria-hidden="true"> <a href="">Delivery within 30 minutes</a></i>  
    <i class="fa fa-money" aria-hidden="true"> <a href="">Best Offer & Prices</a></i>
    <i class="fa fa-shopping-cart" aria-hidden="true"> <a href="">Online Services Available</a></i>
</div>

</section>
{{-- /*  end section five */ --}}
{{-- /*   section six */ --}}
<section class="section-six">

<div class="customers">
<div class="customer-one" id="customer-one">
    <h2>“One of a kind restaurant”</h2>
    <p class="p-up"> Last night, we dined at place and were<br> simply blown away. From the moment we stepped in, we<br> were enveloped in an<br> inviting atmosphere and greeted with<br> warm smiles.</p>
    <hr>
    <div class="con-im">
        <img src="{{asset('assets/images/1.jpg')}}">
        <h4>Sophire Robson</h4>
        </div> 
</div>
<div class="customer-one" id="customer-two">
    <h2>“One of a kind restaurant”</h2>
    <p class="p-up">Last night, we dined at place and were<br> simply blown away. From the moment we stepped in, we<br> were enveloped in an<br> inviting atmosphere and greeted with<br> warm smiles.</p>
    <hr>
    <div class="con-im">
        <img src="{{asset('assets/images/2.jpg')}}">
        <h4 >Matt Cannon</h4>
        </div> 
</div>
<div class="customer-one" id="customer-three">
    <h2>“One of a kind restaurant”</h2>
    <p class="p-up">Last night, we dined at place and were<br> simply blown away. From the moment we stepped in, we<br> were enveloped in an<br> inviting atmosphere and greeted with<br> warm smiles.</p>
    <hr>
    <div class="con-im">
    <img src="{{asset('assets/images/3.jpg')}}">
    <h4 >Andy Smith</h4>
    </div> 
</div>
</div>
</section>
{{-- /*   end section six */ --}}
{{-- /*    section seven */ --}}
<section class="section-seven">
<div class="blog">
    <h5>Our Blog & Articles</h5>
    <button class="btn-blog"><a href="">Read All Articles</a></button>
</div>
<div class="Articles">
<img src="{{asset('assets/images/perger.jpg')}}" alt="">
<p class="">January 3, 2023</p>
<h6>The secret tips & tricks to prepare  perfect burger & pizza<br> for our customers</h6>
<p class="p-img"> Lorem ipsum dolor sit amet consectetur of a adipiscing elitilmim semper<br> adipiscing massa gravida nisi cras enim quis nibholm varius amet gravida<br> ut facilisis neque egestas.</p>
</div>
<div class="Articles-right">
    <div class="top">
<div class="row" id="">

    <img src="{{asset('assets/images/10.jpg')}}" alt="">
    <p>January 3, 2023</p>
    <h6>How to prepare the perfect french <br>fries in an air fryer</h6>
</div>
<div class="row">
    <img src="{{asset('assets/images/11.jpg')}}" alt="">
    <p>January 3, 2023</p>
    <h6>How to prepare the perfect french<br> fries in an air fryer</h6>
</div>
</div>
<div class="bottom">
<div class="row">
    <img src="{{asset('assets/images/12.jpg')}}" alt="">
    <p>January 3, 2023</p>
    <h6>How to prepare the perfect french<br> fries in an air fryer</h6>
</div>
<div class="row">
    <img src="{{asset('assets/images/13.jpg')}}" alt="">
    <p>January 3, 2023</p>
    <h6>How to prepare the perfect french <br>fries in an air fryer</h6>
</div>
</div>
</div>
</section>
{{-- /*   end section seven */ --}}
@endsection
          