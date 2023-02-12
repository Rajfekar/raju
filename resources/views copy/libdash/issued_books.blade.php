@include('libdash.head')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Issued Books</h1>
        <p>check your all time issued books report</p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Library</li>
        <li class="breadcrumb-item active"><a href="#"></a>Ibooks</li>
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
              <table class="table table-bodered table-striped table-hover" id="example4">
                <thead class="table-primary">
                  <tr>
                    <th scope="col">N</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">BookID</th>
                    <th scope="col">IDate</th>
                    <th scope="col">RDate</th>
                    <th scope="col">Fine</th>
                    <th scope="col">Action</th>
                    {{-- <th scope="col">Fine</th> --}}
                  </tr>
                </thead>
                <tbody>
                  @php
                  $n=1;
                  @endphp
                  @foreach($issueb as $d)
                  <tr>
                    <th scope='row'>{{$n++}}</th>
                    <th style="text-transform: uppercase;">{{$d->userid}}</th>
                    <td style="text-transform:uppercase;">{{$d->mname}}</td>
                    <td>
                      
                      @if($d->mtype == 0)
                      {{"STUDENT"}}
                      @elseif($d->mtype == 1)
                      {{"FACULTY"}}
                      @elseif($d->mtype == 2)
                      {{"LIBRARY"}}
                      @elseif($d->mtype == 3)
                      {{"PRINCIPAL"}}
                      @else
                      {{$d->mtype}}
                    @endif
                    
                    </td>
                    <td>{{$d->ibook}}</td>
                    <td>{{$d->ibookid}}</td>
                    <td>{{$d->idate}}</td>
                    <td>{{$d->rdate}}</td>
                    <td>
                    @if($d->demo1 == "Yes")
                    {{"paid"}}
                    @elseif($d->rdate <= $date = date('d-m-Y'))
                    {{00}}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +1 day")))
                    {{10}}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +2 day")))
                    {{20}}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +3 day")))
                    {{30}}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +4 day")))
                    {{40}}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +5 day")))
                    {{50}}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +6 day")))
                    {{60}}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +7 day")))
                    {{70}}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +8 day")))
                    {{80}}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +9 day")))
                    {{90}}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +10 day")))
                    {{100}}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +11 day")))
                    {{110 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +12 day")))
                    {{120 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +13 day")))
                    {{130 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +14 day")))
                    {{140 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +15 day")))
                    {{150 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +16 day")))
                    {{160 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +17 day")))
                    {{170 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +18 day")))
                    {{180 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +19 day")))
                    {{190 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +20 day")))
                    {{200 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +21 day")))
                    {{210 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +22 day")))
                    {{220 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +23 day")))
                    {{230 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +24 day")))
                    {{240 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +25 day")))
                    {{250 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +26 day")))
                    {{260 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +27 day")))
                    {{270 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +28 day")))
                    {{280 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +29 day")))
                    {{290 }}
                    @elseif($d->rdate == strftime("%d-%m-%Y", strtotime("$d->rdate +30 day")))
                    {{300 }}


                   
                        
                    @else
                    {{"300+"}}
                        
                    @endif
                    
               
                    </td>

                    <td>



                      @if($d->demo1 == "Yes")
                      <a class='btn btn-success disabled'>✅</a>
                      <a class='btn btn-danger disabled'>❌</a>
                      @else
                      <a href="{{url('/rit/libdashboard/issued_book/recieved/'.$d->ibookid.'/'.$d->idate.'/'.$d->userid)}}" class='btn btn-success'>✅</a>
                      <a href="{{url('/rit/libdashboard/issued_book/notrecieved/'.$d->userid)}}" class='btn btn-danger'>❌</a>

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
  </main>
@include('libdash.foot')