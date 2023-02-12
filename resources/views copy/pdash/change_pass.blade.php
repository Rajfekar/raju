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
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="{{url('/rit/pdashboard/change_pass/updatepass/')}}">
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
        </form>
        </div>
    </div>
</main>
   @include('pdash.foot')