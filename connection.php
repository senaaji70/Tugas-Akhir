<?php

$server = "localhost";
$database = "praktikum";
$username = "root";
$dbpassword = "";

$connect = mysqli_connect($server,$username,$password,$database);
mysqli_select_db($database);
if($connect){
	echo "Koneksi ke database sukses";
}else{
	echo "Koneksi ke database gagal";
}
?>