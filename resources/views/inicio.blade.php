@extends("layouts.app")
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
  <title>TutoriasYa</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-sclar=1.0">
<link rel="stylesheet" href ="css/bootstrap.min.css">
<link rel="stylesheet" href ="estilos.css">
</HEAD>
<body style="background-color:rgba(1,60,40,120);">



 
  
  
          
<div class="container-fluid">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: 0%;
  }
  </style>



<div class="container-fluid">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Carrousel1.png" alt="Chania" width="1000" height="500">
      </div>

      <div class="item">
        <img src="Carrousel2.png" alt="Chania" width="460" height="500">
      </div>
    
      <div class="item">
        <img src="Carrousel3.png" alt="Flower" width="460" height="500">
      </div>

      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

@endsection