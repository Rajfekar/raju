@include('libdash.head')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user-plus"></i> Attendance Datewise</h1>
            <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Attendance</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                @if(Session::has('success'))
                <div
                    class="alert alert-success alert-dismissible fade show"
                    role="alert"
                >
                    <strong>Wohoo!!😍</strong> {{Session::get('success')}}
                    <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif @if(Session::has('fail'))

                <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert"
                >
                    <strong>Opps!😢</strong> {{Session::get('fail')}}
                    <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="tile">
                    <h3 class="tile-title">Enter Member Details</h3>
                    <div class="tile-body">
                        <form method="post" action="{{url('/rit/libdashboard/attendance/datewise')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <div class="row">
                                      <div class="mb-3">
                                      <label for="" class="form-label">Date</label>
                                      <input type="text" name="date" id="date" class="form-control" placeholder="dd/mm/yyyy" aria-describedby="helpId">
                                     
                                    </div>
                                    
                                    
                                </div>
                                <div class="d-grid gap-2">
                                  <button type="submit" name="" id="" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('libdash.foot')

