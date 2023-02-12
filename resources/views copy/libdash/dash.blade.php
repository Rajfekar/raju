@include('libdash.head')

    <main class="app-content">
    
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pie-chart"></i> Library Performance</h1>
          <p>library performance details.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">dashboard</a></li>
        </ul>
      </div>
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
      <div class="row">
        <div class="col-md-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>MEMBERS</h4>
              <p><b>{{$u}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-book fa-3x"></i>
            <div class="info">
              <h4>Books</h4>
              <p><b>{{$b}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>IBooks</h4>
              <p><b>{{$i}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Attendance</h4>
              <p><b>{{$a}}</b></p>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6">
          <div class="tile">

            <h3 class="tile-title">Attendance Record</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">IBooks Record</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Most Issued Books</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Most Attendance Branch</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="doughnutChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Radar Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="radarChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Polar Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="polarChartDemo"></canvas>
            </div>
          </div>
        </div>
      
      </div>
    </main>
   
   <!-- Essential javascripts for application to work-->
   <script src="/dash/js/jquery-3.3.1.min.js"></script>
   <script src="/dash/js/popper.min.js"></script>
   <script src="/dash/js/bootstrap.min.js"></script>
   <script src="/dash/js/main.js"></script>
   <!-- The java/dash/script plugin to display page loading on top-->
   <script src="/dash/js/plugins/pace.min.js"></script>
   <!-- Page specific javascripts-->
   <script type="text/javascript" src="/dash/js/plugins/chart.js"></script>
  
 <script src="/js/jQuery.js"></script>
 <script src="/js/jquery-3.5.1.js"></script>
 <script src="/js/jquery.dataTables.min.js"></script>
 <script src="/js/dataTables.bootstrap5.min.js"></script>
 <script src="/js/dataTables.buttons.min.js"></script>
 <script src="/js/buttons.bootstrap5.min.js"></script>
 <script src="/js/jszip.min.js"></script>
 <script src="/js/pdfmake.min.js"></script>
 <script src="/js/vfs_fonts.js"></script>
 <script src="/js/buttons.html5.min.js"></script>
 <script src="/js/buttons.print.min.js"></script>
 <script src="/js/buttons.colVis.min.js"></script>
 <script type="text/javascript">
   var p_month = @json($p_month);
   var c_month = @json($c_month);
   var p_month2 = @json($p_month2);
   var c_month2 = @json($c_month2);
   var pmonth = [];
    for (let index = 0; index < 31; index++) {
      pmonth.push(index+1);
     
  }
  
   var data = {
         labels: pmonth,
         datasets: [
             {
                 label: "My First dataset",
                 fillColor: "rgba(220,220,220,0.2)",
                 strokeColor: "rgba(220,220,220,1)",
                 pointColor: "rgba(220,220,220,1)",
                 pointStrokeColor: "#fff",
                 pointHighlightFill: "#fff",
                 pointHighlightStroke: "rgba(220,220,220,1)",
                 data: p_month
             },
             {
                 label: "KHEMRAJ FEKAR",
                 fillColor: "rgba(151,187,205,0.2)",
                 strokeColor: "rgba(151,187,205,1)",
                 pointColor: "rgba(151,187,205,1)",
                 pointStrokeColor: "#fff",
                 pointHighlightFill: "#fff",
                 pointHighlightStroke: "rgba(151,187,205,1)",
                 data: c_month
             }
         ]
     };
     var data2 = {
         labels: pmonth,
         datasets: [
             {
                 label: "My First dataset",
                 fillColor: "rgba(220,220,220,0.2)",
                 strokeColor: "rgba(220,220,220,1)",
                 pointColor: "rgba(220,220,220,1)",
                 pointStrokeColor: "#fff",
                 pointHighlightFill: "#fff",
                 pointHighlightStroke: "rgba(220,220,220,1)",
                 data: p_month2
             },
             {
                 label: "KHEMRAJ FEKAR",
                 fillColor: "rgba(151,187,205,0.2)",
                 strokeColor: "rgba(151,187,205,1)",
                 pointColor: "rgba(151,187,205,1)",
                 pointStrokeColor: "#fff",
                 pointHighlightFill: "#fff",
                 pointHighlightStroke: "rgba(151,187,205,1)",
                 data: c_month2
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
     var barChart = new Chart(ctxb).Bar(data2);
     
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