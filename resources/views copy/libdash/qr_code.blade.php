@include('libdash.head')

    <main class="app-content">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row">
                   
                   
                    <div class="col-md-12 justify-content-center">
                       <div id="qrimage">

                       </div>

                       
                    </div>
                    <div class="col-md-12 text-center">
                        <input type="button" name="ctl00$ContentPlaceHolder1$btnchangepass" value="Get QR_CODE" onclick="createqr();" id="ContentPlaceHolder1_btnchangepass" class="btn btn-primary px-4 my-3 font-weight-bold">
                       <input type="hidden"  id="studentqrdata" value="{{$s->collegeid}}">

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
      
   @include('libdash.foot')