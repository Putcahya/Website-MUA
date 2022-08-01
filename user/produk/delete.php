<?php 
require '../../function.php';

$id_paket=$_GET['id_paket'];

mysqli_query($koneksi, "DELETE FROM tb_paket WHERE id_paket=$id_paket");

header('location:produk.php');

 ?>