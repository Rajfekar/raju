@include('head')

<div class="container justify-content-center">

  <div class="row  justify-content-center">
    <div class="col-md-12 ">
      <h5>{{$member->name}}👍</h5>


    </div>

  </div>
</div>
<div class="container">






  <div id="issuebooknow" class="container" style="background:#f4f7f7;">
    <div class="listleft">
      <img src="{{'/storage/students/'. $member->image}}" alt="image" height="110px" width="110px" style="border-radius: 20%; float:right;">
      <h2>ISSUE BOOK NOW😉</h2>
      <br>
      <form action="{{route('issuebook')}}" method="post">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <label for="BooksDataList" class="form-label">Select Book:</label>
         <input name="book" class="form-control" list="datalistOptions1" id="booksDataList"          placeholder="Enter Book...">
         <datalist id="datalistOptions1">
           @foreach($booksr as $bname)
           <option value='{{$bname->bookid}}'>{{$bname->bookid}}&nbsp;&nbsp;{{$bname->name}}</option>
           @endforeach
          </datalist>
             @error('book')
            <div style="color:red;">{{ $message }}</div>
            @enderror



          </div>
          <div class="col-md-4">
            <label for="Select Student">Select Student:</label>

            <select name="userselect">
              </br></br>
              <option value='{{$member->libid}}'>{{$member->name}}</option>
            </select>

          </div>
          <div class="col-md-2">
            <label>Days</label> <input value="15" type="number" name="days" /><br><br>


          </div>
          <div class="col-md-3">
            <label for="" class="form-label">Student ID</label>
            <input value="{{ $member->libid }}" type="text" class="" name="" id="" aria-describedby="helpId" placeholder="">

          </div>
          <div class="col-md-3">
            <label for="" class="form-label">Student Email</label>
            <input value="{{ $member->email }}" type="text" class="" name="" id="" aria-describedby="helpId" placeholder="">

          </div>
          <div class="col-md-3">
            <label for="" class="form-label">Student Mobile</label>
            <input value="{{ $member->mobile }}" type="text" class="" name="" id="" aria-describedby="helpId" placeholder="">

          </div>
          <div class="col-md-3">
            <label for="" class="form-label">Student Branch </label>
            <input value="{{ $member->branch }}" type="text" class="" name="" id="" aria-describedby="helpId" placeholder="">

          </div>
          <div class="col-md-3">
            <label for="" class="form-label">Student Semester</label>
            <input value="{{ $member->sem }}" type="text" class="" name="" id="" aria-describedby="helpId" placeholder="">

          </div>
          <div class="col-md-3">
            <label for="" class="form-label">Student Address</label>
            <input type="text" class="" name="" id="" aria-describedby="helpId" placeholder="">


          </div>


          <div class="col-md-3">
            <label for="" class="form-label">Upcoming</label>
            <input type="text" class="" name="" id="" aria-describedby="helpId" placeholder="">


          </div>

          <div class="col-md-3">
            <label for="" class="form-label">Upcoming</label>
            <input type="text" class="" name="" id="" aria-describedby="helpId" placeholder="">


          </div>

          <div class="col-md-3">
            <br><br>
            <input class="btn btn-primary" type="submit" value="SUBMIT" />


          </div>



        </div>



      </form>
    </div>
  </div>
</div>

<!-- issue book end -->

@include('foot')