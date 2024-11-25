<?php 
$koneksi = mysqli_connect("localhost","root","","05tple002");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>