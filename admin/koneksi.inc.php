<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiara";
$koneksi = mysqli_connect($servername,$username,$password) or die(mysqli_error());
	mysqli_select_db ($koneksi,$dbname) or die(mysqli_error());
?>