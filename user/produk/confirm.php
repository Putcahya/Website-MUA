<?php 
$id_paket= $_GET['id_paket'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pemesan</title>
</head>
<body>
<script>
        var ya = confirm("Apakah kamu yakin akan menghapus data?");

        if (ya) {
            window.location = "delete.php?id_paket=<?=$id_paket ?>";
        } else {
            window.location = "produk.php";
        }
    </script>
</body>
</html>


