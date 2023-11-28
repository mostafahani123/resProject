<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">      
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/templatemo_style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/templatemo_misc.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/testimonails-slider.css')}}">

        <script src="{{asset('assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js')}}"></script>
       
    <script>
        // Initialize and add the map
        function initMap() {
            // Set the coordinates for the map center
            var myLatLng = { lat: 37.7749, lng: -122.4194 };

            // Create a new map centered at myLatLng
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: myLatLng
            });

            // Create a marker positioned at myLatLng
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });
        }

       
    </script>


    </head>
    <body>
       
            <header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="home-account">
                                 <i class="fa fa-phone" aria-hidden="true"> 01145467021</i>  
                                 <i class="fa fa-envelope-o" aria-hidden="true"> mostafajhgfd112gmail.com</i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cart-info">
                                    
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                    <i class="fa fa-github" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="#"><img src="{{asset('assets/images/w.png')}}" title="Grill Template" alt="Grill Website Template" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="{{url("/index")}}" id="Home">Home</a></li>
                                        <li><a href="{{url("about")}}">About</a></li>
                                        <li><a href="{{url("menu")}}">menu</a></li>
                                        <li><a href="{{url("pages")}}">pages</a></li>
                                        <li><a href="{{url("contact")}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3" id="submit-nav">
                               <a class="bookAtable" href="{{url("/bookTable")}}"><input class="bookAtable"  type="submit" value="Book A Table"></a>
                               <div class="uploginregister_buttons" >
                                @if(!Auth::user())
                               <button> <a href="{{url("/sign-in")}}">login</a></button>
                               <button><a href="{{url("/sign-up")}}">register</a></button>
                              @else
                            
                            
                            <p class="profilez"><a class="profilez" href="{{ url("/profile", Auth::User()->id)}}">My_Profile</a></p>
                             <a class="profilez"  href="{{ url("/profile", Auth::User()->id)}}"><img src="{{Auth::User()->Image}}" id="img"></a>
                               @endif

                              
                           
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


@yield('section-center-content')
            
			<footer>
                <div class="container">
                    <div class="top-footer">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="subscribe-form">
                                    <span><a href="#"><img src="{{asset('assets/images/logo.png')}}" title="Grill Template" alt="Grill Website Template" ></a></span>
                                  
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-3">
                                <div class="social-bottom">
                                    
                                    <ul>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                        <li><a href="#" class="fa fa-github"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="main-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="about">
                                    <p class="text-light my-5">In the new era of technology we look a<br> in the future with certainty and pride to<br> for our company and.
                                   </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title text-light">Pages</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Home</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>About</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Menu</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Pricing</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Blog</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Contact</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Delivery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title text-light">Utility Pages</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Start Here</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Styleguide</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Password Protected</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>404 Not Found</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Licenses</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Changelog</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>View More</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="recent-posts" >
                                    <h4 class="footer-title text-light">Follow Us On Instagram</h4>
                                    <div style="display: flex">
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="{{asset('assets/images/recent-post1.jpg')}}"  alt="">
                                        </div>
                                    
                                    </div>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="{{asset('assets/images/recent-post2.jpg')}}" alt="">
                                        </div>
                                       
                                    </div>
                                </div>
                                <div style="display: flex;">
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="{{asset('assets/images/recent-post2.jpg')}}" alt="">
                                        </div>
                                       
                                    </div>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="{{asset('assets/images/recent-post2.jpg')}}" alt="">
                                        </div>
                                       
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="bottom-footer text-center">
                        <p>
                        	<span>Copyright © 2023 Hashtag Developer. All Rights Reserved</a> 
                            
                        </p>
                    </div>
                    
                </div>
            </footer>

    
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>