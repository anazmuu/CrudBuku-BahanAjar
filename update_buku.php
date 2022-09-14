<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

	<title>Aplikasi pendataan DATA BUKU</title>
</head>
<body>

	<h2></h2>
	<div class="container">
	
	<h3>EDIT DATA BUKU</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from buku where id='$id'");
	while($buku = mysqli_fetch_array($data)){
		?>
		<form method="post" action="proses_update.php" enctype="multipart/form-data">
			<table>
			
				<div class="mb-2">
					<label for="editnamabuku" class="form-label">Nama Buku</label>
					<input type="hidden" name="id" value="<?php echo $buku['id']; ?>">
					<input type="text" class="form-control" name="nama_buku" value="<?php echo $buku['nama_buku']; ?>">
				</div>
				<div class="mb-2">
					<label for="editkategori" class="form-label">Kategori</label>
					<input type="text" class="form-control" name="kategori" value="<?php echo $buku['kategori']; ?>">
				</div>
                <div class="mb-2">
					<label for="editpengarang" class="form-label">Pengarang</label>
					<input type="text" class="form-control" name="pengarang" value="<?php echo $buku['pengarang']; ?>">
				</div>
				<div class="mb-2">
					<label for="editisbn" class="form-label">Kategori</label>
					<input type="number" class="form-control" name="isbn" value="<?php echo $buku['isbn']; ?>">
				</div>
				<div class="mb-2">
					<label for="edittahunterbit" class="form-label">Tahun Terbit</label>
					<input type="number" class="form-control" name="tahun_terbit" value="<?php echo $buku['tahun_terbit']; ?>">
				</div>
				<div class="mb-3">
					<label for="edittahunterbit" class="form-label">Penerbit</label>
					<input type="text" class="form-control" name="penerbit" value="<?php echo $buku['penerbit']; ?>">
				</div>
				<div class="form-group">
					<label>Silahkan Masukkan Gambar :</label>
					<br>
					<input type="file" name="foto" required="required">
        		</div>
				<br>
				<td>
				<button type="submit" class="btn btn-primary" value="SIMPAN">SIMPAN</button>
				<a href="data_buku.php" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Kembali</a>
				</td>
			</table>
		</form>
		
		<?php 
	}
	?>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>





</body>
</html>