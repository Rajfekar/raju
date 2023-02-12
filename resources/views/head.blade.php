<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Created By Khemraj Fekar RITEE COLLEGE OF Engneering -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "images/A1.jpg" type = "image/x-icon">
   <!-- CSS only -->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="/css/login.css">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/app.css">
   <link rel="stylesheet" href="/css/list.css">
   <link rel="stylesheet" href="/css/bootstrap.min.css">
   <link rel="stylesheet" href="/css/dataTables.bootstrap5.min.css">
   <link rel="stylesheet" href="/css/buttons.bootstrap5.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

   <title>RITEE CENTRAL LIBRARY </title>


</head>

<body style="background:rgb(261, 248, 204);">

   <nav>
      <div class="logo">
         RITEE RAIPUR
      </div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
      </label>
      <ul>
         <li><a id="home" class="active" href="/">Home</a></li>
         <li><a id="login" href="{{url('/rit/login')}}">Login</a></li>
         <li><a id="about" href="{{'/ritlogin'}}">About</a></li>
         <li><a id="gallery" href="#">Gallery</a></li>
         <li><a id="feedback" href="#">Feedback</a></li>
      </ul>
   </nav>

  