@include('libdash.head')

<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-book"></i> Edit  Book</h1>
        <p>Edit book details now</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-book"></i></li>
        <li class="breadcrumb-item"><a href="#">Edit Book</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile">
            <h3 class="tile-title">Correct Book Details</h3>
            <div class="tile-body">
                
                    <!-- ========== Start formnewbook ========== -->
          <form action="{{route('updatebook')}}" method="post" enctype="multipart/form-data">
            <!-- ========== Start session notification raj ========== -->
            @csrf
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
            <!-- ========== End session notification raj ========== -->

            
            <label>Book Name:</label><input class="form-control" type="text" name="name" value="{{$member->name}}" />
            @error('name')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror
            </br>
            <label>Book Id:</label><input class="form-control" type="text" name="bookid" value="{{$member->bookid}}" />
            @error('bookid')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror
            </br>
            <label>Detail:</label><input class="form-control" type="text" name="detail" value="{{$member->detail}}" /> @error('detail')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror</br>
            <label>Author:</label><input  class="form-control" type="text" name="author" value="{{$member->author}}" /> @error('author')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror</br>
            <label>Publication</label><input  class="form-control" type="text" name="publication" value="{{$member->publication}}" /> @error('publication')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror</br>
            
             <div class="mb-3">
              <label for="" class="form-label">Branch:</label>
              <select class="form-control form-select form-select-lg" name="bcheck" id="">
                <option selected>Select One</option>
               
                <option value="CSE">CSE</option>
                <option value="MECHANICAL">MECHANICAL</option>
                <option value="CIVIL">CIVIL</option>
                <option value="ET&T">ET&T</option>
                <option value="CHEMICAL">CHEMICAL</option>
                <option value="BIOTECH">BIOTECH</option>
                <option value="IT">IT</option>
                
              </select>
             </div>

          


            </br>
            <label>Price:</label><input  class="form-control" type="number" name="price" value="{{$member->price}}" /> @error('price')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror</br>
            <label for="available">Available:</label>
            <select class="form-control" name="available">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>

            <br>
            <label>Book Photo:</label><input class="form-control"  type="file" name="image" /></br>

            @error('image')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror</br>

            <input class="btn btn-primary" type="submit" value="SUBMIT" />


          </form>
          <!-- ========== End formnewbook ========== -->

            </div>
        </div>
          




















        </div>
      </div>
    </div>
  </main>
@include('libdash.foot')