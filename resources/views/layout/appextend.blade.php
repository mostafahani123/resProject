<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/templatemo_style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/templatemo_misc.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/testimonails-slider.css')}}">

        <script src="{{asset('assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js')}}"></script>
        <!-- Replace 'YOUR_API_KEY' with your actual API key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

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
                                    <a href="#"><img src="{{asset('assets/images/5.JPG')}}" title="Grill Template" alt="Grill Website Template" ></a>
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
                               <a href="{{url("/bookTable")}}"><input type="submit" value="Book A Table"></a>
                               <div class="uploginregister_buttons" >
                                @if(!Auth::user())
                               <button> <a href="{{url("/sign-in")}}">login</a></button>
                               <button><a href="{{url("/sign-up")}}">register</a></button>
                              @else
                            
                            
                            <p><a href="{{ url("/profile", Auth::User()->id)}}">My_Profile</a></p>
                             <a href="{{ url("/profile", Auth::User()->id)}}"><img src="{{Auth::User()->Image}}" id="img"></a>
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
                                    <span>Get in touch with us</span>
                                    <form method="get" class="subscribeForm">
                                        <input id="subscribe" type="text" />
                                        <input type="submit" id="submitButton" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="social-bottom">
                                    <span>Follow us:</span>
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-rss"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="about">
                                    <h4 class="footer-title">About Grill</h4>
                                    <p>Grill is free HTML5 template by <span class="blue">template</span><span class="green">mo</span> and it is a free responsive bootstrap layout that can be applied for any purpose.
                                    <br><br>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for photos used in this template. Nam commodo erat quis ligula placerat viverra.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title">Shop Categories</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>New Grill Menu</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Healthy Fresh Juices</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Spicy Delicious Meals</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Simple Italian Pizzas</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Pure Good Yogurts</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Ice-cream for kids</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="recent-posts">
                                    <h4 class="footer-title">Recent posts</h4>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="{{asset('assets/images/recent-post1.jpg')}}" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                            <span>24/12/2084</span>
                                        </div>
                                    </div>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="{{asset('assets/images/recent-post2.jpg')}}" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Simple and effective meals</a></h6>
                                            <span>18/12/2084</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">More info</h4>
                                    <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>010-020-0340</li>
                                        <li><i class="fa fa-globe"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                                        <li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p>
                        	<span>Copyright © 2084 <a href="#">Your Company Name</a> 
                            | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent"><span class="blue">template</span><span class="green">mo</span></a></span>
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