





@extends('layout.appextend')
@section('title')
bookTable
@endsection
@section('section-center-content')
    

          
       
<div class="row">
    <div class="col-md-12">
        <div class="heading-section">
            <h2 class="book">contact-us</h2>
          <p>We consider all the drivers of change gives you the components<br> you need to change to create a truly happens.</p>

            <img src="images/under-heading.png" alt="" >
        </div>
    </div>
</div>


 <div class="container" style="background-color:rgb(244, 243, 243); width:70vh;  position:relative;  border-radius: 30px; top:0px;">
    <form style="width:30vh; position:relative;" action="{{url("/massage")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-">
          <label >Name</label>
          <input style="margin-bottom: 1.5vh;" type="text" class="form-control" value="{{ old('name')  }}" id="exampleInputEmail1" placeholder="Enter your Name" aria-describedby="emailHelp" name="name">
          @error('name')
          <div class="alert alert-danger mt-" role="alert">
            {{$message}}
          </div>
              
          @enderror

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('email')  }}" placeholder="Enter your Email" name="email">
          @error('email')
          <div class="alert alert-danger mt-" role="alert">
            {{$message}}
          </div>
              
          @enderror
        </div>
        <div style="position:relative; left:34vh; bottom:31vh;">
            <div class="mb-3">
                <label >Subject</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Write a Subject" value="{{ old('subject')  }}" aria-describedby="emailHelp" name="subject">
                @error('subject')
                <div class="alert alert-danger mt-" role="alert">
                  {{$message}}
                </div>
                    
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Message</label>
                <input type="text" class="form-control" value="{{ old('message')  }}" placeholder="Write Your Message "  id="exampleInputPassword1" name="message">
               
             
              </div>
               @error('message')
                <div class="alert alert-danger mt-" role="alert">
                  {{$message}}
                </div>
                    
                @enderror
        </div>
       
        <button type="submit" class="btn btn-danger" style="width:64vh; position:relative; bottom:27vh; border-radius: 40px;">Submit</button>
      </form>

</div>
                </div>
            </div>
            <div id="map" style="position: fixed;"></div>


@endsection