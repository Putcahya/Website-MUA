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
          <a class="nav-link" href="produk.php">Produk</a>
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
	if (isset($_POST['ubah'])) {
		$nama_paket=$_POST['nama_paket'];
		$deskripsi=$_POST['deskripsi'];
		$harga=$_POST['harga'];
		$query=mysqli_query($koneksi, "UPDATE tb_paket SET nama_paket='$nama_paket',deskripsi='$deskripsi', harga='$harga' WHERE id_paket='$id_paket'");
		header('location:produk.php');
	}
	 ?>
	<form class="container col-6 justify-content-centerp-3 border shadow mt-2" method="post" action="">
		<h3 class="text-center mt-3 mb-3">Form Ubah Paket</h3>
	  <div class="mb-3">
	    <input type="text" class="form-control" name="id_paket" required="" value="<?=$id_paket ?>" hidden >
	  </div>
	  <div class="mb-3">
	    <label class="form-label">Nama Paket</label>
	    <input type="text" class="form-control" name="nama_paket" required="" value="<?=$nama_paket ?>">
	  </div>
	  <div class="mb-3">
	    <label class="form-label">Deskripsi</label>
	    <textarea name="deskripsi" rows="3" class="form-control"><?=$deskripsi ?></textarea>
	  </div>
	  <div class="mb-3">
	    <label class="form-label">Harga</label>
	    <input type="text" class="form-control" name="harga" required="" value="<?=$harga ?>">
	  </div>
  		<button type="submit" name="ubah" class="btn btn-primary mb-3">Submit</button>
	</form>
</body>
</html>