@include('studentdash.head');

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
    <div class="card shadow mb-4">
        <div class="card-body">
            {{-- <form method="post" action="{{url('/rit/studentdashboard/change_pass/updatepass/')}}">
                @csrf
            <div class="row create_ngo">
                <div class="col-md-12">
                    <h6>Enter Current Password</h6>
                    <input value="{{$s->id}}" name="id" type="hidden" id="ContentPlaceHolder1_txtcurrentpass" class="form-control">
                    <input name="cpassword" type="password" id="ContentPlaceHolder1_txtcurrentpass" class="form-control">
                    @error('cpassword')
        <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
        @enderror
                </div>
                <div class="col-md-12">
                    <h6>Enter New Password</h6>
                    <input name="npassword" type="password" id="ContentPlaceHolder1_txtnewpass" class="form-control">
                    @error('npassword')
                    <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <h6>Confirm Password</h6>
                    <input name="cnpassword" type="password" id="ContentPlaceHolder1_txtconfirmpass" class="form-control">
                    @error('cnpassword')
                    <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 text-center">
                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnchangepass" value="Change Password" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnchangepass&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_btnchangepass" class="btn btn-primary px-4 my-3 font-weight-bold">
                </div>
                <div class="col-md-12 text-center">
                    <span id="ContentPlaceHolder1_lblmsg"></span>
                </div>

            </div>
        </form> --}}

        <h3>Your B.Tech Fees Details</h3>

     
<br>
@foreach ($fees as $f)
@php
// $p1 = $f->total/100;
   $p = ($f->paid/$f->total)*100;
   $c = ($f->due/$f->total)*100;

 @endphp
<div class="row mt-4">
    <div class="col-md-2">
        <label for="">
            @if($f->sem == 1)
              {{"1 Semester"}}
            @elseif($f->sem == 2)
              {{"2 Semester"}}
              @elseif($f->sem == 3)
              {{"3 Semester"}}
            @elseif($f->sem == 4)
              {{"4 Semester"}}
              @elseif($f->sem == 5)
              {{"5 Semester"}}
            @elseif($f->sem == 6)
              {{"6 Semester"}}
              @elseif($f->sem == 7)
              {{"7 Semester"}}
              @elseif($f->sem == 8)
              {{"8 Semester"}}
              @elseif($f->sem == "s")
              {{"Scholarship Fees"}}

              @else
              {{$f->title}}

            @endif
        
        
        
        
        </label>
    </div>

    <div class="col-md-6">
        <div class="progress">
            <div class="bg-success progress-bar progress-bar-striped progress-bar-animated" style="width:{{$p}}% ; ">{{$f->paid." "."Paid"}}</div>
            <div class="bg-danger progress-bar" style="width:{{$c}}%">{{$f->due." "."Due"}}</div>
          </div>

    </div>

    <div class="col-md-4">
       <br>
       
       
       @if($p == 100)
        <a name="" id="" class="btn btn-primary disabled" href="#" role="button">Pay Now</a> &nbsp; &nbsp;
        <a name="" id="" class="btn btn-primary" href="{{url('/rit/studentdashboard/invoice/reciept/'.$f->id)}}" role="button">Reciept</a> &nbsp; &nbsp;
        @else
        <a name="" id="" class="btn btn-primary" href="{{url('/rit/studentdashboard/invoice/paynow/'.$f->id)}}" role="button">Pay Now</a> &nbsp; &nbsp;
        <a name="" id="" class="btn btn-primary disabled" href="#" role="button">Reciept</a> &nbsp; &nbsp;
       @endif
        <br>
    </div>
</div>



@endforeach
{{-- 

<div class="row mt-4">
    <div class="col-md-2">
        <label for="">2nd Semester</label>
    </div>

    <div class="col-md-6">
        <div class="progress">
  
            <div class=" progress-bar progress-bar-striped progress-bar-animated" style="width:{{"80"}}%">{{"80% "}}Paid</div>
            <div class="bg-danger progress-bar" style="width:{{"20"}}%">{{"20% "}}Due</div>
          </div>

    </div>


    <div class="col-md-4">
       <br>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Pay Now</a> &nbsp; &nbsp;
        <a name="" id="" class="btn btn-primary" href="#" role="button">Reciept</a>
        <br>
    </div>
</div>

   

<div class="row mt-4">
    <div class="col-md-2">
        <label for="">3rd Semester</label>
    </div>

    <div class="col-md-6">
        <div class="progress">
  
            <div class=" progress-bar progress-bar-striped progress-bar-animated" style="width:{{"80"}}%">{{"80% "}}Paid</div>
            <div class="bg-danger progress-bar" style="width:{{"20"}}%">{{"20% "}}Due</div>
          </div>

    </div>


    <div class="col-md-4">
       <br>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Pay Now</a> &nbsp; &nbsp;
        <a name="" id="" class="btn btn-primary" href="#" role="button">Reciept</a>
        <br>
    </div>
</div>


<div class="row mt-4">
    <div class="col-md-2">
        <label for="">4th Semester</label>
    </div>

    <div class="col-md-6">
        <div class="progress">
  
            <div class=" progress-bar progress-bar-striped progress-bar-animated" style="width:{{"80"}}%">{{"80% "}}Paid</div>
            <div class="bg-danger progress-bar" style="width:{{"20"}}%">{{"20% "}}Due</div>
          </div>

    </div>


    <div class="col-md-4">
       <br>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Pay Now</a> &nbsp; &nbsp;
        <a name="" id="" class="btn btn-primary" href="#" role="button">Reciept</a>
        <br>
    </div>
</div>



<div class="row mt-4">
    <div class="col-md-2">
        <label for="">5th Semester</label>
    </div>

    <div class="col-md-6">
        <div class="progress">
  
            <div class=" progress-bar progress-bar-striped progress-bar-animated" style="width:{{"80"}}%">{{"80% "}}Paid</div>
            <div class="bg-danger progress-bar" style="width:{{"20"}}%">{{"20% "}}Due</div>
          </div>

    </div>


    <div class="col-md-4">
       <br>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Pay Now</a> &nbsp; &nbsp;
        <a name="" id="" class="btn btn-primary" href="#" role="button">Reciept</a>
        <br>
    </div>
</div>



<div class="row mt-4">
    <div class="col-md-2">
        <label for="">6th Semester</label>
    </div>

    <div class="col-md-6">
        <div class="progress">
  
            <div class=" progress-bar progress-bar-striped progress-bar-animated" style="width:{{"80"}}%">{{"80% "}}Paid</div>
            <div class="bg-danger progress-bar" style="width:{{"20"}}%">{{"20% "}}Due</div>
          </div>

    </div>


    <div class="col-md-4">
       <br>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Pay Now</a> &nbsp; &nbsp;
        <a name="" id="" class="btn btn-primary" href="#" role="button">Reciept</a>
        <br>
    </div>
</div>





<div class="row mt-4">
    <div class="col-md-2">
        <label for="">7th Semester</label>
    </div>

    <div class="col-md-6">
        <div class="progress">
  
            <div class=" progress-bar progress-bar-striped progress-bar-animated" style="width:{{"80"}}%">{{"80% "}}Paid</div>
            <div class="bg-danger progress-bar" style="width:{{"20"}}%">{{"20% "}}Due</div>
          </div>

    </div>


    <div class="col-md-4">
       <br>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Pay Now</a> &nbsp; &nbsp;
        <a name="" id="" class="btn btn-primary" href="#" role="button">Reciept</a>
        <br>
    </div>
</div>




<div class="row mt-4">
    <div class="col-md-2">
        <label for="">8th Semester</label>
    </div>

    <div class="col-md-6">
        <div class="progress">
  
            <div class=" progress-bar progress-bar-striped progress-bar-animated" style="width:{{"80"}}%">{{"80% "}}Paid</div>
            <div class="bg-danger progress-bar" style="width:{{"20"}}%">{{"20% "}}Due</div>
          </div>

    </div>


    <div class="col-md-4">
       <br>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Pay Now</a> &nbsp; &nbsp;
        <a name="" id="" class="btn btn-primary" href="#" role="button">Reciept</a>
        <br>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-2">
        <label for="">Scholarship Fees</label>
    </div>

    <div class="col-md-6">
        <div class="progress">
  
            <div class=" progress-bar progress-bar-striped progress-bar-animated" style="width:{{"80"}}%">{{"80% "}}Paid</div>
            <div class="bg-danger progress-bar" style="width:{{"20"}}%">{{"20% "}}Due</div>
          </div>

    </div>


    <div class="col-md-4">
       <br>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Pay Now</a> &nbsp; &nbsp;
        <a name="" id="" class="btn btn-primary" href="#" role="button">Reciept</a>
        <br>
    </div>
</div>

   --}}



        </div>
    </div>
</main>


















@include('studentdash.foot');

