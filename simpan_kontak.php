<?php
include"admin/koneksi.inc.php";

mysqli_connect($servername,$username,$password) or die(mysqli_error());
	mysqli_select_db ($koneksi,$dbname) or die(mysqli_error());

$nama 			= $_POST['nama'];
$jenis_kelamin 	= $_POST['jenis_kelamin'];
$email 			= $_POST['email'];
$alamat 		= $_POST['alamat'];
$kota 			= $_POST['kota'];
$pesan 			= $_POST['pesan'];

$sql = "insert kontak set nama='$nama', jenis_kelamin='$jenis_kelamin', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";

$query = mysqli_query($conn,$sql);

mysqli_query($koneksi, $sql) or die (mysqli_error());

header("location:kontak.html");
?>