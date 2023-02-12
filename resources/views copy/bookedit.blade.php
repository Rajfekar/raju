@include('head')

<div id="addbook" class="container">
  <!-- add new book section -->

  <div class="listleft">
    <br>
    <h2> EDIT BOOK📓</h2>

    <form action="{{route('updatebook')}}" method="post" enctype="multipart/form-data">

      @csrf
      <input style="display: none;" type="text" name="bookid" value="{{$member->bookid}}"/>
      @error('bookid')
      <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
      @enderror
      <label>Book Name:</label><input type="text" name="name" value="{{$member->name}}" />
      @error('name')
      <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
      @enderror
      </br>
      <label>Book Id:</label><input type="text" name="booid" value="{{$member->bookid}}" disabled/>
      @error('bookid')
      <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
      @enderror

      </br>
      <label>Detail:</label><input type="text" name="detail" value="{{$member->detail}}" /> @error('detail')
      <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
      @enderror</br>
      <label>Author:</label><input type="text" name="author" value="{{$member->author}}" /> @error('author')
      <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
      @enderror</br>
      <label>Publication</label><input type="text" name="publication" value="{{$member->publication}}" /> @error('publication')
      <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
      @enderror</br>
      <label>Branch:</label>

      <ul>
        <div class="row">
          <div class="left col-md-4">
            <li><span class="span50">CSE <input onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id="" value="CSE" selected></span></li>
            <li><span class="span60">MECH <input value="MECH" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
            <li><span class="span7rcheckbox0">CIVIL <input value="CIVIL" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>

          </div>
          <div class="right col-md-4">
            <li><span class="span80">BIOTECH <input value="BIOTECH" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
            <li><span class="span8rcheckbox0">ET&T <input value="ET&T" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
            <li><span class="span8rcheckbox0">CHEMICAL <input value="CHEMICAL" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
          </div>
          <div class="right col-md-4">
            <li><span class="span80">ELECTRICAL <input value="ELECTRICAL" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
            <li><span class="span80">EEE <input value="EEE" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
            <li><span class="span80">IT <input value="IT" onclick="return rcheck()" style="display:block;" type="checkbox" name="bcheck" id=""></span></li>
          </div>
        </div>
        <div>
          <span id="rnotvalidc" style="color:red"> </span>
          @error('bcheck')
      <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
      @enderror</br>
        </div>
      </ul>


      </br>
      <label>Price:</label><input type="number" name="price" value="{{$member->price}}" /> @error('price')
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
<br>

      <input type="submit" value="UPDATE" />


    </form>


  </div>

</div>



@include('foot')