
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets_dash/img/apple-icon.png')}}">
  {{-- <link rel="icon" type="image/png" href="{{asset('assets_dash/img/favicon.png')}}"> --}}
  <title>
    Edit Profile 
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets_dash/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets_dash/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('assets_dash/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets_dash/css/soft-ui-dashboard.css?v=1.0.7')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Update</h6>
            </div>
           



            <div class="card-body">
                <form role="form text-left" method="POST" action="{{url("/editProfile",$profile->id)}}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="FullName" value="{{$profile->FullName }}" aria-label="Name"  name="FullName">
                  
                  </div>
                  <div class="mb-3">
                    <img src="{{asset($profile->Image)}}" alt="" style="width:200px;height:200px;">
                    <input type="file" class="form-control" placeholder="Image" value="{{$profile->Image}}" aria-label="price"  name="Image">
                    @error('Image')
                    <div class="alert alert-danger mt-" role="alert">
                      {{$message}}
                    </div>
                        
                    @enderror
                  </div>
                  
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Email" value="{{$profile->email}}" aria-label="Email" name="email">
                   
              
                  </div>
                  {{-- <div class="mb-3">
                    <input type="text" class="form-control" placeholder="password" value="{{ $profile->password }}" aria-label="image" name="password">
                    
                    
                  </div> --}}

                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="mobile" value="{{$profile->mobile}}" aria-label="Email" name="mobile">
                   
              
                  </div>

                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="location" value="{{$profile->location}}" aria-label="Email" name="location">
                   
              
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update</button>
                  
                  </div>
                </form>
              </div>

         
          </div>
        </div>
      </div>







      {{-- end footer --}}
      <footer class="footer py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mb-4 mx-auto text-center">
            
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                About Us
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                Products
              </a> 
            </div>
            <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-dribbble"></span>
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-twitter"></span>
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-instagram"></span>
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-pinterest"></span>
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-github"></span>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
              <p class="mb-0 text-secondary">
                Copyright © <script>
                  document.write(new Date().getFullYear())
                </script> Soft by Engineer Mustafa Hany .
              </p>
            </div>
          </div>
        </div>
      </footer>
      {{-- end footer --}}
    </div>
  </main>
  
 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

   

 
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>