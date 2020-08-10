<?php 

require 'functions.php';
$conn= mysqli_connect("localhost", "root" , "" , "phpdasar");

	if(isset($_POST["submit"])){
		if(tambah($_POST)>0){
			echo " <script>
				alert('data berhasil ditambahkan');
				document.location.href= 'index.php';
			</script>";
		}else{
			echo " <script>
				alert('data gagal ditambahkan');
				document.location.href= 'index.php';
			</script>";
		};
	};
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>
	<form action="" method="post">
		<label for = "nim">NIM : 
			<input type="text" name="nim" id="nim"  required>
		</label>
		<br>
		<label for = "nama">Nama : 
			<input type="text" name="nama" id="nama" required>
		</label>
		<br>
		<label for = "jurusan">Jurusan :
			<input type="text" name="jurusan" id="jurusan" required>
		</label>
		<br>
		<label for = "email">Email :
			<input type="email" name="email" id="email" required>
		</label>
		<br>
		<label for = "gambar">Gambar :
			<input type="text" name="gambar" id="gambar" required>
		</label>
		<br>
		<button type="submit" name="submit">Submit!</button>
	</form>
</body>
</html>