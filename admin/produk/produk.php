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
</svg>
</nav>
 </header>
<body>
<?php 
$data=mysqli_query($koneksi, "SELECT * FROM tb_paket");
$row= mysqli_fetch_assoc($data);
 ?>

 <div class="container">
	<div class="col-12 p-5 " >
    <center><a href="tambah.php" class="col-12 btn btn-primary mt- mb-1">Tambah Paket</a></center>
          <div class="row justify-content-center">
          	<?php foreach ($data as $row ) : ?>
              <div class="col-4 d-flex align-items-stretch my-2">
                <div class="card p-3">
                  <img src="../../img/<?=$row['gambar']?>" class="card-img-top" alt="" style="height: 200px">        
                    <div class="card-body d-flex flex-column mt-auto">
                    <h3 class="card-title"><?=$row['nama_paket'] ?></h3>
                    <p class="card-text"><?=$row['deskripsi'] ?></p>
                    <a class="btn btn-primary  mt-3 d-block mt-auto">Rp. <?=$row['harga']; ?></a>
                    <a href="ubah.php?id_paket=<?=$row['id_paket']?> & nama_paket=<?=$row['nama_paket']?> & gambar=<?=$row['gambar']?> & deskripsi=<?=$row['deskripsi']?> & harga=<?=$row['harga']?>" class="btn btn-warning mt-1">EDIT</a>
                    <a href="confirm.php?id_paket=<?=$row['id_paket'] ?>" class="btn btn-danger mt-1">HAPUS</a>
                    </div>
                </div>
              </div>
              
          <?php endforeach; ?>
          </div> 
    </div>
 </div>
</body>
</html>

