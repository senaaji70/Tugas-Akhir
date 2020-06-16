<?php

$server = "localhost";
$database = "dblogin";
$username = "root";
$dbpassword = "";

$koneksi = mysql_connect($server,$username,$password) or die("Koneksi ke server error!");
mysql_connect_db($database) or die("Koneksi ke database error!");
