@include('libdash.head')

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
             <!-- ========== Start form for issuebook ========== -->

          <form action="{{route('issuebook')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-5">
                
                <label for="booksDataList" class="form-label">Select Student:</label>
                <select name="user" class="form-control" id="demoSelect1" multiple="false">
                  <optgroup label="Select Student">
                    @foreach($member as $student)
                    <option  value='{{$student->libid}}'>{{$student->name}}&nbsp;&nbsp;{{$student->libid}}</option>
                    @endforeach
                    
                   
                  </optgroup>
                </select>
              </div>
              <div class="col-md-5">
                
                <label for="booksDataList" class="form-label">Select Book:</label>
                <select name="book" class="form-control" id="demoSelect2" multiple="">
                  <optgroup label="Select Book">
                    @foreach($booksr as $bname)
                    <option  value='{{$bname->bookid}}'>{{$bname->bookid}}&nbsp;&nbsp;{{$bname->name}}</option>
                    @endforeach
                    
                   
                  </optgroup>
                </select>
              </div>
              <div class="col-md-2">
                <label>Days:</label> <input class="form-control" value="15" type="number" name="days" /><br><br>


              </div>

              <div class="col-md-3">
                <br><br>
                <input class="btn btn-primary" type="submit" value="SUBMIT" />
              </div>
            </div>
          </form>
          <!-- ========== End form for issuebook ========== -->
        </div>
    </div>
</main>
 
     <!-- Essential javascripts for application to work-->
     <script src="/dash/js/jquery-3.3.1.min.js"></script>
     <script src="/dash/js/popper.min.js"></script>
     <script src="/dash/js/bootstrap.min.js"></script>
     <script src="/dash/js/main.js"></script>
     <!-- The javascript plugin to display page loading on top-->
     <script src="js/plugins/pace.min.js"></script>
     <!-- Page specific javascripts-->
     <script type="text/javascript" src="/dash/js/plugins/bootstrap-datepicker.min.js"></script>
     <script type="text/javascript" src="/dash/js/plugins/select2.min.js"></script>
     <script type="text/javascript" src="/dash/js/plugins/bootstrap-datepicker.min.js"></script>
     <script type="text/javascript" src="/dash/js/plugins/dropzone.js"></script>
     <script type="text/javascript">
       $('#sl').on('click', function(){
           $('#tl').loadingBtn();
           $('#tb').loadingBtn({ text : "Signing In"});
       });
       
       $('#el').on('click', function(){
           $('#tl').loadingBtnComplete();
           $('#tb').loadingBtnComplete({ html : "Sign In"});
       });
       
       $('#demoDate').datepicker({
           format: "dd/mm/yyyy",
           autoclose: true,
           todayHighlight: true
       });
       
       $('#demoSelect1').select2();
       $('#demoSelect2').select2();
     </script>
  <script type="text/javascript">
  
  var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56]
            },
            {
                label: "KHEMRAJ FEKAR",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86]
            }
        ]
    };

    var pdata = [
        {
            value: 300,
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "CSE"
        },
        {
            value: 50,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "CIVIL"
        },
        {
            value: 100,
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "MECHANICAL"
        }
    ]
    
    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);
    
    var ctxb = $("#barChartDemo").get(0).getContext("2d");
    var barChart = new Chart(ctxb).Bar(data);
    
    var ctxr = $("#radarChartDemo").get(0).getContext("2d");
    var radarChart = new Chart(ctxr).Radar(data);
    
    var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
    var polarChart = new Chart(ctxpo).PolarArea(pdata);
    
    var ctxp = $("#pieChartDemo").get(0).getContext("2d");
    var pieChart = new Chart(ctxp).Pie(pdata);
    
    var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
    var doughnutChart = new Chart(ctxd).Doughnut(pdata);
    
    
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