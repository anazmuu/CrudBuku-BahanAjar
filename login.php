<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
	<link rel="stylesheet" style="text/css" href="css/style_login.css">

	<title>FITUR LOGIN</title>

</head>
<body>
	<br/>
	<br/>
	<br/>
	<h2 align="center">Form Login</h2>
	<br/>
	
	<div class="card mx-auto">
	<div class="row ">
		<div class="col-md-5">
		<img src="img/login.png" class="card-img-top" alt="...">
		</div>
		<div class="col-md-7">
		<div class="card-body mt-4">
		<form method="post" action="proses_login.php">
		<table>
		<div class="mb-2">
			<label for="username" class="form-label">Username</label>
			<input type="text" class="form-control" name="username" placeholder="Masukkan username">
		</div>
		<div class="mb-4">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Masukkan Password">
		</div>
		<button type="submit" class="btn btn-primary" value="LOGIN">LOGIN</button>
			
		</table>
		<br/>	
		<p> Belum punya account? <a href="register.php">Register</a></p>		
		</form>
	<!-- cek pesan notifikasi -->

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

		</div>
		</div>
		
	</div>
		
	</div>

	

    

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>