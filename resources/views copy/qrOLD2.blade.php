

<!DOCTYPE html>
<html lang="en">
    <head>
       
        <title>QR Scanner by Khemraj Fekar</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link rel="stylesheet" href="/css/bootstrap.min.css" />

        <script src="/js/html5-qrcode.min.js"></script>
       <style>

      
#reader {
    width: 80%;
    height: 80%;
    margin-top: 2em;
    margin-left: 2em;
    justify-content: center;
}
#reader__scan_region
{
    width: 100%;
    height: 100%;

}

#reader__dashboard 
{
    margin-top: 7em;
}
#html5-qrcode-button-camera-start 
{
    padding: 5px;
    border: 2px solid white;
    background: green;
    color: white;
}
#html5-qrcode-button-camera-stop
{
    padding: 5px;
    border: 2px solid white;
    background: red;
    color: white;
}


.blink {
            animation: blinker 2s linear infinite;
            color: red;
            font-family: sans-serif;
        }
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

.main {
  margin: 0;
  padding: 0;
    background: linear-gradient(black,darkblue);

}
.container
{
  margin: 0;
  padding: 0;

}
/* #rb5 { */
    /* color: rgb(103, 251, 17); 
    font-size:2em;
    text-transform:uppercase; 
    box-shadow: 0 0 5px #48f751,
                0 0 25px #12f352,
                0 0 50px #56f133,
                0 0 100px #6df52e;
    text-shadow:-1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;
    background:black;
} */

#rb55{
    color:red; 
    font-size:2em;
    text-transform:uppercase; 
    box-shadow: 0 0 5px #08dde1,
                0 0 25px #0dc2e7,
                0 0 50px #1de6f1,
                0 0 100px #05c2c9;
    text-shadow:-1px 0 white, 0 1px white, 1px 0 white, 0 -1px white; 
    background:rgb(29, 7, 7);
}

.profileimage:hover {
    height: 10em;
    width: 10em;

}

           
.scan
{
    position: relative;
    display: flex;
    align-items: center;
    flex-direction: column;
    
}
.scan .qrcode
{
    position: relative;
    width: 400px;
    height: 400px;
    background: url(QR_Code01.png);
    background-sizing: 400px;


}

#reader__scan_region video
{
    animation: animatesizev 4s linear infinite;
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
@keyframes animatesizev {
    0%,100%{
        opacity: 0;

        
    }
    50%{
            opacity: 1;


    }

  
}


.scan .qrcode::after 
    {
        content: '';
        position: absolute;
        inset: 20px;
        width: calc(100% - 40px);
        height: 2px;
        background: #35fd5c;
        filter: drop-shadow(0 0 20px #35fd5c) drop-shadow(0 0 60px #35fd5c);
        animation: animateline 4s ease-in-out infinite;

        
    }
    @keyframes animateline
    {
        0% {
            top: 20px;

        }
        50%
        {
            top: calc(100% - 20px);
            top: calc(100% - 20px);
        }
    }

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
    .scan h3 
    {
        text-transform: uppercase;
        font-size: 2em;
        margin-top: 20px;
        color: #fff;
        filter: drop-shadow(0 0 20px #fff) drop-shadow(0 0 60px #fff);
        letter-spacing: 2px;
        animation: animateText 0.5s  steps(1) infinite;

    }

    @keyframes animateText
    {
        0% ,100%{
            opacity: 0;

        }
        50% {
            opacity: 1;

        }
    }


/***** digital clock *****/
#date
{
    margin-bottom: 40px;
    display: flex;
    padding: 10px 20px;
    font-size: 2em;
    font-weight: 600;
    border: 2px solid rgba(0,0,0,0.5);
    border-radius: 40px;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.5),
    5px 5px 20px rgba(255,255,255,0.2),
    -5px -5px 15px rgba(0,0,0,0.75);





}
#date div
{
    position: relative;
    width: 60px;
    text-align: center;
    font-weight: 500;
    color: var(--clr);
    

}

#date div:nth-child(1)::after ,
#date div:nth-child(2)::after 
{
    content: ':';
    position: absolute;
    right: -4px;


}

#date div:last-child
{
    font-size: 0.5em;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f4f7f7;

}




#time
{
    margin-bottom: 40px;
    display: flex;
    padding: 10px 20px;
    font-size: 2em;
    font-weight: 600;
    border: 2px solid rgba(0,0,0,0.5);
    border-radius: 40px;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.5),
    5px 5px 20px rgba(255,255,255,0.2),
    -5px -5px 15px rgba(0,0,0,0.75);





}
#time div
{
    position: relative;
    width: 60px;
    text-align: center;
    font-weight: 500;
    color: var(--clr);
    

}

#time div:nth-child(1)::after ,
#time div:nth-child(2)::after 
{
    content: ':';
    position: absolute;
    right: -4px;


}

#time div:last-child
{
    font-size: 0.5em;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f4f7f7;

}

#time div:nth-child(2)::after 
{
    animation: animate 1s steps(1) infinite;
}

@keyframes animate
{
    0%{
        opacity: 1;
    }
    50% {
        opacity: 0;

    }
}


 #textbox {
              position: relative;
              background-blend-mode: inherit;
              font-size: 1.6em;
              letter-spacing: 5px;
              color: #0e3742;
              text-transform: uppercase;
              width: 100%;
              text-align: center;
              -webkit-box-reflect: below 1px linear-gradient(transparent,#0008);
              line-height: 0.70em;
              outline: none;
              animation: animateshadow linear 5s infinite;


            }
      @keyframes animateshadow
      {
        0%,18%,20%,50.1%,60%,65.1%,80%,90.1%,92%
        {
          color:#0e3742;
          text-shadow: none;


        }
        18.1%,20.1%,30%,50%,60.1%,65%,80.1%,90%,92.1%,100%{
          color:#fff;
          text-shadow: 0 0 10px #23f403,
          0 0 20px #03f43b,
          0 0 40px #03f41f,
          0 0 80px #03f413,
          0 0 160px #03f40b;


        }

      }



      #textbox2 {
        position: relative;
        background-blend-mode: inherit;
        font-size: 1.6em;
        letter-spacing: 5px;
        color: #0e3742;
        text-transform: uppercase;
        width: 100%;
        text-align: center;
        -webkit-box-reflect: below 1px linear-gradient(transparent,#0008);
        line-height: 0.70em;
        outline: none;
        animation: animateshadow2 linear 5s infinite;

       

      }
      

      @keyframes animateshadow2
      {
        0%,18%,20%,50.1%,60%,65.1%,80%,90.1%,92%
        {
          color:#0e3742;
          text-shadow: none;


        }
        18.1%,20.1%,30%,50%,60.1%,65%,80.1%,90%,92.1%,100%{
          color:#fff;
          text-shadow: 0 0 10px #f40f03,
          0 0 20px #f42f03,
          0 0 40px #f42303,
          0 0 80px #f44b03,
          0 0 160px #f42303;


        }

      }
      
      
       .textbox3 {
        position: relative;
        background-blend-mode: inherit;
        font-size: 1.6em;
        letter-spacing: 5px;
        color: #0e3742;
        text-transform: uppercase;
        width: 100%;
        text-align: center;
        -webkit-box-reflect: below 1px linear-gradient(transparent,#0008);
        line-height: 0.70em;
        outline: none;
        /*animation: animateshadow linear 5s infinite;*/
        text-shadow: 0 0 10px #0fe5e9,
          0 0 20px #0fe5e9,
          0 0 40px #0fe5e9,
          0 0 80px #0fe5e9,
          0 0 160px #0fe5e9;

       

      }
      
/***** End digital clock *****/

/***** End digital clock *****/
       </style>
        {{-- qr_css --}}
        <!--<link rel="stylesheet" href="/css/qr.css" />-->
        {{-- footercss --}}
        <link rel="stylesheet" href="/css/style.css" />
    </head>

    <body>
        <main class="main">
                  
            @if(Session::has('success'))

            <h2 id="textbox">
                <marquee behavior="alternate" direction="" scrollamount="6">
                    {{Session::get('success')}}
                </marquee>
            </h2>

            @endif
             @if(Session::has('fail'))
            <input id="alertdanger" type="hidden" value="1" />
            <h2 style="color: red" id="textbox2">
                <marquee behavior="alternate" direction="" scrollamount="6">
                    {{Session::get('fail')}}
                </marquee>
            </h2>
            @endif
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div id="time">
                            <div id="hour" style="--clr:orange">00</div>
                            <div id="minutes" style="--clr:orange">00</div>
                            <div id="seconds" style="--clr:orange">00</div>
                            <div id="ampm">AM</div>
                        </div>
                        
                        <div style="color:white;" class="textbox3"> Total: {{$count}}  </div> <br><br>
                        <div style="color:white;" class="textbox3"> OUT: {{$totalout}} </div><br><br>
                        <div style="color:white;" class="textbox3"> IN: {{$count-$totalout}} </div>
                       
                       
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
                        <div id="date">
                            <div id="dd" style="--clr:orange">{{date('d')}}</div>
                            <div id="mm" style="--clr:orange">{{date('m')}}</div>
                            <div id="yy" style="--clr:orange">{{date('y')}}</div>
                            <div id="day" style="--clr:orange">{{date('D')}}</div>
                        </div>
                        <div>
                            <a href="#">
                                            <img
                                                height="100px"
                                                width="100px"
                                                class="profileimage"
                                                src="{{'storage/students/'. '$b->demo2'}}"
                                                alt="img"
                                                onerror=this.src="{{'/images/profile.jfif'}}"
                                                 style="border-radius: 50%"
                                            />
                                        </a>
                            
                        </div> <br>
                        @if(Session::has('sname'))
                       <div style="color:white;" class="textbox3"> {{Session::get('sname')}} </div> <br><br>
                       @else
                       <div style="color:white;" class="textbox3"> 
                       Khemraj Fekar </div> <br><br>

                       @endif
                     <div style="color:white;" class="textbox3">   ID: CS1945  </div> <br><br>
                       <div style="color:white;" class="textbox3"> MODE: ENTRY  </div><br><br>
                       <div style="color:white;" class="textbox3"> ENTER:10:00 AM  </div><br><br>
                      <div style="color:white;" class="textbox3">  EXIT: 02:00 PM  </div>

                        


                      
                      
                        
                           
                    </div>
                   
                </div>
<div>
     <a
                    onclick="Play();"
                    type="button"
                    name=""
                    id=""
                    class="btn btn-danger"
                    role="button"
                    ></a
                >
                <a
                    onclick="Play2();"
                    type="button"
                    name=""
                    id=""
                    class="btn btn-success"
                    role="button"
                    ></a
                >
    
</div>
    </div>           

                <!-- ========== Start attendence book rrecord ========== -->

                <div id="attendance" class="container mt-5">
                    <div class="listleft">
                        <h2 style="color: white;">
                            ATTENDANCE REPORT📚
                           
                        </h2>
                        
                    </div>
                    <br />

                    <div class="table-responsive">
                        <table
                            class="table table-bodered table-striped table-hover"
                            id="example6"
                        >
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
                                @php $i=$count; @endphp @foreach($a as $b)
                                <tr>
                                    <th style="color: white;" scope="row">
                                        {{$i--}}
                                    </th>
                                    <td>
                                        <a href="#">
                                            <img
                                                height="35px"
                                                width="35px"
                                                class="profileimage"
                                                src="{{'storage/students/'. $b->demo2}}"
                                                alt="img"
                                                onerror=this.src="{{'/images/profile.jfif'}}"
                                                 style="border-radius: 50%"
                                            />
                                        </a>
                                    </td>
                                    @if($b->outtime == "00:00 PM")

                                    <td  style="color: cyan; ">
                                        {{$b->name}}
                                    </td>
                                    @else
                                    <td  style="color: white; ">
                                        {{$b->name}}
                                    </td>
                                    @endif

                                    @if($b->outtime == "00:00 PM")
                                    <td class="blink"  style="color: white;">
                                        {{$b->memberid}}
                                    </td>
                                    @else
                                    <td style="color: white;">{{$b->memberid}}</td>
                                    @endif
                                    <td
                                        style="
                                        
                                            text-transform: uppercase; color: white;
                                        "
                                    >
                                        @if($b->department == 0) {{"CSE"}}
                                        @elseif($b->department == 1) {{"CIVIL"}}
                                        @elseif($b->department == 2) {{"EEE"}}
                                        @elseif($b->department == 3)
                                        {{"MECHANICAL"}} @elseif($b->department
                                        == 4) {{"ELECTRONICS"}}
                                        @elseif($b->department == 5)
                                        {{"BIOTECH"}} @elseif($b->department ==
                                        6) {{"THERMAL"}} @elseif($b->department
                                        == 7) {{"CHEMICAL"}}
                                        @elseif($b->department == 8) {{"IT"}}
                                        @elseif($b->department == 9)
                                        {{"ENVIRONMENTAL"}}
                                        @elseif($b->department == 10) {{"ENERGY
                                        MANAGMENT"}} @else {{$b->department}}
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
                                        @else {{$b->sem}} @endif
                                    </td>
                                    <td style="color: rgb(16, 252, 16);">{{$b->intime}}</td>
                                    @if($b->outtime == "00:00 PM")
                                    <td class="blink" style="color: red">
                                        {{$b->outtime}}
                                    </td>
                                    @else
                                    <td style="color: rgb(16, 252, 16);;">
                                        {{$b->outtime}}
                                    </td>

                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- ========== End attendence book rrecord ========== -->
            
        </main>
        <footer>
            <br />
            <br />
            <!-- place footer here -->
            <div class="content">
                <div class="left box">
                    <div class="upper">
                        <div class="topic">About us</div>
                        <p>
                            This Website Is only for work purpose of ritee
                            library.
                        </p>
                    </div>
                    <div class="lower">
                        <div class="topic">Contact us</div>
                        <div class="phone">
                            <a href="tel:+917697477107"
                                ><i class="fas fa-phone-volume"></i
                                >+917697477107</a
                            >
                        </div>
                        <div class="email">
                            <a href="riteelibrary@gmail.com"
                                ><i class="fas fa-envelope"></i
                                >riteelibrary@gmail.com</a
                            >
                        </div>
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
        <!-- Bootstrap JavaScript Libraries -->

       
        <script>
            //scanner

            function Play2() {
                const beep = new Audio("audio/beep.mp3");

                beep.play();
            }
            function Play() {
                const fail = new Audio("audio/fail.mp3");
                fail.play();
            }

            function rb() {
                window.setTimeout(Play2(), 100);
            }

            function rb2() {
                window.setTimeout(Play(), 100);
            }
            function rb3() {
                window.setTimeout(Play3(), 100);
            }

            function autoRefreshPage() {
                window.location.href="http://khemrajfekar.in/rit+raipur+qr+code+login+by+khemraj+fekar+7697477107+cse+301202219077+cs1945";
                // window.location.href = "http://127.0.0.1:8000/rit+raipur+qr+code+login+by+khemraj+fekar+7697477107+cse+301202219077+cs1945";
            }
            setInterval("autoRefreshPage()", 1000 * 600);

            let scanner = new Html5QrcodeScanner("reader", {
                // Scanner will be initialized in DOM inside element with id of 'reader'
                qrbox: {
                    width: 450,
                    height: 450,
                }, // Sets dimensions of scanning box (set relative to reader element width)
                fps: 120, // Frames per second to attempt a scan
            });

            scanner.render(success, error);
            // Starts scanner

            function success(result) {
                const n = result.length;
                if (n < 12) {
                    rb();
                    window.setTimeout(function () {
                         window.location.href="http://khemrajfekar.in/rit/quick/" + result;
                        // window.location.href ="http://127.0.0.1:8000/rit/quick/" + result;
                    }, 1700);

                    scanner.clear();
                    // Clears scanning instance

                    document.getElementById("reader").remove();
                    // Removes reader element from DOM since no longer needed
                }
            }
            function error(err) {
                // console.error(err);
                // Prints any errors to the console
            }

            try {
                let button = document.getElementById("alertdanger").value;
                if (button == 1) {
                rb2();
            }
                
            } catch (error) {
                console.log("error try catch success");
                
            }
           

setInterval(()=>{

            //    digital clock 
  
   let hours = document.getElementById('hour');
   let minutes = document.getElementById('minutes');
   let seconds = document.getElementById('seconds');
   let ampm = document.getElementById('ampm');



  
   let h = new Date().getHours();
   let m = new Date().getMinutes();
   let s = new Date().getSeconds();
   let am = h >= 12 ? "PM" : "AM";
   // convert 24 hour to 12 hour clock
   if(h>12)
   {
    h  = h-12;
   }
   
   //add zero before single digit number
   h = (h<10) ? "0"+h : h;
   m = (m<10) ? "0"+m : m;
   s = (s<10) ? "0"+s : s;
   hours.innerHTML = h;
   minutes.innerHTML = m;
   seconds.innerHTML = s;
   ampm.innerHTML = am;
       });

        </script>

        <script src="js/qr.js"></script>
    </body>
</html>
