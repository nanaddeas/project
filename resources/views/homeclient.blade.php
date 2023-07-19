@extends('layouts.mainclient')

@section('containerclient')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Nutrisheesh | Home USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/csshomeblade">
  </head>
<body>
<header> 
 
    </header>
  <!-- ikon search -->
  <nav class="body bg-body-tertiary">
  <section class="search_section">
    <h2>Cari makananmu</h2>
    <form id="searchFood">
      <input id="searchFoodTitle" type="text">
      <button id="searchSubmit" type="submit"><i class="bi bi-search"></i>Cari</button>
    </form>
  </section>
  <!-- buat kolom berita -->
  <div class="d-flex flex-row mt-4"> 
  <div class="column">
    <div class="card">
      <img src="img/th (2).jpeg" width="250px" height="125px"/>
      <div class="container">
       <p>Bagaimana melakukan diet yang sehat?</p>  
        <p><a href="https://www.detik.com/tag/diet"><button class="button">Click Here</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="img/th.jpeg" width="250px" height="125px"/>
      <div class="container">
        <p> Kenapa kita perlu makanan yang sehat <p>
        <p><a href="https://www.halodoc.com/kesehatan/makanan-sehat"><button class="button">Click Here</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="img/th (3).jpeg" width="250px" height="125px"/>
      <div class="container">
        <p>Menu makanan sehat yang bisa kalian coba</p>
       <p><a href="https://www.halodoc.com/kesehatan/menu-sehat"><button class="button">Click Here</a></button></p>     
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="img/th (4).jpeg" width="250px" height="125px" />
      <div class="container">
        <p> Bagimana cara memilih makanan yang sehat? </p>
       <p><a href="https://www.fimela.com/food/read/5109991/8-tips-dan-manfaat-memilih-makanan-sehat-dan-bergizi"><button class="button">Click Here</a></button></p>
      </div>
    </div>
  </div>
</div>
</nav>
</body>
@endsection
