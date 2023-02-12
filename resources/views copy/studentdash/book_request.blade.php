@include('studentdash.head')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Books Report</h1>
        <p>check all available books here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Books</li>
        <li class="breadcrumb-item active"><a href="#">all books</a></li>
      </ul>
    </div>

    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Wohoo!!😍</strong> {{Session::get('success')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
  
    @if(Session::has('fail'))
  
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Opps!😢</strong> {{Session::get('fail')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
                <table id="rajtable" class="table table-hover table-bodered table-striped">

                    <thead class="table-primary">
                      <tr>
                        <th scope="col">N</th>
                        <th scope="col">Book Id</th>
                        {{-- <th scope="col">Image</th> --}}
                        <th scope="col">Book Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Available</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                      $j=1;
            
                      @endphp
                      <!-- ========== Start start for loop for books ========== -->
            
                      @foreach($books as $book)
                      <tr>
                        <th scope='row'>{{$j++}}</th>
                        <th>{{$book->bookid}}</th>
                        {{-- <td><img src="{{'/storage/books/'. $book->image}}" alt="image" height="50px" width="50px" style="border-radius: 50%"></td> --}}
                        <td>{{$book->name}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->available}}</td>
                        <td>{{$book->price}}</td>
                        <td>
                          <!-- ========== Start book delete edit button ========== -->
            
                          <a href="{{url('/rit/studentdashboard/request')}}/{{$book->id}}/{{session()->get('libid')}} "><button class='delete btn btn-sm btn-primary' id="delete">Request</button></a>
                          <!-- ========== End book delete edit button ========== -->
            
                        </td>
                      </tr>
                      @endforeach
                      <!-- ========== End start for loop for books ========== -->
            
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  @include('studentdash.foot')
