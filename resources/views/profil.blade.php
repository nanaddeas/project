@extends('layouts.mainclient')

@section('containerclient')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Nutrisheesh | Profil Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/cssprofil">
  </head>
  <body>
    <div class="container">
      <h2>Profil</h2>
      <div class="profile-info">
        <div class="profile-image">
          <img src="img/drink.png" alt="Profile Picture">
        </div>
        <div class="profile-details">
          <h3>Nama: </h3>
          <p>Jane Doe</p>
          <h3>Email: </h3>
          <p>janedoe@example.com</p>
          <h3>Alamat: </h3>
          <p>Jl. Karang Menjangan IA</p>
        </div>
      </div>
  </body>
</html>
@endsection
