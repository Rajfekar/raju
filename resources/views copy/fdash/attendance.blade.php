@include('fdash.head')
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
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
              <table class="table table-bodered table-striped table-hover" id="example6">
                <thead class="table-primary">
                  <tr>
                    <th scope="col">N</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">RollNo</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Date</th>
                    <th scope="col">Attendance</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i=1;
                  @endphp
                  @foreach($a as $b)
                  <tr>
                    <th scope='row'>{{$i++}}</th>
                    <td>
              
                            <img  class="app-sidebar__user-avatar"  src="{{'/storage/students/'. $b->demo2}}" alt="img" onerror=this.src="{{'/images/profile.jfif'}}" height="50px" width="50px" style="border-radius: 50%">
                      
                    </td>
                    <td>{{$b->name}}</td>
                    <td>{{$b->rollno}}</td>
                    <td>   @if($b->r2 == 0)
                      {{"CSE"}}
                      @elseif($b->r2 == 1)
                      {{"CIVIL"}}
                      @elseif($b->r2 == 2)
                      {{"EEE"}}
                      @elseif($b->r2 == 3)
                      {{"MECHANICAL"}}
                      @elseif($b->r2 == 4)
                      {{"ELECTRONICS"}}
                      @elseif($b->r2 == 5)
                      {{"BIOTECH"}}
                      @elseif($b->r2 == 6)
                      {{"THERMAL"}}
                      @elseif($b->r2 == 7)
                      {{"CHEMICAL"}}
                      @elseif($b->r2 == 8)
                      {{"IT"}}
                      @elseif($b->r2 == 9)
                      {{"ENVIRONMENTAL"}}
                      @elseif($b->r2 == 10)
                      {{"ENERGY MANAGMENT"}}
                      @else
                      {{$b->r2}}
                          
                      @endif
                     </td>
                   
                     <td>{{$b->r3}}</td>
                    <td>{{$b->subject}}</td>
                    <td>{{$b->date}}</td>
                    <td>
                      @if($b->r1 == 1)
                      {{"Present"}}
                      @else
                      {{"Absent"}}
                      @endif
                    
                    </td>
    
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
          </div>
        </div>
      </div>
    </div>

@include('fdash.foot')