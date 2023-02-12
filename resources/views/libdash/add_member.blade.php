@include('libdash.head')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user-plus"></i> Add Member</h1>
            <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Add Member</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Wohoo!!😍</strong> {{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif @if(Session::has('fail'))

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Opps!😢</strong> {{Session::get('fail')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="tile">
                    <h3 class="tile-title">Enter Member Details</h3>
                    <div class="tile-body">
                        <form method="post" action="{{url('/rit/libdashboard/add_member2')}}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input name="name" class="form-control" type="text"
                                            placeholder="Enter full name" />
                                        @error('name')
                                        <div style="color:red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Type</label>
                                        <select name="type" class="form-control">
                                            <option value="0">Student</option>
                                            <option value="1">Faculty</option>
                                            <option value="7">Employee</option>
                                        </select>
                                        @error('type')
                                        <div style="color:red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Branch</label>
                                        <select name="branch" class="form-control">
                                            <option value="">Select Branch</option>
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
                                            <option value="11">LIBRARY</option>
                                            <option value="12">OTHER</option>
                                            <option value="13">MBA</option>
                                            <option value="14">MCA</option>
                                        </select>
                                        @error('branch')
                                        <div style="color:red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Library ID</label>
                                        <input name="libid" class="form-control" type="text"
                                            placeholder="Enter Library ID" />
                                        @error('libid')
                                        <div style="color:red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input name="password" class="form-control" type="password"
                                            placeholder="Enter Your Password" />
                                        @error('password')
                                        <div style="color:red;">{{ $message }}
                                        </div>
                                        @enderror
                                    </div> --}}

                                    <div class="form-group">
                                        <label class="control-label">Gender</label>

                                        <!--Radio Button Markup-->
                                        <div class="animated-radio-button">

                                            <label>
                                                <input value="0" type="radio" name="gender" /><span
                                                    class="label-text">Male</span>
                                            </label>
                                        </div>

                                        <!--Radio Button Markup-->
                                        <div class="animated-radio-button">
                                            <label>
                                                <input value="1" type="radio" name="gender" /><span
                                                    class="label-text">Female</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="animated-checkbox">
                                            <label>
                                                <input type="checkbox" /><span class="label-text">I accept the term &
                                                    conditions.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i>Add Member</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('libdash.foot')