<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$link = $_POST['link'];
$link2 = $_POST['link2'];
$link3 = $_POST['link3'];
$link4 = $_POST['link4'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE mahasiswa SET NAMA='$nama', NIM='$nim', LINK='$link', LINK2='$link2', LINK3='$link3', LINK4='$link4' where ID='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:mahasiswa.php");
 
?>