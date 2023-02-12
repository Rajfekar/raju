<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/dash/css/main.css">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
 
    <div class="col-md-12">
      @if(Session::has('success'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Wohoo!!😍</strong> {{Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  @if(Session::has('fail'))

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Opps!😢</strong> {{Session::get('fail')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
      <div class="tile">
        <h3 class="tile-title">Register</h3>
        <div class="tile-body">
          <form method="post" class="form-horizontal" action="{{url('/rit/register')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="control-label col-md-3">Library ID</label>
              <div class="col-md-8">
                <input value="{{old('lib_id')}}" name="lib_id" class="form-control" type="text" placeholder="Enter your LIbrary ID">
              </div>
              @error('lib_id')
              <div style="color:red;">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Full Name</label>
              <div class="col-md-8">
                <input value="{{old('name')}}" name="name" class="form-control" type="text" placeholder="Enter Your full name">
              </div>
              @error('name')
              <div style="color:red;">{{ $message }}</div>
              @enderror
            </div>
            
            <div class="form-group row">
              <label class="control-label col-md-3">Email</label>
              <div class="col-md-8">
                <input value="{{old('email')}}" name="email" class="form-control col-md-8" type="email" placeholder="Enter your email address">
              </div>
              @error('email')
              <div style="color:red;">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Password</label>
              <div class="col-md-8">
                <input value="{{old('password')}}" name="password" class="form-control" type="password" placeholder="Enter your Password">
              </div>
              @error('password')
              <div style="color:red;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group row">
              <label class="control-label col-md-3">Type</label>
              <div class="col-md-8">
               
              
                <select class="form-select" name="type" id="">
                  <option value="0" selected>Student</option>
                  <option value="1">Faculty</option>
                 
                  
                </select>
               </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Department</label>
              <div class="col-md-8">
               
              
                <select class="form-select" name="branch" id="">
                  <option value="1" selected>CSE</option>
                  <option value="2">ET&T</option>
                  <option value="3">CIVIL</option>
                  <option value="4">MECHANICAL</option>
                  <option value="5">BIOTECH</option>
                  <option value="6">CHEMICAL</option>
                  <option value="7">EEE</option>
                  <option value="8">IT</option>
                  
                </select>
               </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Semester</label>
              <div class="col-md-8">
               
              
                <select class="form-select" name="sem" id="">
                  <option value="1" selected>1st Semester</option>
                  <option value="2">2st Semester</option>
                  <option value="3">3st Semester</option>
                  <option value="4">4st Semester</option>
                  <option value="5">5st Semester</option>
                  <option value="6">6st Semester</option>
                  <option value="7">7st Semester</option>
                  <option value="8">8st Semester</option>
                  
                </select>
               </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Profile Image</label>
              <div class="col-md-8">
                <input name="image" class="form-control" type="file">
              </div>
              @error('image')
                  <div style="color:red;">{{ $message }}</div>
                  @enderror
            </div>
            <div class="form-group row">
              <div class="col-md-8 col-md-offset-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">I accept the terms and conditions
                  </label>
                </div>
              </div>
            </div>

            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="{{url('/rit/login')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Already Registered ?</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      
      </div>
    </div>
  
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
   <script src="/dash/js/jquery-3.3.1.min.js"></script>
   <script src="/dash/js/popper.min.js"></script>
   <script src="/dash/js/bootstrap.min.js"></script>
   <script src="/dash/js/main.js"></script>
   <!-- The javascript plugin to display page loading on top-->
   <script src="/dash/js/plugins/pace.min.js"></script>
</body>

</html>