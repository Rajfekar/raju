@include('libdash.head')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Issued Books</h1>
        <p>check your all time issued books report</p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Library</li>
        <li class="breadcrumb-item active"><a href="#"></a>Ibooks</li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bodered table-stiped" id="example4">
                    <thead class="table-primary">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Book Author</th>
                        <th scope="col">Book ID</th>
                        <th scope="col">IDate</th>
                        <th scope="col">RDate</th>
                        <th scope="col">Fine</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($issueb as $issue)
                      <tr>
                        <th scope='row'>{{$issue->userid}}</th>
        
                        <td>{{$issue->mname}}</td>
                        <td>{{$issue->mtype}}</td>
                        <td>{{$issue->ibook}}</td>
                        <td>{{$issue->ibook}}</td>
                        <td>{{$issue->ibookid}}</td>
                        <td>{{$issue->idate}}</td>
                        <td>{{$issue->rdate}}</td>
                        <td>{{$issue->fine}}</td>
        
                      </tr>
                      @endforeach
        
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@include('libdash.foot')