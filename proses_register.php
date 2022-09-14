<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


// menginput data ke database
mysqli_query($koneksi,"insert into admin values('','$nama','$email','$username','$password')");

// mengalihkan halaman kembali ke index.php
header("location:register.php");

?>