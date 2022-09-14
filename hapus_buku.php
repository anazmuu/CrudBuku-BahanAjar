<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

session_start();    

// menghapus data dari database
mysqli_query($koneksi,"delete from buku where id='$id'");


$_SESSION["sukses"] = 'Data Berhasil Dihapus';

// mengalihkan halaman kembali ke index.php
header("location:data_buku.php");

?>