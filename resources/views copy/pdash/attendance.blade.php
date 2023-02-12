@include('pdash.head')
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
                <table class="table table-bodered table-striped table-hover" id="example">
                  <thead class="table-primary">
                    <tr>
                      <th scope="col">N</th>
                      <th scope="col">Image</th>
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
                      <td>
                        <a style="text-decoration: none; color:black;" href="#">
                            <!--<img style="height:40px" class="app-sidebar__user-avatar"  src="{{'/storage/students/'. $s->image}}" alt="img" >-->
                          <img src="{{'/storage/students/'. $b->demo2}}" alt="image" height="50px" width="50px" style="border-radius: 50%" onerror=this.src="{{'/images/profile.jfif'}}"></a>
                      </td>
                      <td>{{$b->name}}</td>
                      <td>{{$b->memberid}}</td>
                      <td>{{$b->department}}</td>
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

@include('pdash.foot')