@include('pdash.head')
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
    <form method="post" action="{{url('/rit/studentdashboard/user_profile/updatedata')}}" enctype="multipart/form-data">
        @csrf
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row create_ngo">
                <div class="col-md-6">
                    <h6>Full Name</h6>
                    <input type="hidden" name="name" id="ContentPlaceHolder1_hf_vtm_id" value="100914">
                    <input name="ctl00$ContentPlaceHolder1$txt_vtm_first_name" type="text" value="{{$s->name}}" id="ContentPlaceHolder1_txt_vtm_first_name" class="form-control form-control-user">
                    <span id="ContentPlaceHolder1_rf_txt_vtm_first_name" style="display:none;"></span>

                </div>
                <div class="col-md-6">
                    <h6>Email</h6>
                    <input name="email" type="email" value="{{$s->email}}" id="ContentPlaceHolder1_txt_vtm_middle_name" class="form-control form-control-user">
                    @error('email')
                  <div style="color:red;">{{ $message }}</div>
                  @enderror

                </div>
                <div class="col-md-6">
                    <h6>Library ID</h6>
                    <input name="libid2" type="text" value="{{$s->libid}}" id="ContentPlaceHolder1_txt_vtm_last_name" class="form-control form-control-user" >
                    <input name="libid" type="hidden" value="{{$s->libid}}" id="ContentPlaceHolder1_txt_vtm_last_name" class="form-control form-control-user">
                    @error('libid')
                  <div style="color:red;">{{ $message }}</div>
                  @enderror

                </div>
               
                {{-- <div class="col-md-6">
                    <h6>Semester</h6>
                    <input name="sem" type="text" value="{{$s->sem}}" id="ContentPlaceHolder1_txt_vtm_last_name" class="form-control form-control-user">
                    <span id="ContentPlaceHolder1_rf_txt_vtm_last_name" style="display:none;"></span>

                </div> --}}
               
                <div class="col-md-6">
                    <h6>Mobile Number</h6>
                    <input name="mobile" type="number" value="{{$s->mobile}}" id="ContentPlaceHolder1_txt_vtm_primary_ctn" class="form-control form-control-user">
                    @error('mobile')
                  <div style="color:red;">{{ $message }}</div>
                  @enderror
                </div>
                {{-- <div class="col-md-6">
                    <h6>Gender</h6>
                    <input id="ContentPlaceHolder1_rdo_male" type="radio" name="ctl00$ContentPlaceHolder1$rdo" value="rdo_male" checked="checked">Male
                    <input id="ContentPlaceHolder1_rdo_female" type="radio" name="ctl00$ContentPlaceHolder1$rdo" value="rdo_female">Female
                                        
                </div> --}}
                <div class="col-md-6"style="display:none;">
                    <!--<h6>Semester</h6>-->
                    <select class="form-control" name="sem" id="">
                      @if($s->sem == "1"){



                        <option value="0">Select Semester</option>
                        <option value="1" selected>1st Semester</option>
                        <option value="2">2st Semester</option>
                        <option value="3">3st Semester</option>
                        <option value="4">4st Semester</option>
                        <option value="5">5st Semester</option>
                        <option value="6">6st Semester</option>
                        <option value="7">7st Semester</option>
                        <option value="8">8st Semester</option>
                      }
                        @endif
                        @if($s->sem == "2"){


                          <option value="0">Select Semester</option>
                          <option value="1" >1st Semester</option>
                          <option value="2" selected>2st Semester</option>
                          <option value="3">3st Semester</option>
                          <option value="4">4st Semester</option>
                          <option value="5">5st Semester</option>
                          <option value="6">6st Semester</option>
                          <option value="7">7st Semester</option>
                          <option value="8">8st Semester</option>
                        }
                        @endif
                        @if($s->sem == "3"){


                          <option value="0">Select Semester</option>
                          <option value="1" >1st Semester</option>
                          <option value="2">2st Semester</option>
                          <option value="3" selected>3st Semester</option>
                          <option value="4">4st Semester</option>
                          <option value="5">5st Semester</option>
                          <option value="6">6st Semester</option>
                          <option value="7">7st Semester</option>
                          <option value="8">8st Semester</option>
                        }
                        @endif
                        @if($s->sem == "4"){


                          <option value="0">Select Semester</option>
                          <option value="1" >1st Semester</option>
                          <option value="2">2st Semester</option>
                          <option value="3">3st Semester</option>
                          <option value="4"selected>4st Semester</option>
                          <option value="5">5st Semester</option>
                          <option value="6">6st Semester</option>
                          <option value="7">7st Semester</option>
                          <option value="8">8st Semester</option>
                        }
                        @endif
                        @if($s->sem == "5"){

                          <option value="0">Select Semester</option>
                          <option value="1">1st Semester</option>
                          <option value="2">2st Semester</option>
                          <option value="3">3st Semester</option>
                          <option value="4">4st Semester</option>
                          <option value="5"selected>5st Semester</option>
                          <option value="6">6st Semester</option>
                          <option value="7">7st Semester</option>
                          <option value="8">8st Semester</option>
                        }
                        @endif
                        @if($s->sem == "6"){

                          <option value="0">Select Semester</option>
                          <option value="1">1st Semester</option>
                          <option value="2">2st Semester</option>
                          <option value="3">3st Semester</option>
                          <option value="4">4st Semester</option>
                          <option value="5">5st Semester</option>
                          <option value="6"selected>6st Semester</option>
                          <option value="7">7st Semester</option>
                          <option value="8">8st Semester</option>
                        }
                        @endif
                        @if($s->sem == "7"){


                          <option value="0">Select Semester</option>
                          <option value="1">1st Semester</option>
                          <option value="2">2st Semester</option>
                          <option value="3">3st Semester</option>
                          <option value="4">4st Semester</option>
                          <option value="5">5st Semester</option>
                          <option value="6">6st Semester</option>
                          <option value="7" selected>7st Semester</option>
                          <option value="8">8st Semester</option>
                        }
                        @endif
                        @if($s->sem == "8"){

                          <option value="0">Select Semester</option>
                          <option value="1">1st Semester</option>
                          <option value="2">2st Semester</option>
                          <option value="3">3st Semester</option>
                          <option value="4">4st Semester</option>
                          <option value="5">5st Semester</option>
                          <option value="6">6st Semester</option>
                          <option value="7">7st Semester</option>
                          <option value="8" selected>8st Semester</option>
                        }
                      
                        @endif
                      </select>
                    {{-- <select name="sem" id="ContentPlaceHolder1_dl_state" class="form-control" disabled>
<option value="">---Select Semester---</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>

</select> --}}
                </div>
                <div class="col-md-6">
                    <h6>Password</h6>
                    <input name="password" type="text" value="{{$s->password}}" id="ContentPlaceHolder1_txt_vtm_password" class="form-control form-control-user" disabled>
                    <span id="ContentPlaceHolder1_rf_vtm_password" style="display:none;"></span>
                </div>
                <div class="col-md-6">
                    <h6>Image</h6>
                    <input name="image" type="file" id="ContentPlaceHolder1_txt_vtm_password" class="form-control form-control-user">
                     @error('image')
                    <div style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                 <div class="col-md-6">
                    <!--<h6>Enrollment ID</h6>-->
                    <input name="enrolmentid" type="hidden" value="{{$s->enrolmentid}}" id="ContentPlaceHolder1_txt_vtm_last_name" class="form-control form-control-user">
                    @error('enrolmentid')
                  <div style="color:red;">{{ $message }}</div>
                  @enderror

                </div>
                <div class="col-md-6">
                    <!--<h6>Roll No.</h6>-->
                    <input name="rollno" type="hidden" value="{{$s->rollno}}" id="ContentPlaceHolder1_txt_vtm_last_name" class="form-control form-control-user" placeholder="enter your roll no.">
                    @error('enrolmentid')
                    <div style="color:red;">{{ $message }}</div>
                    @enderror

                </div>
                
                 <div class="col-md-6">
                    <!--<h6>Branch</h6>-->
                    <input name="branch" type="hidden" value="{{$s->branch}}" id="ContentPlaceHolder1_txt_vtm_last_name" class="form-control form-control-user"disabled>
                    <span id="ContentPlaceHolder1_rf_txt_vtm_last_name" style="display:none;"></span>

                </div>
               
                <div class="col-md-12 text-center">
                    <div id="ContentPlaceHolder1_vsreg" style="display:none;">

</div>

                    <input type="submit" name="ctl00$ContentPlaceHolder1$btn_save" value="Update" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btn_save&quot;, &quot;&quot;, true, &quot;reg&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_btn_save" class="btn btn-primary px-4 my-3 font-weight-bold">
                </div>


            </div>
        </div>
    </div>
</form>
</main>

@include('pdash.foot')