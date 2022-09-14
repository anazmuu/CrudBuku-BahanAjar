<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama_buku = $_POST['nama_buku'];
$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$isbn = $_POST['isbn'];
$tahun_terbit = $_POST['tahun_terbit'];
$penerbit = $_POST['penerbit'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($filename == ""){
    mysqli_query($koneksi,"INSERT INTO buku VALUES('','$nama_buku','$kategori','$pengarang','$isbn','$tahun_terbit','$penerbit','') ");
}else{
    if(!in_array($ext,$ekstensi) ) {
        header("location:data_buku.php?pesan=gagal_ekstensi");
    }else{
        if($ukuran < 91044070){    
            $img = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$rand.'_'.$filename);
            $foto = mysqli_query($koneksi,"INSERT INTO buku VALUES('','$nama_buku','$kategori','$pengarang','$isbn','$tahun_terbit','$penerbit','$img') ");
        }else{
            header("location:data_buku.php?pesan=gagal_ukuran");
        }
    }
    header("location:data_buku.php");
}


?>