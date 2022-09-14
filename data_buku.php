<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">


	<title>Aplikasi pendataan DATA BUKU</title>
</head>
<body>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:data_buku.php?pesan=belum_login");
	}
	?>

    <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aplikasi Perpustakaan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Hi, <?php echo $_SESSION['username']; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Edit Profil</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
 
    </div>
  </div>
</nav>

 
	<br/>
 
	

	<div class="container">
	<a href="tambah_buku.php" class="btn btn-warning" >Tambah Buku</a>
    <br/>
	<br/>
	<table class="table table-striped">
		<tr>
			<th>NO</th>
			<th>Nama BUKU</th>
			<th>Kategori</th>
			<th>Pengarang</th>
            <th>ISBN</th>
			<th>Tahun Terbit</th>
			<th>Penerbit</th>
            <th>Foto</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$id = 1;
		$data = mysqli_query($koneksi,"select * from buku");
		while($buku = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $id++; ?></td>
				<td><?php echo $buku ['nama_buku']; ?></td>
				<td><?php echo $buku ['kategori']; ?></td>
				<td><?php echo $buku ['pengarang']; ?></td>
                <td><?php echo $buku ['isbn']; ?></td>
				<td><?php echo $buku ['tahun_terbit']; ?></td>
				<td><?php echo $buku ['penerbit']; ?></td>
                <td><img src="img/<?php echo $buku ['foto']; ?>" height="150" width="150" alt=""></td>
				<td>
					<a href="update_buku.php?id=<?php echo $buku['id']; ?>" class="btn btn-primary">EDIT</a>
					
                    <a href="hapus_buku.php?id=<?php echo $buku['id']; ?>" class="btn btn-danger alert_notif">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <br/>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <?php if(@$_SESSION['sukses']){ ?>
            <script>
                Swal.fire({            
                    icon: 'success',                   
                    title: 'Sukses',    
                    text: 'Data Berhasil Dihapus',                        
                    timer: 3000,                                
                    showConfirmButton: false
                })
            </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
        <?php unset($_SESSION['sukses']); } ?>
    
    
        <!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert -->

        <script>
            $('.alert_notif').on('click',function(){
                var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Yakin Hapus Data?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                
                }).then(result => {
                    //jika klik ya maka arahkan ke proses.php
                    if(result.isConfirmed){
                        window.location.href = getLink
                    }
                })
                return false;
            });
        </script>
    </body>
</html>