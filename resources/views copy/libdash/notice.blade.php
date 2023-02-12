
@include('libdash.head')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Notice Board</h1>
        <p>all notice update here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Notice</li>
        <li class="breadcrumb-item active"><a href="#">library notice</a></li>
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
              <!-- ========== Start table raj example ========== -->
    
              <table class="table table-bodered table-striped table-hover" id="example10">
                <thead class="table-primary">
                  <tr>
                    <th scope="col">N</th>
                    <th scope="col">Department</th>
                    <th scope="col">Image</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                    {{-- <th scope="col">Fine</th> --}}
                  </tr>
                </thead>
                <tbody>
                  @php
                  $n=1;
                  @endphp
                  @foreach($notice as $d)
                  <tr>
                    <th scope='row'>{{$n++}}</th>
                    <th style="text-transform: uppercase;">{{$d->department}}</th>
                    <th><img src="{{'/storage/notices/'. $d->demo1}}" alt="image" height="50px" width="50px" style="border-radius: 50%"></th>
                    <td>{{$d->subject}}</td>
                    <td>{{$d->title}}</td>
                    <td>{{$d->date}}</td>
                   
                    <td> 
                      {{-- {{url('/rit/libdashboard/notice')}} --}}
                      <a name="edit" id="edit" class="btn btn-success" href="#" role="button">Edit</a>
                      
                     
                      
                    </td>
                    
          
                  </tr>
                  @endforeach
          
                </tbody>
              </table>
              <!-- ========== End table raj example ========== -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  @include('libdash.foot')












