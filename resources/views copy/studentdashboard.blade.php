@include('head')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div style="float: center;" id="qrimage">
            
           
      </div>

    </div>
    <div class="col-md-8">

    </div>
  </div>
</div>
 
<div style="background-color:#ffefd5;" class="container">
  <h3> Welcome {{$member->name}}

  </h3><br>
 
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


  <br>
  <div class="row">
    <div class="leftside col-md-12">
      <div class="listleft">
        <h2>TOOLS</h2>


        <ul>
          <div class="row">

            <div class="col-md-3">
              <li><span class="span5"> <Button class="greenbtn" onclick="openpart('myaccount')"> <img class="icons" src="{{'/storage/students/'. $member->image}}" alt="images/icon/profile.png" width="30px" height="30px" /> My Account</Button></span></li>

            </div>
            <div class="col-md-3">
              <li><span class="span5"> <Button class="greenbtn" onclick="openpart('requestbook')"><img class="icons" src="images/icon/book.png" width="30px" height="30px" /> Request Book</Button></span></li>

            </div>
            <div class="col-md-3">
              <li><span class="span5"> <Button class="greenbtn" onclick="openpart('issuereport')"> <img class="icons" src="images/icon/monitoring.png" width="30px" height="30px" /> Book Issue Report</Button></span></li>

            </div>
            <div class="col-md-3">
              <li><span class="span5"><a href="{{route('slogout')}}"><Button class="greenbtn"><img class="icons" src="images/icon/logout.png" width="30px" height="30px" /> LOGOUT</Button></a></span></li>
            </div>

            <div class="col-md-3">
              <li><span class="span5"><a><Button onclick="createqr()" class="greenbtn"><img class="icons" src="images/icon/logout.png" width="30px" height="30px" /> QR GENERATE</Button></a></span></li>
             
            </div>

          </div>

        </ul>
      </div>



      <!-- left close-->
    </div>


    <!-- right side start -->
    <div class="rightside col-md-12">


      <!-- my account section -->

      <div id="myaccount" class="innerright portion">
        <div class="container">
          <div class="visible-print text-center">
            {{-- {!! QrCode::size(100)->generate(Request::url()); !!} --}}
            
            <p>Scan me to return to the original page.</p>
        </div>
        </div>
        <div class="listleft">
          <h2>MY ACCOUNT</h2>
        </div><br>
        <ul>
          
          <li><span> ACCOUNT-TYPE:- &nbsp;&nbsp;{{$member->type}} </span></li><br>
          <li><span> NAME:- &nbsp;&nbsp;{{$member->name}} </span></li><br>
          <li> LIBRARY ID:- &nbsp;&nbsp; <span >{{$member->libid}}</span></li><br>
          <li> <span> EMAIL:- &nbsp;&nbsp;{{$member->email}}</span></li><br>
          <li> <span>MOBILE:- &nbsp;&nbsp;{{$member->mobile}} </span></li>
          <li> <span>BRANCH:- &nbsp;&nbsp;{{$member->branch}} </span></li>
          <li> <span>SEMESTER:- &nbsp;&nbsp;{{$member->sem}} </span></li>


        </ul>
<input type="hidden"  id="studentqrdata" value="{{$member->libid}}">
<script>
  function createqr()
{
    var dataforqr=document.getElementById("studentqrdata").value;
    document.getElementById("qrimage").innerHTML="<img src='https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl="+encodeURIComponent(dataforqr)+"'/>";
    console.log(dataforqr);
}
</script>


      </div>
      <!-- my account section end-->


      <!-- issue report section -->

      <div id="issuereport" class="container portion" style="display:none">
        <div class="listleft">
          <h2>ISSUE BOOK RECORD</h2>
        </div>

        <div class="table-responsive">
          <table class="table table-hover table-bodered table-stiped" id="example4">
            <thead class="table-primary">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Book Name</th>
                <th scope="col">Book Author</th>
                <th scope="col">Book ID</th>
                <th scope="col">IDate</th>
                <th scope="col">RDate</th>
                <th scope="col">Fine</th>
              </tr>
            </thead>
            <tbody>
              @foreach($issueb as $issue)
              <tr>
                <th scope='row'>{{$issue->userid}}</th>

                <td>{{$issue->mname}}</td>
                <td>{{$issue->mtype}}</td>
                <td>{{$issue->ibook}}</td>
                <td>{{$issue->ibook}}</td>
                <td>{{$issue->ibookid}}</td>
                <td>{{$issue->idate}}</td>
                <td>{{$issue->rdate}}</td>
                <td>{{$issue->fine}}</td>

              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>


  <!-- ========== Start book record raj ========== -->
  <div id="requestbook" class="container portion" style="display:none">
    <!-- <Button class="greenbtn" >BOOK RECORD</Button> -->
    <div class="listleft">
      <br>
      <h2>BOOK RECORDS</h2>
    </div>

    <!-- ========== Start table raj responsive ========== -->

    <div class="table-responsive">
      <!-- ========== Start table raj example ========== -->

      <table id="example" class="table table-hover table-bodered table-striped">

        <thead class="table-primary">
          <tr>
            <th scope="col">N</th>
            <th scope="col">Book Id</th>
            <th scope="col">Image</th>
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
            <th>BK{{$book->branch}}.{{$book->bookid}}</th>
            <td><img src="{{'/storage/books/'. $book->image}}" alt="image" height="50px" width="50px" style="border-radius: 50%"></td>
            <td>{{$book->name}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->available}}</td>
            <td>{{$book->price}}</td>
            <td>
              <!-- ========== Start book delete edit button ========== -->

              <a href="{{url('studentdashboard/request')}}/{{$book->id}}/{{$member->libid}} "><button class='delete btn btn-sm btn-primary' id="delete">Request</button></a>
              <!-- ========== End book delete edit button ========== -->

            </td>
          </tr>
          @endforeach
          <!-- ========== End start for loop for books ========== -->

        </tbody>
      </table>
      <!-- ========== End table raj example ========== -->
    </div>
    <!-- ========== End table raj responsive ========== -->
  </div>
  <!-- ========== End book report raj ========== -->




      <!-- book record -->


      <div id="requestbo" class="container portion" style="display:none">
        <!-- <Button class="greenbtn" >BOOK RECORD</Button> -->
        <div class="listleft">
          <h2>BOOK RECORDS</h2>
        </div>

        <div class="table-responsive">
          <table class="table table-bodered table-striped" id="example">
            <thead class="table-primary">
              <tr>
                <th scope="col">Book Id</th>
                <th scope="col">Book Name</th>
                <th scope="col">Branch</th>
                <th scope="col">Quantity</th>
                <th scope="col">Available</th>
                <th scope="col">Rent</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($books as $book)
              <tr>
                <th scope='row'>{{$book->bookid}}</th>
                <td>{{$book->name}}</td>
                <td>{{$book->branch}}</td>
                <!-- <td>{{$book->price}}</td> -->
                <td>{{$book->quantity}}</td>
                <td>{{$book->quantity}}</td>
                <td>{{$book->quantity}}</td>
                <td>

                  <a href="{{url('studentdashboard/request')}}/{{$book->id}}/{{$member->libid}} "><button class='delete btn btn-sm btn-primary' id="delete">Request</button></a>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
      <!-- end book record -->

















      <!-- right -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</div>





@include('foot')