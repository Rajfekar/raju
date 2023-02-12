@include('head')


<!-- ========== Start rbody ========== -->




<!-- ========== Start container1 ========== -->

 
<div class="container">
 <!-- ========== Start notification ========== -->



   @if(Session::has('success'))
   <div id="success" style="color:rgb(96, 237, 96);">{{Session::get('success')}}</div>
   @endif
   @if(Session::has('fail'))
   <div style="color:red;">{{Session::get('fail')}}</div>
   @endif
 <!-- ========== end notification ========== -->
 <!-- ========== Start row1 ========== -->
 
 <div class="row">
    <!-- ========== Start leftside col4 ========== -->
    
    <div class="col-md-4">
        
        <!--serch box-->
 <h3 class="fw-bold mb-4">Search<br></h3>
        <div class="input-group" style="margin-top:1em;">
             
  <div class="form-outline">
      
    {{-- <input type="search" id="formsearch" class="form-control" /> --}}
    <!--<label  class="form-label" for="formsearch">Search</label>-->
  </div>
  {{-- <button type="button" class="btn btn-primary" style="height:2.5em;"> --}}
    <i class="fas fa-search"></i>
  </button>
</div>


      <section style="" >
         <div class="container py-5">
           <div class="row d-flex justify-content-center">
             <div   class="col-md-12 col-xl-12">
               <h3 class="fw-bold mb-4">Quote</h3>
               <p  class="mb-4 pb-2 mb-md-12 pb-md-0">
                A library is a place where books and sources of information are stored. They make it easier for people to get access to them for various purposes. Libraries are very helpful and economical too. They include books, magazines, newspapers, DVDs, manuscripts and more. In other words, they are an all-encompassing source of information. A library may make use of the Internet in a number of ways, from creating their own library website to making the contents of its catalogues searchable online. 
               </p>
             </div>
           </div>
       
           <div class="row text-center">
             <div class="col-md-12 mb-4 mb-md-0">
               <div class="card" style="background:transparent;">
                 <div class="card-body py-4 mt-2">
                   <div class="d-flex justify-content-center mb-4">
                     <img
                       src="/images/principal.png"
                       class="rounded-circle shadow-1-strong"
                       width="100"
                       height="100"
                     />
                   </div>
                   <h5 class="font-weight-bold">Mr. Swapnil Jain</h5>
                   <h6 class="font-weight-bold my-3">Principal</h6>
                  
                   <ul class="list-unstyled d-flex justify-content-center">
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="fas fa-star-half-alt fa-sm text-info"></i>
                     </li>
                   </ul>
                   <p class="mb-2">
                     <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                     consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                     ad velit ab hic tenetur.
                   </p>
                 </div>
               </div>
             </div>
             <div class="col-md-12 mb-4 mb-md-0">
               <div class="card" style="background:transparent;">
                 <div class="card-body py-4 mt-2">
                   <div class="d-flex justify-content-center mb-4">
                     <img
                       src="/images/gmsir.jpg"
                       class="rounded-circle shadow-1-strong"
                       width="100"
                       height="100"
                     />
                   </div>
                   <h5 class="font-weight-bold">Mr. Amit Kandalkar</h5>
                   <h6 class="font-weight-bold my-3">HR Manager</h6>
                   <ul class="list-unstyled d-flex justify-content-center">
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                   </ul>
                   <p class="mb-2">
                     <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                     sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                     labore laboriosam.
                   </p>
                 </div>
               </div>
             </div>
             <div class="col-md-12 mb-0">
               <div class="card" style="background:transparent;">
                 <div class="card-body py-4 mt-2">
                   <div class="d-flex justify-content-center mb-4">
                     <img
                       src="/images/librarysir.jpg"
                       class="rounded-circle shadow-1-strong"
                       width="100"
                       height="100"
                     />
                   </div>
                   <h5 class="font-weight-bold">Mr. Vishnu Vaishanav</h5>
                   <h6 class="font-weight-bold my-3">Librarian</h6>
                   <ul class="list-unstyled d-flex justify-content-center">
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="fas fa-star fa-sm text-info"></i>
                     </li>
                     <li>
                       <i class="far fa-star fa-sm text-info"></i>
                     </li>
                   </ul>
                   <p class="mb-2">
                     <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                     nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                     vestibulum in tempus viverra turpis.
                   </p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </section>
      
      
      
       
         
       
       
      
         
      </div>
      <!-- ========== End leftside col4 ========== -->
      
      <!-- ========== Start rightside ========== -->
      
 <div class="col-md-8">
         
         {{-- marquee start --}}
   <div class="transparent container">

      <!-- Hover added -->
          
      <div class="listmarquee">
        <h2> Latest Notifications </h2>
         <marquee  direction="up" style="font-family:Book Antiqua; color: black" scrolldelay="300">
      @foreach ($notification as $notice)

         <a href="/notice/{{$notice->id}}" class="transparent2"><b>{{$notice->date . " "}} {{$notice->department}}:- </b>{{$notice->subject}} - {{$notice->title}}</a><br><br>
       @endforeach
        
         
      </marquee>
      </div>

     <br>

   </div>
{{-- marqueee end --}}
         <br>
{{-- slider --}}


<!-- ========== Start slider ========== -->
<h2 style="text-align:center;">College Gallery</h2>
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
   
   <div class="carousel-indicators">
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
   </div>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="/images/Rit1.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>RITEE RAIPUR</h5>
         <p>Beauty of RITEE.</p>
       </div>
     </div>
     <div class="carousel-item">
       <img src="/images/R1.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>With Our GM sir</h5>
         <p>Some amazing memorable moments.</p>
       </div>
     </div>
     <div class="carousel-item">
       <img src="/images/Rit3.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Yoga Day</h5>
         <p>Memory of International Yoga day </p>
       </div>
     </div>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
   </button>
 </div>

<!-- ========== End slider ========== -->

         <!-- ========== Start testimonials of students ========== -->
         <br>
         <section>
            <div class="row d-flex justify-content-center">
              <div class="col-md-10 col-xl-8 text-center">
                <h3 class="mb-4">Testimonials</h3>
                <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                  Our Students Reviews
                </p>
              </div>
            </div>
          
            <div class="row text-center">
              <div class="col-md-4 mb-5 mb-md-0">
                <div class="d-flex justify-content-center mb-4">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                    class="rounded-circle shadow-1-strong" width="150" height="150" />
                </div>
                <h5 class="mb-3">Anjali Sahu</h5>
                <h6 class="text-primary mb-3">Web Developer</h6>
                <p class="px-xl-3">
                  <i class="fas fa-quote-left pe-2"></i>“A library outranks any other one thing a community can do to benefit its people. It is a never-failing spring in the desert.”
                </p>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 mb-5 mb-md-0">
                <div class="d-flex justify-content-center mb-4">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                    class="rounded-circle shadow-1-strong" width="150" height="150" />
                </div>
                <h5 class="mb-3">Nancy Singh</h5>
                <h6 class="text-primary mb-3">Graphic Designer</h6>
                <p class="px-xl-3">
                  <i class="fas fa-quote-left pe-2"></i>“A library is the delivery room for the birth of ideas, a place where history comes to life.”
                </p>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 mb-0">
                <div class="d-flex justify-content-center mb-4">
                  <img src="images/A1.jpg"
                    class="rounded-circle shadow-1-strong" width="150" height="150" />
                </div>
                <h5 class="mb-3">Khemraj Fekar</h5>
                <h6 class="text-primary mb-3">Web Devloper</h6>
                <p class="px-xl-3">
                  <i class="fas fa-quote-left pe-2"></i>I always learn something new from here and its a good place for study.
                </p>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-warning"></i>
                  </li>
                  <li>
                    <i class="far fa-star fa-sm text-warning"></i>
                  </li>
                </ul>
              </div>
            </div>
          </section>
         <!-- ========== End testimonials of students ========== -->
         
         
         
      </div>
      <!-- ========== End rightside ========== -->
   </div>
   <!-- ========== End row1 ========== -->
</div>

<!-- ========== End container1 ========== -->







@include('foot')