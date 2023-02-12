
@include('libdash.head')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Library Attendance</h1>
        <p>See your library attendance report</p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Library</li>
        <li class="breadcrumb-item active"><a href="#">Attendance</a></li>
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
                <!-- ========== Start tablefor book requist ========== -->
            
                <table class="table table-bodered table-striped table-hover" id="example3">
                  <thead class="table-primary">
                    <tr>
                      <th scope="col">N</th>
                      <th scope="col">Library ID</th>
                      <th scope="col">Person Name</th>
                      <th scope="col">Book ID</th>
                      <th scope="col">Book Name</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $k =1;
            
            
                    @endphp
                    @foreach($requestb as $r)
                    <tr>
                      <th scope='row'>{{$k++}}</th>
                      <th style="text-transform:uppercase;">{{$r->userid}}</th>
                      <td style="text-transform:uppercase;">{{$r->username}}</td>
                      <td style="text-transform:uppercase;">{{$r->bookid}}</td>
                      <td>{{$r->bookname}}</td>
                      <!-- <td>{{$r->idays}}</td> -->
            
                      <td>
                        <a name="" id="" class="btn btn-success" href="{{url('/rit/libdashboard/approve')}}/{{$r->bookid}}/{{$r->userid}}" role="button">Approve</a>
                        <a name="" id="" class="btn btn-danger" href="{{url('/rit/libdashboard/reject')}}/{{$r->bookid}}/{{$r->userid}}" role="button">Reject</a>
                      </td>
                    </tr>
                    @endforeach
            
            
                  </tbody>
                </table>
                <!-- ========== End tablefor book requist ========== -->
            
              </div>
              <!-- ========== End table by raj responsive ========== -->
            
          </div>
        </div>
      </div>
    </div>
</main>
@include('libdash.foot')







