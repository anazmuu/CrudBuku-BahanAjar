<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

	<title>Aplikasi pendataan DATA BUKU</title>
</head>
<body class="bg-gradient-primary">

	<h2></h2>
	<br/>
	<br/>
	<h3 align="center">REGISTER AKUN</h3>
	<br/>
	
	<div class="card mx-auto" style="width: 60rem; height: 28rem;">
	<div class="row">
	<div class="col-md-5">
	</div>
	<div class="col-md-7">
	<div class="card-body mt-4">
	<form method="post" action="proses_register.php">
		<table>
		<div class="mb-2">
			<label for="nama" class="form-label">Nama Lengkap</label>
			<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
		</div>
		<div class="mb-2">
			<label for="email" class="form-label">Alamat Email</label>
			<input type="email" class="form-control" name="email" placeholder="Masukkan Email">
		</div>
		<div class="mb-2">
			<label for="username" class="form-label">Username</label>
			<input type="text" class="form-control" name="username" placeholder="Masukkan Username">
		</div>
		<div class="mb-2">
			<label for="password" class="form-label">Paswword</label>
			<input type="password" class="form-control" name="password" placeholder="Masukkan Password">
		</div>
		<td>
		<button type="submit" class="btn btn-primary" value="SIMPAN">LOGIN</button>
		<a href="login.php" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Kembali</a>
		</td>
		</table>
	</form>
	</div>
	</div>
	</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>