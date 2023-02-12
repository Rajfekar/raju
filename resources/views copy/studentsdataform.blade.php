@include('head')
<div class="container">

  @if(Session::has('success'))
  <div id="success" style="color:rgb(96, 237, 96);">{{Session::get('success')}}</div>
  @endif
  @if(Session::has('fail'))
  <div style="color:red;">{{Session::get('fail')}}</div>
  @endif
      <!-- ========== Start add a person  ========== -->
      <div id="addperson" class="container portion">

        <!-- ========== Start listleft addperson ========== -->
        <div class="listleft"><br>
          <h2>Students Result Marks Data Form</h2>
          <!-- ========== Start form for addperson ========== -->
         <h6>Note* 3rd sem result required for fill this form.</h6>
          <form action="{{url('/rit/submitteddata')}}" method="post" class="signin" enctype="multipart/form-data">
            @csrf

              <label>Current Semester:</label>
              <select class="form-select form-select-lg" name="sem" value="{{old('sem')}}">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
          

            @error('sem')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>Roll No:</label><input type="text" name="rollno" value="{{old('rollno')}}" />
            @error('rollno')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>Full Name:</label><input type="text" name="name" value="{{old('name')}}" />
            @error('name')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br><br>
            <label>Mathematics-3 <br> CT:</label><input type="text" name="m3ct" value="{{old('m3ct')}}" />
            @error('m3ct')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>TA:</label><input type="text" name="m3ta" value="{{old('m3ta')}}" />
            @error('m3ta')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>ESE:</label><input type="text" name="m3ese" value="{{old('m3ese')}}" />
            @error('m3ese')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br><br><br>

            <label>Data Structure & Algo. <br> CT:</label><input type="text" name="dsact" value="{{old('dsact')}}" />
            @error('dsact')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>TA:</label><input type="text" name="dsata" value="{{old('dsata')}}" />
            @error('dsata')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>ESE:</label><input type="text" name="dsaese" value="{{old('dsaese')}}" />
            @error('dsaese')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br><br><br>

            <label>Principle Of Prog. Lang. <br> CT:</label><input type="text" name="pplct" value="{{old('pplct')}}" />
            @error('pplct')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>TA:</label><input type="text" name="pplta" value="{{old('pplta')}}" />
            @error('pplta')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>ESE:</label><input type="text" name="pplese" value="{{old('pplese')}}" />
            @error('pplese')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br><br><br>

            <label>DELD <br> CT:</label><input type="text" name="deldct" value="{{old('deldct')}}" />
            @error('deldct')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>TA:</label><input type="text" name="deldta" value="{{old('deldta')}}" />
            @error('deldta')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>ESE:</label><input type="text" name="deldese" value="{{old('deldese')}}" />
            @error('deldese')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br><br><br>

            <label>Operating System <br> CT:</label><input type="text" name="osct" value="{{old('osct')}}" />
            @error('osct')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>TA:</label><input type="text" name="osta" value="{{old('osta')}}" />
            @error('osta')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>ESE:</label><input type="text" name="osese" value="{{old('osese')}}" />
            @error('osese')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br><br><br>
            <label>DELD LAB <br> TA:</label><input type="text" name="deldlabta" value="{{old('deldlabta')}}" />
            @error('pplta')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>ESE:</label><input type="text" name="deldlabese" value="{{old('deldlabese')}}" />
            @error('deldlabese')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br><br><br>
            <label>Operating System LAB <br> TA:</label><input type="text" name="oslabta" value="{{old('oslabta')}}" />
            @error('oslabta')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>ESE:</label><input type="text" name="oslabese" value="{{old('oslabese')}}" />
            @error('oslabese')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br><br><br>
            <label>DS LAB <br> TA:</label><input type="text" name="dslabta" value="{{old('dslabta')}}" />
            @error('dslabta')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>ESE:</label><input type="text" name="dslabese" value="{{old('dslabese')}}" />
            @error('dslabese')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br><br><br>
            <label>MATLAB <br> TA:</label><input type="text" name="matlabta" value="{{old('matlabta')}}" />
            @error('matlabta')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

            <br>
            <label>ESE:</label><input type="text" name="matlabese" value="{{old('matlabese')}}" />
            @error('matlabese')
            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
            @enderror

         



           <br><br>

            <input type="submit" value="Submit" />
          </form>
          <!-- ========== End form for addperson ========== -->

        </div>
        <!-- ========== End listleft addperson ========== -->

      </div>

      <!-- ========== End add a person  ========== -->



</div>

@include('foot')