<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Nutrisheesh | Home user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/cssmainadmin">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-gradient">
      <div class="container mt-3">
        <img src="img/logo.png" alt="logo broo" width="400">
      </div>
        <div class="container">
          <a class="navbar-brand" href="#">Nutrisheesh</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="/bandingkan">Upload Resep</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/resep">Verifikasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/keluhan">Keluhan&Laporan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/profil"><i class="bi bi-person-circle"></i>Profil</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        @yield('containeradmin')
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
