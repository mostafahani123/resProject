





@extends('layout.appextend')
@section('title')
bookTable
@endsection
@section('section-center-content')
    

          
       
<div class="row">
    <div class="col-md-12">
        <div class="heading-section">
            <h2 class="book">Book A Table</h2>
          <p>We consider all the drivers of change gives you the components<br> you need to change to create a truly happens.</p>

            <img src="images/under-heading.png" alt="" >
        </div>
    </div>
</div>


 <div class="container" style="background-color:rgb(244, 243, 243); width:70vh;  position:relative;  border-radius: 30px; top:0px;">
    <form style="width:30vh; position:relative;" action="{{url("/book")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-">
          <label >Date</label>
          <input style="margin-bottom: 1.5vh;" type="date" class="form-control" value="{{ old('date')  }}" id="exampleInputEmail1" aria-describedby="emailHelp" name="date">
          @error('date')
          <div class="alert alert-danger mt-" role="alert">
            {{$message}}
          </div>
              
          @enderror

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('name')  }}" name="name">
          @error('name')
          <div class="alert alert-danger mt-" role="alert">
            {{$message}}
          </div>
              
          @enderror
        </div>
        <div style="position:relative; left:34vh; bottom:31vh;">
            <div class="mb-3">
                <label >time</label>
                <input type="time" class="form-control" id="exampleInputEmail1"  value="{{ old('time')  }}" aria-describedby="emailHelp" name="time">
                @error('time')
                <div class="alert alert-danger mt-" role="alert">
                  {{$message}}
                </div>
                    
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="text" class="form-control" value="{{ old('phone')  }}"  id="exampleInputPassword1" name="phone">
               
             
              </div>
               @error('phone')
                <div class="alert alert-danger mt-" role="alert">
                  {{$message}}
                </div>
                    
                @enderror
        </div>
        <div class="mb-3" style="position: relative; bottom:30vh; width:65vh;">
            <label for="exampleInputPassword1" class="form-label"> total person</label>
            <input type="number" class="form-control" value="{{ old('totalphone')  }}"  id="exampleInputPassword1" name="totalphone">
            @error('totalphone')
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