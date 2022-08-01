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
          <a class="nav-link" href="../produk/produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reservasi.php">Reservasi</a>
        </li>
      </ul>
    </div>
  </div>
  <div>
  </div>
</nav>
 </header>
<body>
	<div class="container">
		<center><h3>Daftar Reservasi Rias</h3></center>
	<table class="table table-striped table-warning mt-2">
		<tr>
			<th>No</th>
			<th>Layanan</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Harga</th>
			<th>Tanggal</th>
      <th>Aksi</th>
		</tr>
		<?php 
		$data=tampil("SELECT * FROM tb_booking LEFT JOIN tb_paket USING(id_paket)");
		 ?>
		<?php $no=1; ?>
            <?php foreach ($data as $row ) : ?>
             <tr>
              <td align="center"><?=$no; ?></td>
              <td><?=$row['nama_paket']?></td>
              <td><?=$row['nama']?></td>
              <td><?=$row['alamat']?></td>
              <td><?=$row['telepon']?></td>
              <td><?=$row['harga']?></td>
              <td><?=$row['tanggal']?></td>
              <td><a href="konfirmasi.php?id_booking=<?=$row['id_booking'] ?>" class="btn btn-danger" >Hapus</a></td>
             </tr>
            <?php $no++; ?>
            <?php endforeach; ?>



	</table>
	</div>
</body>
</html>