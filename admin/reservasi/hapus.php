<?php 
require '../../function.php';
$id_booking=$_GET['id_booking'];

$query= mysqli_query($koneksi, "DELETE FROM tb_booking WHERE id_booking=$id_booking");\
header('location:reservasi.php');
 ?>





 