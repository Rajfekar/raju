@include('studentdash.head')

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
          <h4> Time-Left <span id="countdown">300</span> seconds</h4>

          <div class="row">
            <div class="col-md-6">
              <h6>Pay By QR Code</h6>

              <img src="{{'/images/BANK2.jpg'}}" class="img-fluid rounded-top" alt="">
              
            </div>
            <div class="col-md-6">
              <h6>Pay By UPI ID/BANK ACCOUNT</h6>
              <img src="{{'/images/BANK.png'}}" class="img-fluid rounded-top" alt="">

              

            </div>
          </div>
              

            <form method="post" action="{{route('payment_done')}}">
                @csrf
                <div class="mb-3">
                  <label for="" class="form-label">UPI Ref. No. :</label>
                  <input type="text"
                    class="form-control" name="upi" id="" aria-describedby="helpId" placeholder="Enter ">
                  
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Date:</label>
                  <input type="text"
                    class="form-control" name="date" id="demoDate" aria-describedby="helpId" placeholder="Select Date ">
                  
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Time:</label>
                  <input type="text"
                    class="form-control" name="time" id="time" aria-describedby="helpId" placeholder="example: 00:00 PM or 00:00 AM ">
                  
                </div>
                <input type="hidden" name="id" value="{{$s->id}}">

                <div class="d-grid gap-2">
                  <button type="submit" name="" id="" class="btn btn-primary">Submit</button>
                </div>
                
               
                 
                     
                   


           
        </form>
        </div>
    </div>
</main>



<script type="text/javascript">

    (function () {
     let timeLeft = 300,
     cinterval;
     let timeDec = function (){
     timeLeft--;
     document.getElementById('countdown').innerHTML = timeLeft;
     if(timeLeft === 0){
     clearInterval(cinterval);
       }
    if(timeLeft === 100){
        document.getElementById('countdown').style.color = 'red';
        

    }
    if(timeLeft === 200){
        document.getElementById('countdown').style.color = 'orange';
        

    }
    if(timeLeft === 295){
        document.getElementById('countdown').style.color = 'green';
        

    }
   };
   
   cinterval = setInterval(timeDec, 500);
   })();

   let khemraj = function()  
    {  
      window.location.href="http://127.0.0.1:8000/rit/studentdashboard/fees_details" 
     }  
    setInterval(khemraj, 6000000*4+1);  


    
   
   </script>

   <!-- Essential javascripts for application to work-->
   <script src="/dash/js/jquery-3.3.1.min.js"></script>
   <script src="/dash/js/popper.min.js"></script>
   <script src="/dash/js/bootstrap.min.js"></script>
   <script src="/dash/js/main.js"></script>
   <!-- The javascript plugin to display page loading on top-->
   <script src="/dash/js/plugins/pace.min.js"></script>
   <!-- Page specific javascripts-->
   <script type="text/javascript" src="/dash/js/plugins/bootstrap-datepicker.min.js"></script>
   <script type="text/javascript" src="/dash/js/plugins/select2.min.js"></script>
   <script type="text/javascript" src="/dash/js/plugins/dropzone.js"></script>
   <script type="text/javascript">
    
     
    
     
     $('#demoDate').datepicker({
       format: "dd/mm/yyyy",
       autoclose: true,
       todayHighlight: true
     });
     
    
   </script>
   <!-- Google analytics script-->
   <script type="text/javascript">
     if(document.location.hostname == 'pratikborsadiya.in') {
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
       ga('create', 'UA-72504830-1', 'auto');
       ga('send', 'pageview');
     }
   </script>
 </body>
</html>
