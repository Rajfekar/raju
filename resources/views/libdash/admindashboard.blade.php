@include('head')
<!-- ========== Start main-container ========== -->
<div style="background-color:#ffefd5;" class="container">

  <!-- ========== Start main row ========== -->
  <div class="row">

    <!-- ========== Start leftside ========== -->
    <div class="leftside col-md-12">
      <p style="float: center;"> {{
        session()->get('user_name')}}</p>
        <p style="float: right;"> {{
          date("d-m-Y h:i A")}}</p>


      <!-- ========== Start listleft ========== -->
      <div class="listleft">
        <br>
        <h2>TOOLS🛠️</h2>
        <!-- ========== Start tools list ul ========== -->

        <ul>
          <!-- ========== Start ulrow ========== -->
          <div class="row">

            <!-- ========== Start button1 ========== -->
            <div class="col-md-3">
              <li><span class="span5"> <a href="#"><Button class="greenbtn" onclick="openpart('bookreport')"> <img class="icons" src="images/icon/open-book.png" width="30px" height="30px" /> BOOK REPORT</Button></a></span></li>

            </div>
            <!-- ========== End button1 ========== -->

            <!-- ========== Start button2 ========== -->
            <div class="col-md-3">
              <li><span class="span5"> <Button class="greenbtn" onclick="openpart('studentrecord')"> <img class="icons" src="images/icon/monitoring.png" width="30px" height="30px" /> STUDENT REPORT</Button></span></li>

            </div>


           
            <!-- ========== End button2 ========== -->

            <!-- ========== Start button3 ========== -->
            <div class="col-md-3">
              <li><span class="span5"> <Button class="greenbtn" onclick="openpart('addperson')"> <img class="icons" src="images/icon/add-user.png" width="30px" height="30px" /> ADD STUDENT</Button></span></li>

            </div>
            <!-- ========== End button3 ========== -->

            <!-- ========== Start button4 ========== -->



            <div class="col-md-3">
              <li><span class="span5"><Button class="greenbtn" onclick="openpart('addbook')"><img class="icons" src="images/icon/book.png" width="30px" height="30px" />ADD BOOK</Button></span></li>

            </div>
           
          
            <!-- ========== End button4 ========== -->
            

            <!-- ========== Start button5 ========== -->
            <div class="col-md-3">
              <li><span class="span5"><Button class="greenbtn" onclick="openpart('issuebook')"> <img class="icons" src="images/icon/test.png" width="30px" height="30px" /> ISSUE BOOK</Button> </span></li>

            </div>
            <!-- ========== End button5 ========== -->

            <!-- ========== Start button6 ========== -->
            <div class="col-md-3">
              <li><span class="span5"> <Button class="greenbtn" onclick="openpart('issuebookreport')"> <img class="icons" src="images/icon/checklist.png" width="30px" height="30px" /> ISSUE REPORT</Button><br></span></li>

            </div>
            <!-- ========== End button6 ========== -->

            <!-- ========== Start button7 ========== -->
            <div class="col-md-3">
              <li><span class="span5"><Button class="greenbtn" onclick="openpart('bookrequestapprove')"><img class="icons" src="images/icon/interview.png" width="30px" height="30px" /> BOOK REQUESTS</Button></span></li>

            </div>
            
            <!-- ========== End button7 ========== -->

            <!-- ========== Start button8 ========== -->
            <div class="col-md-3">
              <li><span class="span5"><Button class="greenbtn" onclick="openpart('attendance')"><img class="icons" src="images/icon/test.png" width="30px" height="30px" />ATTENDANCE</Button></span></li>

            </div>
            <!-- ========== End button8 ========== -->

            <!-- ========== Start button9 ========== -->
            <div class="col-md-3">
              <li><span class="span5"><Button class="greenbtn" onclick="openpart('noticeboard')"><img class="icons" src="images/icon/open-book.png" width="30px" height="30px" />Notice</Button></span></li>

            </div>
            <!-- ========== End button9 ========== -->

            <!-- ========== Start button10 ========== -->
            <div class="col-md-3">
              <li><span class="span5"><a href="{{route('alogout')}}"><Button class="greenbtn"><img class="icons" src="images/icon/logout.png" width="30px" height="30px" /> LOGOUT</Button></a></span></li>

            </div>
            <!-- ========== End button10 ========== -->

            <!-- ========== Start button11 ========== -->
            <div class="col-md-6">
              <li><span class="span5"><Button class="greenbtn" onclick="openpart('regrequest')"><img class="icons" src="images/icon/monitoring.png" width="30px" height="30px" />REGISTRATION REQUESTS</Button></span></li>

            </div>
            <!-- ========== End button11 ========== -->

          </div>
          <!-- ========== End ulrow ========== -->

        </ul>
        <!-- ========== End tools list ul========== -->

      </div>
      <!-- ========== End listleft ========== -->

    </div>
    <!-- ========== End leftside col-md-12========== -->






    <!-- ========== Start rightside section ========== -->
    <div class="rightside col-md-12">





      <!-- ========== Start member record table by raj ========== -->
      <div id="studentrecord" class="container  portion">
        <!-- ========== Start session notification ========== -->

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
        <!-- ========== End session notification ========== -->

        <!-- ========== Start list  left of student record ========== -->

        <div class="listleft">
          <br>
          <h2>STUDENT RECORD👨‍💻</h2>
        </div>
        <!-- ========== End list  left of student record ========== -->

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
                <th scope="col">Roll No.</th>
                <th scope="col">Brach</th>
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
                <td style="text-transform:uppercase;"><a style="text-decoration:none; color:black;" href="{{url('admindashboard/attendancenow')}}/{{$student->libid}}">{{$student->libid}}</a></td>
                <td>
                  <a style="text-decoration: none; color:black;" href="{{url('admindashboard/issuebooknow')}}/{{$student->id}}/{{$student->libid}}">
                    <img src="{{'/storage/students/'. $student->image}}" alt="image" height="50px" width="50px" style="border-radius: 50%"></a>
           </td>
                <td style="text-transform:uppercase;">{{$student->name}}</td>
                <td>{{$student->type}}</td>
                <td>{{$student->rollno}}</td>
                <td>{{$student->branch}}</td>
                <td>{{$student->sem}}</td>
                <td>{{$student->demo1}}</td>
                <td>{{$student->demo2}}</td>
                <td>{{$student->email}}</td>


              </tr>
              @endforeach




  

            </tbody>
          </table>
          <!-- ========== End table responsive ========== -->
        </div>
      </div>

      <!-- ========== End member record table by raj ========== -->




      <!-- ========== Start book record raj ========== -->
      <div id="bookreport" class="container portion" style="display: none;">
        <!-- <Button class="greenbtn" >BOOK RECORD</Button> -->
        <div class="listleft">
          <br>
          <h2>BOOK RECORDS🥰</h2>
        </div>

        <!-- ========== Start table raj responsive ========== -->

        <div class="table-responsive">
          <!-- ========== Start table raj example ========== -->

          <table id="example" class="table table-hover table-bodered table-striped">

            <thead class="table-primary">
              <tr>
                <th scope="col">N</th>
                <th scope="col">Book Id</th>
                <!--<th scope="col">Image</th>-->
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
                <th>
                  @php
                  if($book->branch == "CSE"){
                    echo "CS";

                  }
                  elseif($book->branch == "CIVIL"){
                    echo "CV";

                  }
                  elseif($book->branch == "CHEMICAL"){
                    echo "CH";

                  }
                  elseif($book->branch == "MECHANICAL"){
                    echo "MECH";

                  }
                  elseif($book->branch == "BIOTECH"){
                    echo "BT";

                  }
                  elseif($book->branch == "ET&T"){
                    echo "ET";

                  }
                  elseif($book->branch == "IT"){
                    echo "IT";

                  }
                  else {
                    echo " ";
                  }
                 
                  @endphp
                  
                  BK.{{$book->bookid}}</th>
                <!--<td>-->
                <!--     <a style="text-decoration: none; color:black;" href="{{url('admindashboard/')}}">-->
                <!--    <img src="{{'/storage/books/' . $book->image}}" alt="image" height="50px" width="50px" style="border-radius: 50%"></a>-->
                <!--    </td>-->
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->available}}</td>
                <td>{{$book->price}}</td>
                <td>
                  <!-- ========== Start book delete edit button ========== -->

                  <div class="row">
                    <div class="col-6">
                      <a name="edit" id="edit" class="btn btn-success" href="{{url('admindashboard/editbook')}}/{{$book->bookid}}" role="button">Edit</a>
                    </div>

                    <div class="col-6">
                      <a name="delete" id="delete" class="btn btn-danger disabled" href="{{url('admindashboard/deletebook')}}/{{$book->bookid}}" role="button">❌</a>
                    </div>

                  </div>
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




      <!-- ========== Start container-portion-newbook ========== -->
      <div id="addbook" class="container  portion" style="display: none;">

        <!-- ========== Start listleft ========== -->
        <div class="listleft">
          <br>
          <h2>ADD NEW BOOK📓</h2>

          <!-- ========== Start formnewbook ========== -->
          <form action="{{route('addbook')}}" method="post" enctype="multipart/form-data">
            <!-- ========== Start session notification raj ========== -->

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

            @csrf
            <label>Book Name:</label><input type="text" name="name" value="{{old('name')}}" />
            @error('name')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror
            </br>
            <label>Book Id:</label><input type="text" name="bookid" value="{{old('bookid')}}" />
            @error('bookid')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror
            </br>
            <label>Detail:</label><input type="text" name="detail" value="{{old('detail')}}" /> @error('detail')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror</br>
            <label>Author:</label><input type="text" name="author" value="{{old('author')}}" /> @error('author')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror</br>
            <label>Publication</label><input type="text" name="publication" value="{{old('publication')}}" /> @error('publication')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror</br>
            <label>Branch:</label>

            <!-- ========== Start ul-raj ========== -->
            <ul>

              <!-- ========== Start ul row raj ========== -->
              <div class="row">

                <!-- ========== Start single section ========== -->
                <div class="left col-md-4">
                  <li><span class="span50">CSE <input onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id="" value="CSE" checked></span></li>
                  <li><span class="span60">MECH <input value="MECH" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
                  <li><span class="span7rcheckbox0">CIVIL <input value="CIVIL" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>

                </div>
                <!-- ========== End single section ========== -->

                <!-- ========== Start single section ========== -->
                <div class="right col-md-4">
                  <li><span class="span80">BIOTECH <input value="BIOTECH" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
                  <li><span class="span8rcheckbox0">ET&T <input value="ET&T" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
                  <li><span class="span8rcheckbox0">CHEMICAL <input value="CHEMICAL" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
                </div>
                <!-- ========== End single section ========== -->

                <!-- ========== Start single section ========== -->
                <div class="right col-md-4">
                  <li><span class="span80">ELECTRICAL <input value="ELECTRICAL" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
                  <li><span class="span80">EEE <input value="EEE" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
                  <li><span class="span80">IT <input value="IT" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
                </div>
                <!-- ========== End single section ========== -->

              </div>
              <!-- ========== End ul row raj ========== -->

              <div>
                <span id="rnotvalidc" style="color:red"> </span>
              </div>

            </ul>
            <!-- ========== End ul-raj ========== -->


            </br>
            <label>Price:</label><input type="number" name="price" value="{{old('price')}}" /> @error('price')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror</br>
            <label for="available">Available:</label>
            <select name="available">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>

            <br>
            <label>Book Photo:</label><input type="file" name="image" /></br>

            @error('image')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror</br>

            <input type="submit" value="SUBMIT" />


          </form>
          <!-- ========== End formnewbook ========== -->


        </div>
        <!-- ========== End listleft ========== -->

      </div>

      <!-- ========== End container-portion-newbook ========== -->







      <!-- ========== Start book request ========== -->
      <div id="bookrequestapprove" class="container portion" style="display:none;">
        <div class="listleft"><br>
          <h2>BOOK REQUESTS🤩</h2>
        </div>

        <!-- ========== Start table by raj responsive ========== -->

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
                  <a name="" id="" class="btn btn-success" href="{{url('admindashboard/approve')}}/{{$r->bookid}}/{{$r->userid}}" role="button">Approve</a>
                  <a name="" id="" class="btn btn-danger" href="{{url('admindashboard/reject')}}/{{$r->bookid}}/{{$r->userid}}" role="button">Reject</a>
                </td>
              </tr>
              @endforeach


            </tbody>
          </table>
          <!-- ========== End tablefor book requist ========== -->

        </div>
        <!-- ========== End table by raj responsive ========== -->

      </div>
      <!-- ========== End book request ========== -->




      <!-- ========== Start add a person  ========== -->
      <div id="addperson" class="container portion" style="display:none;">

        <!-- ========== Start listleft addperson ========== -->
        <div class="listleft"><br>
          <h2>ADD PERSON🐼</h2>
          <!-- ========== Start form for addperson ========== -->

          <form action="{{route('addmember')}}" method="post" class="signin" enctype="multipart/form-data">

            @csrf
            <label>Library Id:</label><input type="text" name="libid" value="{{old('libid')}}" />
            @error('libid')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>Full Name:</label><input type="text" name="name" value="{{old('name')}}" />
            @error('name')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>Mobile Number:</label><input type="text" name="mobile" value="{{old('mobile')}}" />
            @error('mobile')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror
            </br>

            <br>
            <label>Roll Number:</label><input type="text" name="rollno" value="{{old('rollno')}}" />
            @error('mobile')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror
            </br>

            <label>Email:</label><input type="text" name="email" value="{{old('email')}}" />
            @error('email')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror
            </br>
            <label for="typw">Choose type:</label>
            <select id="memtype" name="type">
              <option value="Student">Student</option>
              <option value="Faculty">Faculty</option>
            </select>
            <br>
            <label>Branch:</label>

            <!-- ========== Start ul of addperson ========== -->

            <ul>
              <!-- ========== Start ulrow ========== -->

              <div class="row">
                <div class="left col-md-4">
                  <li><span class="span50">CSE <input onclick="return rajcheck()" style="display:block;" type="checkbox" name="rcheckbox" id="" value="CSE" checked></span></li>
                  <li><span class="span60">MECH <input value="MECH" onclick="return rajcheck()" style="display:block;" type="checkbox" name="rcheckbox" id=""></span></li>
                  <li><span class="span7rcheckbox0">CIVIL <input value="CIVIL" onclick="return rajcheck()" style="display:block;" type="checkbox" name="rcheckbox" id=""></span></li>

                </div>
                <div class="right col-md-4">
                  <li><span class="span80">BIOTECH <input value="BIOTECH" onclick="return rajcheck()" style="display:block;" type="checkbox" name="rcheckbox" id=""></span></li>
                  <li><span class="span8rcheckbox0">ET&T <input value="ET&T" onclick="return rajcheck()" style="display:block;" type="checkbox" name="rcheckbox" id=""></span></li>
                  <li><span class="span8rcheckbox0">CHEMICAL <input value="CHEMICAL" onclick="return rajcheck()" style="display:block;" type="checkbox" name="rcheckbox" id=""></span></li>
                </div>
                <div class="right col-md-4">
                  <li><span class="span80">ELECTRICAL <input value="ELECTRICAL" onclick="return rajcheck()" style="display:block;" type="checkbox" name="rcheckbox" id=""></span></li>
                  <li><span class="span80">EEE <input value="EEE" onclick="return rajcheck()" style="display:block;" type="checkbox" name="rcheckbox" id=""></span></li>
                  <li><span class="span80">IT <input value="IT" onclick="return rajcheck()" style="display:block;" type="checkbox" name="rcheckbox" id=""></span></li>
                </div>
              </div>
              <!-- ========== End ulrow ========== -->

              <div>
                <span id="rnotvalid" style="color:red"> </span>
              </div>

            </ul>
            <!-- ========== End ul of addperson ========== -->

            </br>
            <label for="sem">Semester:</label>
            <select id="sem"  name="sem">
              <option value="1">1 Semester</option>
              <option value="2">2 Semester</option>
              <option value="3">3 Semester</option>
              <option value="4">4 Semester</option>
              <option value="5">5 Semester</option>
              <option value="6">6 Semester</option>
              <option value="7">7 Semester</option>
              <option value="8">8 Semester</option>
            </select>
            </br>
            <label>Pasword:</label><input type="text" name="password" />
            @error('password')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror
            </br>
            <label>Photo:</label><input type="file" name="image" value="{{old('image')}}" />
            @error('image')
            <span style="color:red;">{{ $message }}</span>
            @enderror
            </br>
            <br>

            <input type="submit" value="SUBMIT" />
          </form>
          <!-- ========== End form for addperson ========== -->

        </div>
        <!-- ========== End listleft addperson ========== -->

      </div>

      <!-- ========== End add a person  ========== -->




      <!-- ========== Start issuebook report by raj ========== -->

      <div id="issuebookreport" class="container portion" style="display:none">
        <div class="listleft">
          <h2>BOOK📚 ISSUED RECORD🎊</h2>
        </div>
        <br>

        <div class="table-responsive">

          <table class="table table-bodered table-striped table-hover" id="example4">
            <thead class="table-primary">
              <tr>
                <th scope="col">N</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Book Name</th>
                <th scope="col">Book ID</th>
                <th scope="col">IDate</th>
                <th scope="col">RDate</th>
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
                <td>{{$d->mtype}}</td>
                <td>{{$d->ibook}}</td>
                <td>{{$d->ibookid}}</td>
                <td>{{$d->idate}}</td>
                <td>{{$d->rdate}}</td>
                <td>

                  @php
                  if ($d->demo1 == "Yes") {
                    # code...
                  echo "<a class='btn btn-success disabled'>";
                  echo "✅";
                  echo "</a>";
                  echo "<a class='btn btn-danger disabled'>";
                  echo "❌";
                  echo "</a>";

                  }else {
                    echo "<a href='admindashboard/recieved/$d->ibookid/$d->idate/$d->userid' class='btn btn-success'>";
                  echo "✅";
                  echo "</a>";
                  echo "<a href='admindashboard/notrecieved/$d->userid' class='btn btn-danger'>";
                  echo "❌";
                  echo "</a>";
                  }
                  @endphp
                 
                  
                </td>
                {{-- <td>{{$d->fine}}</td> --}}

              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
      {{-- <!-- ========== End issuebook report by raj ========== --> --}}





      <!-- ========== Start issuebook ========== -->

      <div id="issuebook" style="display:none" class="container  portion">
        <div class="listleft"><br>
          <h2>ISSUE BOOK🪪</h2>
           <!-- ========== Start form for issuebook ========== -->

          <form action="{{route('issuebook')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-5">
                <label for="booksDataList" class="form-label">Select Book:</label>
               <input name="book" class="form-control" list="datalistOptions1" id="booksDataList" placeholder="Enter Book...">
              <datalist id="datalistOptions1">
            @foreach($booksr as $bname)
           <option value='{{$bname->bookid}}'>{{$bname->bookid}}&nbsp;&nbsp;{{$bname->name}}</option>
           @endforeach
              </datalist>
               


              </div>
             
              <div class="col-md-5">
                <label for="studentsDataList" class="form-label">Select Student:</label>
                <input  name="userselect" class="form-control" list="datalistOptions2" id="studentsDataList" placeholder="Enter Book...">
                <datalist id="datalistOptions2">
                  @foreach($member as $mname)
                  <option value='{{$mname->libid}}'>{{$mname->libid}}&nbsp;&nbsp;{{$mname->name}}</option>
                  @endforeach
                </datalist>
               

              </div>
              <div class="col-md-2">
                <label>Days</label> <input value="15" type="number" name="days" /><br><br>


              </div>

              <div class="col-md-3">
                <br><br>
                <input class="btn btn-primary" type="submit" value="SUBMIT" />
              </div>
            </div>
          </form>
          <!-- ========== End form for issuebook ========== -->

        </div>
      </div>
      <!-- ========== End issuebook ========== -->





      <!-- ========== Start bookdetails ========== -->

      <div id="noticeboard" class="container portion" style="display:none">

        <div class="listleft"><br>
          <h2>Notice Board🎡</h2>
        </div>
        <br>
        <div class="table-responsive">

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

                  @php
            
                    # code...
                  echo "<a class='btn btn-success' href='admindashboard/editnotice/$d->id'>";
                  echo "Edit";
                  echo "</a>";
            
                  @endphp
                 
                  
                </td>
                {{-- <td>{{$d->fine}}</td> --}}

              </tr>
              @endforeach

            </tbody>
          </table>
        </div>



        
      </div>
      <!-- ========== End bookdetails ========== -->


      <!-- ========== Start attendence book rrecord ========== -->

      <div id="attendance" class="container portion" style="display:none">
        <div class="listleft">
          <h2>ATTENDANCE BOOK📚 </h2>
        </div>
        <br>

        <div class="table-responsive">
          <table class="table table-bodered table-striped table-hover" id="example5">
            <thead class="table-primary">
              <tr>
                <th scope="col">N</th>
                <th scope="col">Name</th>
                <th scope="col">Member ID</th>
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
                <td style="text-transform:uppercase;">{{$b->name}}</td>
                <td style="text-transform:uppercase;">{{$b->memberid}}</td>
                <td style="text-transform:uppercase;">{{$b->department}}</td>
                <td >{{$b->intime}}</td>
                <td>{{$b->outtime}}</td>
                <td>{{$b->demo1}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- ========== End attendence book rrecord ========== -->

      <!-- registration request -->
      {{--  --}}
      <div id="regrequest"  class="container portion" style="display:none">
        <div class="listleft">
          <h2>REGISTRATION REQUESTS📚 </h2>
        </div>
        <br>
        <div class="table-responsive">

          <table class="table table-bodered table-striped table-hover" id="example10">
            <thead class="table-primary">
              <tr>
                <th scope="col">N</th>
                <th scope="col">Library ID</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
                {{-- <th scope="col">Fine</th> --}}
              </tr>
            </thead>
            <tbody>
              @php
              $n=1;
              @endphp
              @foreach($u as $d)
              <tr>
                <th scope='row'>{{$n++}}</th>
                <th style="text-transform: uppercase;">{{$d->libid}}</th>
                <td style="text-transform:uppercase;">{{$d->name}}</td>
                <td>{{$d->type}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->demo4}}</td>
               
                <td>

                  @php
                  if ($d->demo1 == "Yes") {
                    # code...
                  echo "<a class='btn btn-success disabled'>";
                  echo "✅";
                  echo "</a>";
                  echo "<a class='btn btn-danger disabled'>";
                  echo "❌";
                  echo "</a>";

                  }else {
                    echo "<a href='admindashboard/approveuser/$d->libid' class='btn btn-success'>";
                  echo "✅";
                  echo "</a>";
                  echo "<a href='admindashboard/rejectuser/$d->libid' class='btn btn-danger'>";
                  echo "❌";
                  echo "</a>";
                  }
                  @endphp
                 
                  
                </td>
                {{-- <td>{{$d->fine}}</td> --}}

              </tr>
              @endforeach

            </tbody>
          </table>
        </div>


      
      </div>
      <!-- end of reqrequest -->




    </div>
    <!-- ========== End rightside section ========== -->



  </div>
  <!-- ========== End  main row ========== -->



</div>
<!-- ========== End main-container ========== -->






@include('foot')