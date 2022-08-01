<?php 
  include "conn/koneksi.php";
  // die() ;
  session_start();
?>
<!doctype html>
<html lang="en">
<title>Login</title>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body>
<form action="" method="post" style="padding-top: 10%">
<div class="login-page">
    <center><h1>Log-in</h1></center>
    <form >
      <input type="text" name="username" placeholder="Username" autocomplete="off" />
      <input type="password" name="password" placeholder="Password" autocomplete="off"/>
      <center><input type="submit" name="masuk" value="Login"></center>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


<?php  
if (isset($_POST ['masuk'])) {
    $username =$_POST ['username'];
    $password = $_POST ['password'];
    $data = mysqli_query($koneksi,"SELECT * FROM tb_pengguna WHERE username = '$username' AND password = '$password' ");
    $cek = mysqli_num_rows($data);
    $row= mysqli_fetch_assoc($data);
     if ($cek == 1 ){
        $_SESSION['username'] = $username;
        $_SESSION['nama_pengguna']= $row['nama_pengguna'];
        $_SESSION['level']=$row['level'];
        $_SESSION['id_pengguna']=$row['id_pengguna'];
        $_SESSION['login'] = true;

          if ($row['level']=="admin") {
            $_SESSION['username'] = $username;
            $_SESSION['level']=$row['level'];
            
            header('location:admin');
          }
          else if ($row['level']=="pegawai") {
            $_SESSION['username'] = $username;
            $_SESSION['level']=$row['level'];
            header('location:pegawai/home/home.php');
          }
          else{
            echo"<script> alert('Password Atau Username Salah'); document.location.href='index.php';</script>";
          }
     }
     else{
      echo"<script> alert('Password Atau Username Salah'); document.location.href='index.php';</script>";  
    }
}


?>
