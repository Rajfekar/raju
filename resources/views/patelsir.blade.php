<!doctype html>
<html lang="en">

<head>
  <title>Qr codes</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <h1>QR code List </h1>
  </header>
  <main>

    <div class="table-responsive">
        <!-- ========== Start table raj example ========== -->

        <table id="example" class="table table-hover table-bodered table-striped">

          <thead class="table-primary table-bodered table-striped table-hovered">
            <tr>
              <th scope="col">N</th>
              <th scope="col"> Name</th>
              <th scope="col">LibraryID</th>
              <th scope="col">CollegeID</th>
              <th scope="col">QR Image</th>
              
            </tr>
          </thead>
          <tbody>
            @php
            $j=1;

            @endphp
            <!-- ========== Start start for loop for books ========== -->

            @foreach($u as $raj)
            <tr>
              <th scope='row'>{{$j++}}</th>
              <td> {{$raj->name}}</td>
              <td> {{$raj->libid}}</td>
              <td> {{$raj->collegeid}}</td>
              <td>

                <img src='https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl={{$raj->collegeid}}'/>
               
                 </td>
            </tr>
            @endforeach
            <!-- ========== End start for loop for books ========== -->

          </tbody>
        </table>
        <!-- ========== End table raj example ========== -->
      </div>

  </main>
  @include('libdash.foot')