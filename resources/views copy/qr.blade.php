<!doctype html>
<html lang="en">

<head>
    <title>QR Scanner by Khemraj Fekar</title>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/qr.css" />

    <style>
    .border
    {
        position: absolute;
        inset: 0;
        background: url({{url('border.png')}});
        background-size: 400px;
        margin-left: 3.9em;
        width: 413px;
        background-repeat: no-repeat;
        animation: animateText 0.5s linear infinite;

    }
    .scan .qrcode::before 
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: url({{url('QR_Code02.png')}});
    /* background: url('QR_Code02.png'); */
    background-size: 400px;
    animation: animatesize 4s ease-in-out infinite;

}
@keyframes animatesize {
    0%,100%{
        height: 0%;  
    }
    50%{
            height: calc(100% - 20px);
    }
}
/* Hide scrollbar for Chrome, Safari and Opera */
body::-webkit-scrollbar {
  display: none;
}

    </style>


</head>

<body style="background: linear-gradient(black,darkblue);">
  <header>
    <!-- place navbar here -->
  </header>
  <main>
<div class="container">
    @if(Session::has('success'))
        <h2 id="textbox"><marquee behavior="alternate" direction="" scrollamount="6">{{Session::get('success')}}</marquee></h2>
    @endif
    @if(Session::has('fail'))
    <input id="alertdanger" type="hidden" value="1" />
    <h2 style="color: red" id="textbox2"><marquee behavior="alternate" direction="" scrollamount="6">{{Session::get('fail')}}</marquee></h2>
    @endif
    <div class="row">
        <div class="col-md-3">
                @if(Session::has('success'))
                <div class="boxshadow7" id="time">
                @else
                <div class="boxshadow6" id="time">
                @endif
                <div id="hour" style="--clr:orange">00</div>
                <div id="minutes" style="--clr:white">00</div>
                <div id="seconds" style="--clr:#54e90f">00</div>
                <div id="ampm">AM</div>
            </div>
        
            <div style="color:white;" class="textbox3 textshadow3"> Total: {{$count}}  </div> <br><br>
            <div style="color:white;" class="textbox3 textshadow3"> OUT: {{$totalout}} </div><br><br>
            <div style="color:white;" class="textbox3 textshadow3"> IN: {{$count-$totalout}} </div>
        
        </div>
        <div class="col-md-6">
            <div class="scan">
                <div class="qrcode">
                   <div id="reader"></div>
                </div>
                <h3>Scanning...</h3>
                <div class="border"></div>
            </div>

        </div>
        <div class="col-md-3">
                @if(Session::has('success'))
                <div class="boxshadow7" id="date">
                @else
                <div class="boxshadow6" id="date">
                @endif
                <div id="dd" style="--clr:orange">{{date('d')}}</div>
                <div id="mm" style="--clr:white">{{date('m')}}</div>
                <div id="yy" style="--clr:#54e90f">{{date('y')}}</div>
                <div id="day" style="--clr:white">{{date('D')}}</div>
            </div>  <br><br>
            @if(Session::has('sname'))
                <div class="boximg">
                    <div class="imgcontent">
                        <a href="#"><img height="150px" width="150px" class="profileimage" src="{{'storage/students/'. session::get('simage')}}" alt="img" onerror=this.src="{{'/images/profile.jfif'}}"  style="border-radius: 50%"/></a>

                    </div>

                </div>
               
                @if (Session::get('souttime') == "00:00 PM")
                <div style="color:white;" class="textbox3 textshadow2"> {{Session::get('sname')}} </div> <br><br>
                <div style="color:white;" class="textbox3 textshadow2">ID: {{Session::get('slibid')}} </div> <br><br>
                <div style="color:white;" class="textbox3 textshadow2">Enter {{Session::get('sintime')}} </div> <br><br>
                <div style="color:white;" class="textbox3 textshadow2">Exit {{Session::get('souttime')}} </div> <br><br>
                 
                @else
                <div style="color:white;" class="textbox3 textshadow1"> {{Session::get('sname')}} </div> <br><br>
                <div style="color:white;" class="textbox3 textshadow1">ID: {{Session::get('slibid')}} </div> <br><br>
                <div style="color:white;" class="textbox3 textshadow1">Enter {{Session::get('sintime')}} </div> <br><br>
                <div style="color:white;" class="textbox3 textshadow1">Exit {{Session::get('souttime')}} </div> <br><br>
                 
                @endif
               
            @else
                <a href="#"><img height="150px" width="150px" class="profileimage" src="{{'images/A1.jpg'}}" alt="img" onerror=this.src="{{'/images/profile.jfif'}}"  style="border-radius: 50%"/></a>
                <div style="color:white;" class="textbox3 textshadow3">Khemraj Fekar </div> <br><br>
                <div style="color:white;" class="textbox3 textshadow3">ID: CS1945 </div> <br><br>
                <div style="color:white;" class="textbox3 textshadow3">ENTER 00:00 AM </div> <br><br>
                <div style="color:white;" class="textbox3 textshadow3">EXIT  00:00 PM </div> <br><br>
            @endif

        </div>
        <div class="col-md-12">
                <a onclick="Play();" type="button" name="" id="" class="btn btn-danger" role="button"></a>
                <a onclick="Play2();" type="button" name="" id="" class="btn btn-success" role="button" ></a>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bodered table-striped table-hover" id="example6">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">N</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">LIbraryID</th>
                            <th scope="col">Department</th>
                            <th scope="col">Semester</th>
                            <th scope="col">InTime</th>
                            <th scope="col">OutTime</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                             $i=$count; 
                        @endphp 
                        @foreach($a as $b)
                        <tr>
                            <th style="color: white;" scope="row">{{$i--}}</th>
                            <td><a href="#"><img height="35px" width="35px" class="profileimage" src="{{'storage/students/'. $b->demo2}}" alt="img" onerror=this.src="{{'/images/profile.jfif'}}"  style="border-radius: 50%"/></a></td>
                            @if($b->outtime == "00:00 PM")
                            <td  style="color: cyan; ">{{$b->name}}</td>
                            @else
                            <td  style="color: white; ">{{$b->name}}</td>
                            @endif
                            @if($b->outtime == "00:00 PM")
                            <td class="blink"  style="color: white;">{{$b->memberid}}</td>
                            @else
                            <td style="color: white;">{{$b->memberid}}</td>
                            @endif
                            <td style="text-transform: uppercase; color: white;" >
                                @if($b->department == 0) {{"CSE"}}
                                @elseif($b->department == 1) {{"CIVIL"}}
                                @elseif($b->department == 2) {{"EEE"}}
                                @elseif($b->department == 3) {{"MECHANICAL"}} 
                                @elseif($b->department == 4) {{"ELECTRONICS"}}
                                @elseif($b->department == 5) {{"BIOTECH"}} 
                                @elseif($b->department == 6) {{"THERMAL"}} 
                                @elseif($b->department == 7) {{"CHEMICAL"}}
                                @elseif($b->department == 8) {{"IT"}}
                                @elseif($b->department == 9) {{"ENVIRONMENTAL"}}
                                @elseif($b->department == 10) {{"ENERGY MANAGMENT"}} 
                                @else {{$b->department}}
                                @endif
                            </td>
                            <td style="color: white;">
                                @if($b->sem == 1) {{"1st Semester"}}
                                @elseif($b->sem == 2) {{"2nd Semester"}}
                                @elseif($b->sem == 3) {{"3rd Semester"}}
                                @elseif($b->sem == 4) {{"4th Semester"}}
                                @elseif($b->sem == 5) {{"5th Semester"}}
                                @elseif($b->sem == 6) {{"6th Semester"}}
                                @elseif($b->sem == 7) {{"7th Semester"}}
                                @elseif($b->sem == 8) {{"8th Semester"}}
                                @else {{$b->sem}} 
                                @endif
                            </td>
                            <td style="color: rgb(16, 252, 16);">{{$b->intime}}</td>
                            @if($b->outtime == "00:00 PM")
                            <td class="blink" style="color: red">{{$b->outtime}}</td>
                            @else
                            <td style="color: rgb(16, 252, 16);;">{{$b->outtime}}</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
  </main>
  <footer>
    <!-- place footer here -->
    <div class="content">
        <div class="left box">
            <div class="upper">
                <div class="topic">About us</div>
                <p>This Website Is only for work purpose of rit library.</p> 
            </div>
            <div class="lower">
                <div class="topic">Contact us</div>
                <div class="phone"><a href="tel:+917697477107"><i class="fas fa-phone-volume"></i>+917697477107</a></div>
                <div class="email"><a href="riteelibrary@gmail.com"><i class="fas fa-envelope"></i>riteelibrary@gmail.com</a></div>
            </div>
        </div>
        <div class="middle box">
            <div class="topic">Our Services</div>
            <div><a href="#">Web Design, Development</a></div>
            <div><a href="#">Web UX Design, Reasearch</a></div>
        </div>
        <div class="right box">
            <div class="topic">Contact Us</div>
            <form action="#">
                <input type="text" placeholder="Enter email address" />
                <input type="submit" name="" value="Send" />
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
            <p>
                Copyright © {{$year=date('Y')}} <br />
                made with ❤️ by <a href="#">Khemraj Fekar</a> <br />
                All rights reserved
            </p>
        </center>
    </div>
</footer>
 
  <script src="/js/qrcode.js"></script>
 
</body>

</html>