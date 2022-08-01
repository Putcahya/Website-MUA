<?php  
require '../function.php';
$data=mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE level='admin'");
$row=mysqli_fetch_assoc($data);
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

	<?php 
	if (isset($_POST['ubah'])) {
		$nama_pengguna=$_POST['nama'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query=mysqli_query($koneksi, "UPDATE tb_pengguna SET nama_pengguna='$nama_pengguna',username='$username', password='$password' WHERE level='admin'");
		header('location:../index.php');
	}
	 ?>
	<form class="container col-6 justify-content-centerp-3 border shadow mt-2" method="post" action="">
		<h3 class="text-center mt-3 mb-3">Form Ubah Profil Admin</h3>
	  <div class="mb-3">
	    <input type="text" class="form-control" name="id_paket" required="" value="<?=$id_paket ?>" hidden >
	  </div>
	  <div class="mb-3">
	    <label class="form-label">Nama </label>
	    <input type="text" class="form-control" name="nama" required value="<?=$row['nama_pengguna']?>">
	  </div>
	  <div class="mb-3">
	    <label class="form-label">Username </label>
	    <input type="text" class="form-control" name="username" required value="<?=$row['username']?>" >
	  </div>
	  <div class="mb-3">
	    <label class="form-label">Password </label>
	    <input type="text" class="form-control" name="password" required value="<?=$row['password']?>" >
	  </div>
  		<button type="submit" name="ubah" class="btn btn-primary mb-3">Submit</button>
	</form>
 </body>
 </html>