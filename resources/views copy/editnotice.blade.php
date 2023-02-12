@include('head')

<div id="addperson" class="container portion">

    <!-- ========== Start listleft addperson ========== -->
    <div class="listleft"><br>
      <h2>Notice Board Edit</h2>
      <!-- ========== Start form for addperson ========== -->

      <form action="{{route('updatenotice')}}" method="post" class="" enctype="multipart/form-data">

        @csrf
        <input style="height:0; width:0; display:none;" type="text" name="noticeid" value="{{$notice->id}}"><br>
        <label>Department:</label><input type="text" name="department" value="{{$notice->department}}" disabled/><br>
        @error('department')
        <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
        @enderror
        <br>
        <label>Notice ID:</label><input  type="text" name="notice" value="{{$notice->id}}" disabled/><br>
        @error('noticeid')
        <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
        @enderror
        <br>
        <label>Subject:</label><input type="text" name="subject" value="{{$notice->subject}}" />
        @error('subject')
        <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
        @enderror

        <br>
        <label>Title:</label><input type="text" name="title" value="{{$notice->title}}" />
        @error('title')
        <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
        @enderror
        </br>

        <br>
     
       
        <label>Notice Image:</label><input type="file" name="image" value="{{old('image')}}" />
        @error('image')
        <span style="color:red;">{{ $message }}</span>
        @enderror
        </br>
        <br>

        <input type="submit" value="Update" />
      </form>
      <!-- ========== End form for addperson ========== -->

    </div>
    <!-- ========== End listleft addperson ========== -->

  </div>

  <!-- ========== End add a person  ========== -->
@include('foot')