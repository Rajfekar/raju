@include('libdash.head')
<main class="app-content">

  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> ALL MEMBER LIST</h1>
      <p>RITEE all member list</p>
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
          <!-- ========== Start table responsive ========== -->
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="example2">
              <thead class="table-primary">
                <tr>
                  <th scope="col">N</th>
                  <th scope="col">Id</th>
                  <th scope="col">Image</th>
                  <th scope="col">Name</th>
                  <th scope="col">Type</th>
                  <th scope="col">RollNo.</th>
                  <th scope="col">Branch</th>
                  <th scope="col">Sem</th>
                  <th scope="col">IBook</th>
                  <th scope="col">Fine</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                @php
                $m=1;


                @endphp

                @foreach($member as $student)
                <tr>
                  <td>{{$m++}}</td>
                  <td style="text-transform:uppercase;"><a style="text-decoration:none; color:black;"
                      href="{{url('/rit/libdashboard/attendancenow/'.$student->libid)}}">{{$student->libid}}</a></td>
                  <td>
                    <a style="text-decoration: none; color:black;"
                      href="{{'/rit/libdashboard/editmember/'.$student->collegeid}}">
                      <img src="{{'/storage/students/'. $student->image}}" alt="image"
                        onerror=this.src="{{'/images/profile.jfif'}}" height="50px" width="50px"
                        style="border-radius: 50%"></a>
                  </td>
                  <td style="text-transform:uppercase;">{{$student->name}}</td>
                  <td>


                    @if($student->type == 0)
                    {{"STUDENT"}}
                    @elseif($student->type == 1)
                    {{"FACULTY"}}
                    @elseif($student->type == 2)
                    {{"LIBRARIAN"}}
                    @elseif($student->type == 3)
                    {{"PRINCIPAL"}}
                    @elseif($student->type == 4)
                    {{"ACCOUNTENT"}}
                    @elseif($student->type == 5)
                    {{"HR MANAGER"}}
                    @elseif($student->type == 6)
                    {{"T&P"}}
                    @elseif($student->type == 7)
                    {{"Employee"}}
                    @else
                    {{$student->type}}

                    @endif

                  </td>
                  <td>{{$student->rollno}}</td>
                  <td>

                    @if($student->department == 0) {{"CSE"}}
                    @elseif($student->department == 1) {{"CIVIL"}}
                    @elseif($student->department == 2) {{"EEE"}}
                    @elseif($student->department == 3) {{"MECHANICAL"}}
                    @elseif($student->department == 4) {{"ELECTRONICS"}}
                    @elseif($student->department == 5) {{"BIOTECH"}}
                    @elseif($student->department == 6) {{"THERMAL"}}
                    @elseif($student->department == 7) {{"CHEMICAL"}}
                    @elseif($student->department == 8) {{"IT"}}
                    @elseif($student->department == 9) {{"ENVIRONMENTAL"}}
                    @elseif($student->department == 10) {{"ENERGY MANAGMENT"}}
                    @elseif($student->department == 11) {{"LIBRARY"}}
                    @elseif($student->department == 12) {{"OTHERS"}}
                    @elseif($student->department == 13) {{"MBA"}}
                    @elseif($student->department == 14) {{"MCA"}}
                    @else {{$student->department}}
                    @endif

                  </td>
                  <td>{{$student->sem}}</td>
                  <td>{{$student->r1}}</td>
                  <td>{{$student->r2}}</td>
                  <td>{{$student->email}}</td>

                </tr>
                @endforeach






              </tbody>
            </table>
            <!-- ========== End table responsive ========== -->
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@include('libdash.foot')