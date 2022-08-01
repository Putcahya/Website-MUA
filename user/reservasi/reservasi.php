<?php  
require "../../function.php";
$id_paket=$_GET['id_paket'];
$nama_paket=$_GET['nama_paket'];
$deskripsi=$_GET['deskripsi'];
$harga=$_GET['harga'];
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Pemesan</title>
  <link rel="stylesheet" type="text/css" href="../../bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<header>
   <nav class="navbar navbar-expand-lg navbar-light bg-danger p-2 text-dark bg-opacity-25">
  <div class="container-fluid">
    <a class="navbar-brand " href="index.php"><img src="../../img/logo.png" style="width: 70px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../produk/produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../about.php">About</a>
        </li>
        
      </ul>
    </div>
  </div>
  <div>
  
  </div>
</svg>
</nav>
 </header>
<body>
  <?php 
  if (isset($_POST['pesan'])) {
    $id_paket=$_POST['id_paket'];
    $nama=$_POST['nama'];
    $telepon=$_POST['telepon'];
    $alamat=$_POST['alamat'];
    $tanggal=$_POST['tanggal'];

    $query=mysqli_query($koneksi, "INSERT INTO tb_booking VALUES ('NULL', '$id_paket', '$nama', '$telepon', '$alamat', '$tanggal')");
    echo "
    <script>
    alert('Anda Telah Terdaftar , Tunggu Tim Kami Datang Untuk Merias Terima Kasih');
    document.location.href='../index.php';
    </script>";
  }
   ?>
  <form class="container col-6 justify-content-centerp-3 border shadow mt-2" method="post" action="">
    <h3 class="text-center mt-3 mb-3">Form Reservasi</h3>
    <div class="mb-3">
      <input type="text" class="form-control" name="id_paket" required="" value="<?=$id_paket ?>" hidden >
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" name="nama" required="" placeholder="Nama Pemesan" >
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" name="telepon" required="" placeholder="Telepon" >
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" name="alamat" required="" placeholder="Alamat" >
    </div>
    <div class="mb-3">
      <input type="date" class="form-control" name="tanggal" required="" placeholder="Tanggal" >
    </div>
      <button type="submit" name="pesan" class="btn btn-primary mb-3">Submit</button>
  </form>
</body>
</html>