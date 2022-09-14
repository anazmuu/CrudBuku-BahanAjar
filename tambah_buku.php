<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi pendataan DATA BUKU</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

</head>
<body>
	<div class="container">
	<h3>TAMBAH DATA BUKU</h3>
	<form method="post" action="proses_tambah.php" enctype="multipart/form-data">
		<table>
		<div class="mb-2">
			<label for="namabuku" class="form-label">Nama Buku</label>
			<input type="text" class="form-control" name="nama_buku">
		</div>
		<div class="mb-2">
			<label for="kategori" class="form-label">Kategori</label>
			<input type="text" class="form-control" name="kategori">
		</div>
		<div class="mb-2">
			<label for="pengarang" class="form-label">Pengarang</label>
			<input type="text" class="form-control" name="pengarang">
		</div>
		<div class="mb-2">
			<label for="isbn" class="form-label">No. ISBN</label>
			<input type="number" class="form-control" name="isbn">
		</div>
		<div class="mb-2">
			<label for="tahunterbit" class="form-label">Tahun Terbit</label>
			<input type="text" class="form-control" name="tahun_terbit">
		</div>
		<div class="mb-2">
			<label for="penerbit" class="form-label">Penerbit</label>
			<input type="text" class="form-control" name="penerbit">
		</div>
		<div class="form-group">
                <label>Silahkan Masukkan Gambar :</label>
                <br>
                <input type="file" name="foto" required="required">
        </div>
			<br/>
		<td>
		<button type="submit" class="btn btn-primary" value="SIMPAN">SIMPAN</button>	
		<a href="data_buku.php" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Kembali</a>	
		</td>
		</table>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</div>
</body>
</html>