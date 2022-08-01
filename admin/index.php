<?php 
session_start()

 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title>Halaman Admin</title>
   <link rel="stylesheet" type="text/css" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
 </head>
 <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-danger p-2 text-dark bg-opacity-25">
  <div class="container-fluid">
    <a class="navbar-brand " href="index.php"><img src="../img/logo.png" style="width: 70px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk/produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reservasi/reservasi.php">Reservasi</a>
        </li>
      </ul>
    </div>
  </div>
  <div>
  </div>
</nav>
 </header>
 <body>


  <h3 class="fw-bold bg-danger text-dark bg-opacity-50 text-center p-2">Halaman Admin Mua</h3>
<div class="container">
  <center><img src="../img/logo.png" style="width: 300px;">
  <div class="dropdown">
  <button class="btn btn-outline-secondary btn-lg rounded-pill mt-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><?=$_SESSION['nama_pengguna']; ?>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear-fill ms-2" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="ubah.php">Ubah Sandi</a></li>
    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
  </ul>
  </div>
  </center>
</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 </body>
 </html>

