<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
// var_dump($_POST['nama']);die;
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$link = $_POST['link'];
$link_2 = $_POST['link2'];
$link_3 = $_POST['link3'];
$link_4 = $_POST['link4'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO mahasiswa (NIM, NAMA, LINK, LINK2, LINK3, LINK4) VALUES ('$nim','$nama','$link','$link_2','$link_3','$link_4')");
 
// mengalihkan halaman kembali ke index.php
header("location:mahasiswa.php");
 
?>