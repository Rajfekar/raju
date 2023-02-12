<!doctype html>
<html lang="en">

<head>
      

    <style>
  
         #reader {
        width: 600px;
    }
    #result {
        text-align: center;
        font-size: 1.5rem;
    }
    </style>
       <link rel="stylesheet" href="/css/style.css">

  <title>{{$t}} QR Scanner by Khemraj Fekar</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="/js/html5-qrcode.min.js"></script>
</head>

<body>
 
  
<main style="background: #f4f7f7;">
     @if(Session::has('success'))
     
   <div id="rb5" style="color:green;  font-size:2em; text-transform:uppercase;">{{Session::get('success')}}</div>
   @endif
   @if(Session::has('fail'))
  
   <div id="rb55" style="color:red; font-size:2em; text-transform:uppercase;">{{Session::get('fail')}}</div>
   @endif
   <div class="container">
   <div class="row justify-content-center">
        <div style="justify-content:center;" class="col-md-8 scan" id="reader"></div>
       
       
   </div>
    <div class="row justify-content-center">
        <div class="col-md-4" id="result">
          <a onclick="Play();" type="button" name="" id="" class="btn btn-danger" role="button">Button</a>
          <a onclick="Play2();" type="button" name="" id="" class="btn btn-success"  role="button">Button2</a>
          <a  class="btn btn-primary" href="{{url('/rit/libdashboard')}}" role="button">Button3</a>
           <span id="teacher" style="visibility: hidden;">{{$t}}</span>
          
          
        </div> 
       
       
   </div>
   
   
   
   
   
   
   
     <!-- ========== Start attendence book rrecord ========== -->

      <div id="attendance" class="container portion">
        <div class="listleft">
          <h2>ATTENDANCE BOOK📚 </h2>
        </div>
        <br>

        <div class="table-responsive">
          <table class="table table-bodered table-striped table-hover" id="example6">
            <thead class="table-primary">
              <tr>
                <th scope="col">N</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">RollNo</th>
                <th scope="col">Branch</th>
                <th scope="col">Semester</th>
                <th scope="col">Subject</th>
                <th scope="col">Date</th>
                <th scope="col">Attendance</th>
              </tr>
            </thead>
            <tbody>
              @php
              $i=1;
              @endphp
              @foreach($a as $b)
              <tr>
                <th scope='row'>{{$i++}}</th>
                <td>
          
                        <img  class="app-sidebar__user-avatar"  src="{{'/storage/students/'. $b->demo2}}" alt="img" onerror=this.src="{{'/images/profile.jfif'}}" height="50px" width="50px" style="border-radius: 50%">
                  
                </td>
                <td>{{$b->name}}</td>
                <td>{{$b->rollno}}</td>
                <td>   @if($b->r2 == 0)
                  {{"CSE"}}
                  @elseif($b->r2 == 1)
                  {{"CIVIL"}}
                  @elseif($b->r2 == 2)
                  {{"EEE"}}
                  @elseif($b->r2 == 3)
                  {{"MECHANICAL"}}
                  @elseif($b->r2 == 4)
                  {{"ELECTRONICS"}}
                  @elseif($b->r2 == 5)
                  {{"BIOTECH"}}
                  @elseif($b->r2 == 6)
                  {{"THERMAL"}}
                  @elseif($b->r2 == 7)
                  {{"CHEMICAL"}}
                  @elseif($b->r2 == 8)
                  {{"IT"}}
                  @elseif($b->r2 == 9)
                  {{"ENVIRONMENTAL"}}
                  @elseif($b->r2 == 10)
                  {{"ENERGY MANAGMENT"}}
                  @else
                  {{$b->r2}}
                      
                  @endif
                 </td>
                 <td>{{$b->r3}}</td>
               
                <td>{{$b->subject}}</td>
                <td>{{$b->date}}</td>
                <td>
                  @if($b->r1 == 1)
                  {{"Present"}}
                  @else
                  {{"Absent"}}
                  @endif
                
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- ========== End attendence book rrecord ========== -->

  </div>
</main>
  <footer>
      <br>
      <br>
    <!-- place footer here -->
     <div class="content">
    <div class="left box">
      <div class="upper">
        <div class="topic">About us</div>
        <p>This Website Is only for work purpose of ritee library.</p>
      </div>
      <div class="lower">
        <div class="topic">Contact us</div>
        <div class="phone">
          <a href="tel:+917697477107"><i class="fas fa-phone-volume"></i>+917697477107</a>
        </div>
        <div class="email">
          <a href="riteelibrary@gmail.com"><i class="fas fa-envelope"></i>riteelibrary@gmail.com</a>
        </div>
      </div>
    </div>
    <div class="middle box">
      <div class="topic">Our Services</div>
      <div><a href="#">Web Design, Development</a></div>
      <div><a href="#">Web UX Design, Reasearch</a></div>

    </div>
    <div class="right box">
      <div class="topic"> Contact Us</div>
      <form action="#">
        <input type="text" placeholder="Enter email address">
        <input type="submit" name="" value="Send">
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </form>
    </div>
  </div>
  <div class="bottom">
    <center>
      <p>Copyright © {{$year=date('Y')}} <br> made with ❤️ by <a href="#">Khemraj Fekar</a> <br> All rights reserved</p>
    </center>
  </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
 
<script>
    
//scanner


function Play2()
    {

        const beep = new Audio('audio/beep.mp3');
    
        beep.play();

    }
  function Play()
    {
  
        
        const fail = new Audio('audio/fail.mp3');
        fail.play();
    }
    
    
   
    
    
    
 

function rb2(){
    window.setTimeout(Play(), 100);
}function rb3(){
    window.setTimeout(Play3(), 100);
}



  // function autoRefreshPage()  
  // {  
  //     window.location.href="http://127.0.0.1:8000/q" 
  // }  
  // setInterval('autoRefreshPage()', 300000);  

    const scanner = new Html5QrcodeScanner('reader', { 
        // Scanner will be initialized in DOM inside element with id of 'reader'
        qrbox: {
            
            width: 350,
            height: 350,
        },  // Sets dimensions of scanning box (set relative to reader element width)
        fps: 120, // Frames per second to attempt a scan
    });


    scanner.render(success, error);
    // Starts scanner

    function success(result) {
     
      const n = result.length;
      if(n<10){
        Play2()
        let t = document.getElementById('teacher').innerHTML
        window.setTimeout(function(){
             window.location.href="http://127.0.0.1:8000/rit/fdashboard/scanner/" + result + "/" + t
        }, 1600);
       

      
      
       
        scanner.clear();
        // Clears scanning instance

        document.getElementById('reader').remove();
        // Removes reader element from DOM since no longer needed
    
    }
  }
    function error(err) {
        // console.error(err);
        // Prints any errors to the console
    }

  let notice = document.getElementById("rb55")
  
         let color = notice.style.color
         if (color == "red") {
           rb2()
         }
         
         
 
        
         
</script>






</body>


</html>