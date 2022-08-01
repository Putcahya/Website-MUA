<?php 
$koneksi = mysqli_connect("localhost", "root", "", "db_mua");
session_start(); 


function tampil ($query){
	global $koneksi;
	$result=mysqli_query($koneksi, $query);
	$rows=[];
	while ($row=mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}
	return $rows;
}
