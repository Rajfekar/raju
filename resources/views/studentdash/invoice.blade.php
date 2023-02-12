@include('studentdash.head')

<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-file-text-o"></i> Invoice</h1>
        <p>Your Fees Payment All Reciept Here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Invoice</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile" style="background:;">
          <section class="invoice">
            <div class="row mb-4">
              <div class="col-6">
                <h5 class="page-header"><img src="/images/ritlogo.jpg" width="90em" height="80em" alt=""> Raipur Institute Of Technology , Raipur</h5>
              </div>
              <div class="col-6">
                <h5 class="text-right">Date:{{date('d/m/y')}}</h5>
              </div>
            </div>
            <div class="row invoice-info">
              <div class="col-4">From
                <address><strong>Raipur Institue Of Technology</strong><br>Chhatauna , Postal Code-492001<br>Main Road<br>Raipur<br>Email: ritee@gmail.com <br>Phone: 7697477107</address>
              </div>
              <div class="col-4">To
                <address><strong>{{$fees->name}}</strong><br> Address: {{$fees->d1}}<br>Phone: {{$s->mobile}}<br>Email: {{$s->email}}</address>
              </div>
              <div class="col-4"><b>Invoice ID: {{$fees->invoice_id}}</b><br><b>Transaction ID:{{$fees->transaction_id}}</b> 4F3S8J<br><b>Payment Date:</b> {{$fees->payment_date}}<br></div>
            </div>
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Course</th>
                      <th>Semester</th>
                      <th>Payment Method</th>
                      <th>Description</th>
                      <th>Total Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>{{$fees->cource." ".$fees->branch}}</td>
                      
                      <td>


                        @if($fees->sem == 1)
                        {{"1 Semester"}}
                      @elseif($fees->sem == 2)
                        {{"2 Semester"}}
                        @elseif($fees->sem == 3)
                        {{"3 Semester"}}
                      @elseif($fees->sem == 4)
                        {{"4 Semester"}}
                        @elseif($fees->sem == 5)
                        {{"5 Semester"}}
                      @elseif($fees->sem == 6)
                        {{"6 Semester"}}
                        @elseif($fees->sem == 7)
                        {{"7 Semester"}}
                        @elseif($fees->sem == 8)
                        {{"8 Semester"}}
                        @elseif($fees->sem == "s")
                        {{"Scholarship Fees"}}
          
                        @else
                        {{"Unknown"}}
          
          
                      @endif



                      </td>
                      <td>{{$fees->payment_method}}</td>
                      <td> {{$fees->cource." ". $fees->branch." "}}.
                        @if($fees->sem == 1)
                        {{"1 Semester"}}
                      @elseif($fees->sem == 2)
                        {{"2 Semester"}}
                        @elseif($fees->sem == 3)
                        {{"3 Semester"}}
                      @elseif($fees->sem == 4)
                        {{"4 Semester"}}
                        @elseif($fees->sem == 5)
                        {{"5 Semester"}}
                      @elseif($fees->sem == 6)
                        {{"6 Semester"}}
                        @elseif($fees->sem == 7)
                        {{"7 Semester"}}
                        @elseif($fees->sem == 8)
                        {{"8 Semester"}}
                        @elseif($fees->sem == "s")
                        {{"Scholarship Fees"}}
          
                        @else
                        {{"Unknown"}}
          
          
                      @endif</td>
                      <td>₹{{$fees->total}}</td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
            <br><br>

            <div class="col-md-8">
                <p>It is declare that fees for B.Tech 
                     @if($fees->title == 1)
                    {{"1 Semester"}}
                  @elseif($fees->title == 2)
                    {{"2 Semester"}}
                    @elseif($fees->title == 3)
                    {{"3 Semester"}}
                  @elseif($fees->title == 4)
                    {{"4 Semester"}}
                    @elseif($fees->title == 5)
                    {{"5 Semester"}}
                  @elseif($fees->title == 6)
                    {{"6 Semester"}}
                    @elseif($fees->title == 7)
                    {{"7 Semester"}}
                    @elseif($fees->title == 8)
                    {{"8 Semester"}}
                    @elseif($fees->title == "s")
                    {{"Scholarship Fees"}}
      
                    @else
                    {{"Unknown"}}
      
      
                  @endif
Recieved By RITEE , Raipur</p>
               
            </div>
            <div class="col-md-8">
                <h6>Signature Of HOD</h6>
                <h6>_______________________</h6>
            </div>
            <div class="row d-print-none mt-2">
              <div class="col-12 text-right"><a class="btn btn-primary" onclick="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </main>
  @include('studentdash.foot')