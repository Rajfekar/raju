@include('hrdash.head')

    <main class="app-content">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row create_ngo">
                   
                   
                    <div class="col-md-12">
                       <input type="hidden"  id="studentqrdata" value="{{session()->get('hr_id')}}">
                       <div style="float: center;" id="qrimage">

                       </div>

                       
                    </div>
                    <div class="col-md-12 text-center">
                        <input type="button" name="ctl00$ContentPlaceHolder1$btnchangepass" value="Get QR_CODE" onclick="createqr();" id="ContentPlaceHolder1_btnchangepass" class="btn btn-primary px-4 my-3 font-weight-bold">
                    </div>
                    <div class="col-md-12 text-center">
                        <span id="ContentPlaceHolder1_lblmsg"></span>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <script>
        function createqr()
      {
          var dataforqr=document.getElementById("studentqrdata").value;
          document.getElementById("qrimage").innerHTML="<img src='https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl="+encodeURIComponent(dataforqr)+"'/>";
          console.log(dataforqr);
      }
      </script>
   @include('hrdash.foot')