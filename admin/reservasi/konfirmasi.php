<?php 
$id_booking=$_GET['id_booking'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
<script>
        var ya = confirm("Apakah kamu yakin akan menghapus data?");

        if (ya) {
            window.location = "hapus.php?id_booking=<?=$id_booking ?>";
        } else {
            window.location = "reservasi.php";
        }
    </script>
</body>
</html>


