@include('head')
<div class="container">


      <!-- ========== Start add a person  ========== -->
      <div id="addperson" class="container portion">

        <!-- ========== Start listleft addperson ========== -->
        <div class="listleft"><br>
          <h2>Register Here</h2>
          <!-- ========== Start form for addperson ========== -->

          <form action="{{route('sregister')}}" method="post" class="signin" enctype="multipart/form-data">

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
            <label>Pasword:</label><input type="password" name="password" />
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

            <input type="submit" value="Register" />
          </form>
          <!-- ========== End form for addperson ========== -->

        </div>
        <!-- ========== End listleft addperson ========== -->

      </div>

      <!-- ========== End add a person  ========== -->



</div>

@include('foot')