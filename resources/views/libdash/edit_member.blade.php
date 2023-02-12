@include('libdash.head')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-book"></i> Edit Member</h1>
            <p>Edit member details now</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-book"></i></li>
            <li class="breadcrumb-item"><a href="#">Edit Member</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile">
                    <h3 class="tile-title">Correct Member Details</h3>
                    <div class="tile-body">

                        <!-- ========== Start formnewbook ========== -->
                        <form action="{{route('updatemember')}}" method="post" enctype="multipart/form-data">
                            <!-- ========== Start session notification raj ========== -->
                            @csrf
                            @if(Session::has('success'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Wohoo!!😍</strong> {{Session::get('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            @if(Session::has('fail'))

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Opps!😢</strong> {{Session::get('fail')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <!-- ========== End session notification raj ========== -->

                            <label>Member CollegeId:</label><input class="form-control" type="text" name="collegeid" value="{{$member->collegeid}}" disabled />
                            @error('collegeid')
                            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
                            @enderror
                            </br>
                            <label>Library Id:</label><input class="form-control" type="text" name="libid" value="{{$member->libid}}" />
                            @error('libid')
                            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
                            @enderror
                            </br>
                            <label>Member Name:</label><input class="form-control" type="text" name="name" value="{{$member->name}}" />
                            @error('name')
                            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
                            @enderror
                            </br>
                            
                            <div class="mb-3">
                                <label for="" class="form-label">Branch:</label>
                                <select name="branch" class="form-control">
                                    <option value="0">CSE</option>
                                    <option value="1">CIVIL</option>
                                    <option value="2">EEE</option>
                                    <option value="3">MECHANICAL</option>
                                    <option value="4">ELECTRONICS</option>
                                    <option value="5">BIOTECH</option>
                                    <option value="6">THERMAL</option>
                                    <option value="7">CHEMICAL</option>
                                    <option value="8">IT</option>
                                    <option value="9">ENVIRONMENTAL</option>
                                    <option value="10">ENERGY MANAGMENT</option>
                                </select>
                                @error('branch')
                                <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
                                @enderror</br>
                            </div>




                            </br>
                            <label>Semester:</label>
                            <select name="sem" class="form-control">
                                <option value="1" selected>1st Semester</option>
                                <option value="2">2st Semester</option>
                                <option value="3">3st Semester</option>
                                <option value="4">4st Semester</option>
                                <option value="5">5st Semester</option>
                                <option value="6">6st Semester</option>
                                <option value="7">7st Semester</option>
                                <option value="8">8st Semester</option>
                            </select>

                            @error('sem')
                            <span style="color:red;" class="alert-danger mt-1 mb-1">{{ $message }}</span>
                            @enderror</br>

                            <input class="btn btn-primary" type="submit" value="SUBMIT" />


                        </form>
                        <!-- ========== End formnewbook ========== -->

                    </div>
                </div>





















            </div>
        </div>
    </div>
</main>
@include('libdash.foot')