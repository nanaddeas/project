@extends('layouts.mainclient')

@section('containerclient')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Nutrisheesh | Nutritionists </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/csshomeblade">
  </head>
<body>
  <div class="container">
    <h1> OUR NUTRITIONIST </h1> 
  </div>
  <div class="d-flex flex-row mt-4"> 
  <div class="column">
    <div class="card">
      <img src="img/dokter1.png" width="250px" height="300px"/>
      <div class="container">
       <h2>Dr. </h2>  
        <p><a href="https://www.detik.com/tag/diet"><button class="button">Click Here</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="img/dokter2.png" width="250px" height="300px"/>
      <div class="container">
        <h2> Clarin, S.Gz </h2>
        <p><a href="https://www.halodoc.com/kesehatan/makanan-sehat"><button class="button">Click Here</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="img/dokter3.png" width="250px" height="300px"/>
      <div class="container">
        <h2>Dr. Yiyian</h2>
       <p><a href="https://www.halodoc.com/kesehatan/menu-sehat"><button class="button">Click Here</a></button></p>     
      </div>
    </div>
  </div>
</div>
</nav>
</body>
@endsection
