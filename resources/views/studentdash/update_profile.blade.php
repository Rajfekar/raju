@include('studentdash.head')

<main class="app-content">
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
    <form method="post" action="{{url('/rit/studentdashboard/update_profile/updatedata')}}" enctype="multipart/form-data">
        @csrf
    <div class="card shadow mb-4">
        <div class="card-body">
          <div class="row create_ngo">
              {{-- toggle button --}}
              <div class=" toggle col-md-12">
                @if($s->status != 0)
           <p style="color:red;">Note: Update Your Details Carefully...</p>
@endif
                <h6>Account Status</h6>
@if($s->status == 0)
                <label style="color: green;">Active
                  <input type="checkbox" checked><span class="button-indecator"></span>
                </label>
                @else
                <label style="color:red;">Deactive
                     <input type="checkbox"><span class="button-indecator"></span>
                     </label>
@endif
               </div>
              
      
              <div class="col-md-3">
                <h6>College ID</h6>
                <input type="hidden" name="collegeid" id="ContentPlaceHolder1_hf_vtm_id" value="{{$s->collegeid}}">
                <input name="cid2" type="text" value="{{$s->collegeid}}" id="ContentPlaceHolder1_txt_vtm_first_name" class="form-control form-control-user" disabled>
                @error('collegeid')
                <div style="color:red;">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-3">
                  <h6>Library ID</h6>
                  <input name="libid2" type="text" value="{{$s->libid}}" id="ContentPlaceHolder1_txt_vtm_last_name" class="form-control form-control-user" disabled>
                  <input name="libid" type="hidden" value="{{$s->libid}}" id="ContentPlaceHolder1_txt_vtm_last_name" class="form-control form-control-user">
                  @error('libid')
                  <div style="color:red;">{{ $message }}</div>
                  @enderror
                  
                </div>

                {{-- <div class="col-md-3">
                  <h6>Type</h6>
                  <select class="form-control" name="sem" id="" disabled>
                    
                      <option>Select Type</option>
                      <option value="0" selected>STUDENT</option>
                      <option value="1">FACULTY</option>
                      <option value="2">LIBRARIAN</option>
                      <option value="3">PRINCIPAL</option>
                      <option value="4">ACCOUNTENT</option>
                      <option value="5">HR MANAGER</option>
                      <option value="6">T&P</option>
                      <option value="7">EMPLOYEE</option>
                     
                  </select>
                </div> --}}


                <div class="col-md-3">
                  <h6>Full Name</h6>
                  <input type="hidden" name="name" id="ContentPlaceHolder1_hf_vtm_id" value="{{$s->name}}">
                  <input name="ctl00$ContentPlaceHolder1$" type="text" value="{{$s->name}}" id="ContentPlaceHolder1_txt_vtm_first_name" class="form-control form-control-user" disabled>
                 

              </div>
                {{-- <div class="col-md-3">
                  <h6>Enrollment ID</h6>
                  <input name="enrolmentid" type="text" value="{{$s->enrolmentid}}" id="ContentPlaceHolder1_txt_vtm_last_name" class="form-control form-control-user">
                  @error('enrolmentid')
                  <div style="color:red;">{{ $message }}</div>
                  @enderror
                  
                </div> --}}
                {{-- <div class="col-md-3">
                    <h6>Roll No.</h6>
                    <input name="rollno" type="text" value="{{$s->rollno}}" id="ContentPlaceHname" class="form-control form-control-user" placeholder="enter your roll no.">
                    @error('rollno')
                    <div style="color:red;">{{ $message }}</div>
                    @enderror

                </div> --}}
              

                {{-- <div class="col-md-3">
                  <h6>Mobile Number</h6>
                  <input name="mobile" type="text" value="{{$s->mobile}}" id="ContentPlaceHolder1_txt_vtm_primary_ctn" class="form-control form-control-user">
                  @error('mobile')
                <div style="color:red;">{{ $message }}</div>
                @enderror
              </div> --}}

                {{-- <div class="col-md-3">
                    <h6>Email</h6>
                    <input name="email" type="email" value="{{$s->email}}" id="ContentPlace" class="form-control form-control-user">
                    @error('email')
                   <div style="color:red;">{{ $message }}</div>
                    @enderror
                </div> --}}

                <div class="col-md-3">
                  <h6>Gender</h6>

                  <!--Radio Button Markup-->
                  <div class="animated-radio-button">
                    @if($s->gender == 0)
                      <label>
                          <input value="0"
                              type="radio"
                              name="gender"
                           checked/><span class="label-text"
                              >Male</span
                          >
                      </label>

                      <label>
                        <input value="1"
                            type="radio"
                            name="gender"
                        /><span class="label-text"
                            >Female</span
                        >
                    </label>
                    @else
                    <label>
                      <input value="0"
                          type="radio"
                          name="gender"
                      /><span class="label-text"
                          >Male</span
                      >
                  </label>

                  <label>
                    <input value="1"
                        type="radio"
                        name="gender"
                    checked/><span class="label-text"
                        >Female</span
                    >
                </label>
                @endif

                   
                  </div>
                  @error('gender')
                  <div style="color:red;">{{ $message }}</div>
                  @enderror
                 
              </div>

             

              <div class="col-md-3">
                <h6>Course</h6>
@if($s->status != 0)
                <select class="form-control" name="course" id="">
                  @if($s->course == 0)
                    <option value="">Select Course</option>
                    <option value="0" selected>B.Tech</option>
                    <option value="1">M.Tech</option>
                   @elseif($s->course == 1)
                   <option value="">Select Course</option>
                    <option value="0">B.Tech</option>
                    <option value="1" selected>M.Tech</option>
                    @else
                    <option value="">Select Course</option>
                    <option value="0">B.Tech</option>
                    <option value="1">M.Tech</option>
                    @endif

                    
                </select>
@else
 
                   <input type="hidden" name="course" id="ContentPlaceHolder1_hf_vtm_id" value="{{$s->course}}">
                   <input name="ctl00$ContentPlaceHolder1$" type="text" value="
                   @if($s->course == 0)
                   {{"B.Tech"}}
                   @elseif($s->course == 1)
                   {{"M.Tech"}}
                   @else
                   {{" "}}
                   @endif
                   
                   " id="ContentPlaceHolder1_txt_vtm_first_name" class="form-control form-control-user" disabled>
 
@endif

                @error('course')
                <div style="color:red;">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-3">
                <h6>Branch</h6>
@if($s->status != 0)
                <select class="form-control" name="branch" id="">
                  @if($s->branch == 0)
                    <option value="">Select Branch</option>
                    <option value="0" selected>CSE</option>
                    <option value="1">CIVIL</option>
                    <option value="2">EEE</option>
                    <option value="3">MECHANICAL</option>
                    <option value="4">ELECTRONICS</option>
                    <option value="5">BIOTECH</option>
                    <option value="6">THERMAL</option>
                    <option value="7">CHEMICAL</option>
                    <option value="8">IT</option>
                    <option value="9">ENVIRONMENTAL</option>
                    <option value="10">ENERGY MANAGMENT</option>
                    @elseif($s->branch == 1)
                    <option value="">Select Branch</option>
                    <option value="0">CSE</option>
                    <option value="1" selected>CIVIL</option>
                    <option value="2">EEE</option>
                    <option value="3">MECHANICAL</option>
                    <option value="4">ELECTRONICS</option>
                    <option value="5">BIOTECH</option>
                    <option value="6">THERMAL</option>
                    <option value="7">CHEMICAL</option>
                    <option value="8">IT</option>
                    <option value="9">ENVIRONMENTAL</option>
                    <option value="10">ENERGY MANAGMENT</option>
                    @elseif($s->branch == 2)
                    <option value="">Select Branch</option>
                    <option value="0">CSE</option>
                    <option value="1">CIVIL</option>
                    <option value="2" selected>EEE</option>
                    <option value="3">MECHANICAL</option>
                    <option value="4">ELECTRONICS</option>
                    <option value="5">BIOTECH</option>
                    <option value="6">THERMAL</option>
                    <option value="7">CHEMICAL</option>
                    <option value="8">IT</option>
                    <option value="9">ENVIRONMENTAL</option>
                    <option value="10">ENERGY MANAGMENT</option>
                    @elseif($s->branch == 3)
                    <option value="">Select Branch</option>
                    <option value="0">CSE</option>
                    <option value="1">CIVIL</option>
                    <option value="2">EEE</option>
                    <option value="3" selected>MECHANICAL</option>
                    <option value="4">ELECTRONICS</option>
                    <option value="5">BIOTECH</option>
                    <option value="6">THERMAL</option>
                    <option value="7">CHEMICAL</option>
                    <option value="8">IT</option>
                    <option value="9">ENVIRONMENTAL</option>
                    <option value="10">ENERGY MANAGMENT</option>
                    @elseif($s->branch == 4)
                    <option value="">Select Branch</option>
                    <option value="0">CSE</option>
                    <option value="1">CIVIL</option>
                    <option value="2">EEE</option>
                    <option value="3">MECHANICAL</option>
                    <option value="4" selected>ELECTRONICS</option>
                    <option value="5">BIOTECH</option>
                    <option value="6">THERMAL</option>
                    <option value="7">CHEMICAL</option>
                    <option value="8">IT</option>
                    <option value="9">ENVIRONMENTAL</option>
                    <option value="10">ENERGY MANAGMENT</option>
                    @elseif($s->branch == 5)
                    <option value="">Select Branch</option>
                    <option value="0">CSE</option>
                    <option value="1">CIVIL</option>
                    <option value="2">EEE</option>
                    <option value="3">MECHANICAL</option>
                    <option value="4">ELECTRONICS</option>
                    <option value="5" selected>BIOTECH</option>
                    <option value="6">THERMAL</option>
                    <option value="7">CHEMICAL</option>
                    <option value="8">IT</option>
                    <option value="9">ENVIRONMENTAL</option>
                    <option value="10">ENERGY MANAGMENT</option>
                    @elseif($s->branch == 6)
                    <option value="">Select Branch</option>
                    <option value="0">CSE</option>
                    <option value="1">CIVIL</option>
                    <option value="2">EEE</option>
                    <option value="3">MECHANICAL</option>
                    <option value="4">ELECTRONICS</option>
                    <option value="5">BIOTECH</option>
                    <option value="6" selected>THERMAL</option>
                    <option value="7">CHEMICAL</option>
                    <option value="8">IT</option>
                    <option value="9">ENVIRONMENTAL</option>
                    <option value="10">ENERGY MANAGMENT</option>
                    @elseif($s->branch ==7)
                    <option value="">Select Branch</option>
                    <option value="0">CSE</option>
                    <option value="1">CIVIL</option>
                    <option value="2">EEE</option>
                    <option value="3">MECHANICAL</option>
                    <option value="4">ELECTRONICS</option>
                    <option value="5">BIOTECH</option>
                    <option value="6">THERMAL</option>
                    <option value="7" selected>CHEMICAL</option>
                    <option value="8">IT</option>
                    <option value="9">ENVIRONMENTAL</option>
                    <option value="10">ENERGY MANAGMENT</option>
                    @elseif($s->branch == 8)
                    <option value="">Select Branch</option>
                    <option value="0" >CSE</option>
                    <option value="1">CIVIL</option>
                    <option value="2">EEE</option>
                    <option value="3">MECHANICAL</option>
                    <option value="4">ELECTRONICS</option>
                    <option value="5">BIOTECH</option>
                    <option value="6">THERMAL</option>
                    <option value="7">CHEMICAL</option>
                    <option value="8"selected>IT</option>
                    <option value="9">ENVIRONMENTAL</option>
                    <option value="10">ENERGY MANAGMENT</option>
                    @elseif($s->branch == 9)
                    <option value="">Select Branch</option>
                    <option value="0" >CSE</option>
                    <option value="1">CIVIL</option>
                    <option value="2">EEE</option>
                    <option value="3">MECHANICAL</option>
                    <option value="4">ELECTRONICS</option>
                    <option value="5">BIOTECH</option>
                    <option value="6">THERMAL</option>
                    <option value="7">CHEMICAL</option>
                    <option value="8">IT</option>
                    <option value="9" selected>ENVIRONMENTAL</option>
                    <option value="10" >ENERGY MANAGMENT</option>

                    @elseif($s->branch == 10)
                    <option value="">Select Branch</option>
                    <option value="0" >CSE</option>
                    <option value="1">CIVIL</option>
                    <option value="2">EEE</option>
                    <option value="3">MECHANICAL</option>
                    <option value="4">ELECTRONICS</option>
                    <option value="5">BIOTECH</option>
                    <option value="6">THERMAL</option>
                    <option value="7">CHEMICAL</option>
                    <option value="8">IT</option>
                    <option value="9">ENVIRONMENTAL</option>
                    <option value="10" selected>ENERGY MANAGMENT</option>
                    @else
                    <option value="" selected>Select Branch</option>
                    <option value="0" >CSE</option>
                    <option value="1">CIVIL</option>
                    <option value="2">EEE</option>
                    <option value="3">MECHANICAL</option>
                    <option value="4">ELECTRONICS</option>
                    <option value="5">BIOTECH</option>
                    <option value="6">THERMAL</option>
                    <option value="7">CHEMICAL</option>
                    <option value="8">IT</option>
                    <option value="9">ENVIRONMENTAL</option>
                    <option value="10" >ENERGY MANAGMENT</option>

                    @endif


                </select>
@else
 
                <input type="hidden" name="branch" id="ContentPlaceHolder1_hf_vtm_id" value="{{$s->branch}}">
                <input name="ctl00$ContentPlaceHolder1$" type="text" value="
                @if($s->branch == 0) {{"CSE"}}
                @elseif($s->branch == 1) {{"CIVIL"}}
                @elseif($s->branch == 2) {{"EEE"}}
                @elseif($s->branch == 3)
                {{"MECHANICAL"}} @elseif($s->branch
                == 4) {{"ELECTRONICS"}}
                @elseif(sb->branch == 5)
                {{"BIOTECH"}} @elseif($s->branch ==
                6) {{"THERMAL"}} @elseif($s->branch
                == 7) {{"CHEMICAL"}}
                @elseif($s->branch == 8) {{"IT"}}
                @elseif($s->branch == 9)
                {{"ENVIRONMENTAL"}}
                @elseif($s->branch == 10) {{"ENERGY
                MANAGMENT"}} @else {{$s->branch}}
                @endif
                " id="ContentPlaceHolder1_txt_vtm_first_name" class="form-control form-control-user" disabled>

@endif

                @error('branch')
                <div style="color:red;">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-3">
                <h6>Semester</h6>
@if($s->status != 0)
                <select class="form-control" name="sem" id="">

                  @if($s->sem == "1")



                  <option value="1" selected>1st Semester</option>
                  <option value="2">2st Semester</option>
                  <option value="3">3st Semester</option>
                  <option value="4">4st Semester</option>
                  <option value="5">5st Semester</option>
                  <option value="6">6st Semester</option>
                  <option value="7">7st Semester</option>
                  <option value="8">8st Semester</option>
                
          
                  @elseif($s->sem == "2")


                    <option value="1" >1st Semester</option>
                    <option value="2" selected>2st Semester</option>
                    <option value="3">3st Semester</option>
                    <option value="4">4st Semester</option>
                    <option value="5">5st Semester</option>
                    <option value="6">6st Semester</option>
                    <option value="7">7st Semester</option>
                    <option value="8">8st Semester</option>
                  
                  
                  @elseif($s->sem == "3")


                    <option value="1" >1st Semester</option>
                    <option value="2">2st Semester</option>
                    <option value="3" selected>3st Semester</option>
                    <option value="4">4st Semester</option>
                    <option value="5">5st Semester</option>
                    <option value="6">6st Semester</option>
                    <option value="7">7st Semester</option>
                    <option value="8">8st Semester</option>
                  
                  
                  @elseif($s->sem == "4")


                    <option value="1" >1st Semester</option>
                    <option value="2">2st Semester</option>
                    <option value="3">3st Semester</option>
                    <option value="4"selected>4st Semester</option>
                    <option value="5">5st Semester</option>
                    <option value="6">6st Semester</option>
                    <option value="7">7st Semester</option>
                    <option value="8">8st Semester</option>
                  
                  
                  @elseif($s->sem == "5")

                    <option value="1">1st Semester</option>
                    <option value="2">2st Semester</option>
                    <option value="3">3st Semester</option>
                    <option value="4">4st Semester</option>
                    <option value="5"selected>5st Semester</option>
                    <option value="6">6st Semester</option>
                    <option value="7">7st Semester</option>
                    <option value="8">8st Semester</option>
                  
                  
                  @elseif($s->sem == "6")

                    <option value="1">1st Semester</option>
                    <option value="2">2st Semester</option>
                    <option value="3">3st Semester</option>
                    <option value="4">4st Semester</option>
                    <option value="5">5st Semester</option>
                    <option value="6"selected>6st Semester</option>
                    <option value="7">7st Semester</option>
                    <option value="8">8st Semester</option>
                  
                  
                  @elseif($s->sem == "7")


                    <option value="1">1st Semester</option>
                    <option value="2">2st Semester</option>
                    <option value="3">3st Semester</option>
                    <option value="4">4st Semester</option>
                    <option value="5">5st Semester</option>
                    <option value="6">6st Semester</option>
                    <option value="7" selected>7st Semester</option>
                    <option value="8">8st Semester</option>
                  
                  
                  @elseif($s->sem == "8")

                    <option value="1">1st Semester</option>
                    <option value="2">2st Semester</option>
                    <option value="3">3st Semester</option>
                    <option value="4">4st Semester</option>
                    <option value="5">5st Semester</option>
                    <option value="6">6st Semester</option>
                    <option value="7">7st Semester</option>
                    <option value="8" selected>8st Semester</option>
                  
                
                  
                   @else

                    <option value="1">1st Semester</option>
                    <option value="2">2st Semester</option>
                    <option value="3">3st Semester</option>
                    <option value="4">4st Semester</option>
                    <option value="5">5st Semester</option>
                    <option value="6">6st Semester</option>
                    <option value="7">7st Semester</option>
                    <option value="8">8st Semester</option>
                  
                
                  @endif
                </select>
@else
 
                <input type="hidden" name="sem" id="ContentPlaceHolder1_hf_vtm_id" value="{{$s->sem}}">
                <input name="ctl00$ContentPlaceHolder1$" type="text" value=" 
                @if($s->sem == 1) {{"1st Semester"}}
                @elseif($s->sem == 2) {{"2nd Semester"}}
                @elseif($s->sem == 3) {{"3rd Semester"}}
                @elseif($s->sem == 4) {{"4th Semester"}}
                @elseif($s->sem == 5) {{"5th Semester"}}
                @elseif($s->sem == 6) {{"6th Semester"}}
                @elseif($s->sem == 7) {{"7th Semester"}}
                @elseif($s->sem == 8) {{"8th Semester"}}
                @else {{$s->sem}} 
                @endif
                " id="ContentPlaceHolder1_txt_vtm_first_name" class="form-control form-control-user" disabled>

@endif

                @error('sem')
                <div style="color:red;">{{ $message }}</div>
                @enderror
              </div>


      

              {{-- <div class="col-md-3">
               <h6>Address</h6>
                <input type="text" name="address"
                    class="form-control"
                   
                    placeholder="Enter your address"
                 value="{{$s->address}}">
                @error('address')
                <div style="color:red;">{{ $message }}</div>
                @enderror
            </div> --}}

            {{-- <div class="col-md-3">
              <h6>Addmission date</h6>
              <input class="form-control" type="date" name="addmissiondate" id="" value="{{$s->admissiondate}}">
              @error('addmissiondate')
              <div style="color:red;">{{ $message }}</div>
              @enderror
            </div> --}}

            
                <div class="col-md-3">
                    <h6>Image</h6>
                    <input name="image" type="file" id="ContentPlaceHolder1_txt_vtm_password" class="form-control form-control-user">
                     @error('image')
                    <div style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
               
                <div class="col-md-12 text-center">
                  <input type="submit" value="Update Details" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnchangepass&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_btnchangepass" class="btn btn-primary px-4 my-3 font-weight-bold">
              </div>
              <div class="col-md-12 text-center">
                  <span id="ContentPlaceHolder1_lblmsg"></span>
              </div>
            </div>
        </div>
    </div>
</form>
</main>
@include('studentdash.foot')


           
             