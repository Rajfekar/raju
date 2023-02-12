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