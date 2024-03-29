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
            <table class="table table-bodered table-striped table-hover" id="example">
              <thead class="table-primary">
                <tr>
                  <th scope="col">N</th>
                  {{-- <th scope="col">Image</th> --}}
                  <th scope="col">Name</th>
                  <th scope="col">ID</th>
                  <th scope="col">Department</th>
                  <th scope="col">InTime</th>
                  <th scope="col">OutTime</th>
                  <th scope="col">Date</th>
                </tr>
              </thead>
              <tbody>
                @php
                $i=1;
                @endphp
                @foreach($a as $b)
                <tr>
                  <th scope='row'>{{$i++}}</th>
                  {{-- <td>
                    <a style="text-decoration: none; color:black;" href="#">

                      <img src="{{'/storage/students/'. $b->demo2}}" alt="image"
                        onerror=this.src="{{'/images/profile.jfif'}}" height="50px" width="50px"
                        style="border-radius: 50%"></a>
                  </td> --}}
                  <td>{{$b->name}}</td>
                  <td>{{$b->memberid}}</td>
                  <td>

                    @if($b->department == 0) {{"CSE"}}
                    @elseif($b->department == 1) {{"CIVIL"}}
                    @elseif($b->department == 2) {{"EEE"}}
                    @elseif($b->department == 3) {{"MECHANICAL"}}
                    @elseif($b->department == 4) {{"ELECTRONICS"}}
                    @elseif($b->department == 5) {{"BIOTECH"}}
                    @elseif($b->department == 6) {{"THERMAL"}}
                    @elseif($b->department == 7) {{"CHEMICAL"}}
                    @elseif($b->department == 8) {{"IT"}}
                    @elseif($b->department == 9) {{"ENVIRONMENTAL"}}
                    @elseif($b->department == 10) {{"ENERGY MANAGMENT"}}
                    @elseif($b->department == 11) {{"LIBRARY"}}
                    @elseif($b->department == 12) {{"OTHERS"}}
                    @elseif($b->department == 13) {{"MBA"}}
                    @elseif($b->department == 14) {{"MCA"}}
                    @else {{$b->department}}
                    @endif



                  </td>
                  <td>{{$b->intime}}</td>
                  <td>{{$b->outtime}}</td>
                  <td>{{$b->demo1}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@include('libdash.foot')