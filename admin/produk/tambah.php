<?php 
require "../../function.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
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
          <a class="nav-link" href="produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../reservasi/reservasi.php">Reservasi</a>
        </li>
      </ul>
    </div>
  </div>
  <div>
  
  </div>
</nav>
 </header>
<body>
	<?php
	if (isset($_POST['tambah'])) {
		$nama_paket = htmlspecialchars($_POST['nama_paket']);
		$deskripsi = htmlspecialchars($_POST['deskripsi']);
		$harga = htmlspecialchars($_POST['harga']);
		$path = "../../img/";
		$gambar = $_FILES['gambar']['name'];
		$file = $_FILES['gambar']['tmp_name'];


		if (move_uploaded_file($file, $path.$gambar)) {
			$query = mysqli_query($koneksi, "INSERT INTO tb_paket VALUES ('NULL', '$nama_paket', '$gambar', '$deskripsi', '$harga')");
        if ($query) {
            header('location:produk.php');
    }
    }
	 } 
	 ?>
	<form class="container col-6 justify-content-centerp-3 border mt-2 shadow" method="post" action="" enctype="multipart/form-data">
		<h3 class="text-center mt-3 mb-3">Form Tambah Paket</h3>
	  <div class="mb-3">
	    <label class="form-label">Id Paket</label>
	    <input type="text" class="form-control" name="id_paket" >
	  </div>
	  <div class="mb-3">
	    <label class="form-label">Nama Paket</label>
	    <input type="text" class="form-control" name="nama_paket" required >
	  </div>
	  <div class="mb-3">
	    <label class="form-label">Gambar</label><br>
        <input type="file" name="gambar" id="foto" required class="form-control">
	  </div>
	  <div class="mb-3">
	    <label class="form-label">Deskripsi</label>
	    <textarea name="deskripsi" rows="3" class="form-control"></textarea>
	  </div>
	  <div class="mb-3">
	    <label class="form-label">Harga</label><br>
	    <input type="text" class="form-control" name="harga" placeholder="Harga" required="" >
	  </div>
  		<button type="submit" name="tambah" class="btn btn-primary mb-3">Submit</button>
	</form>
</body>
</html>