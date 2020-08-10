<?php 
	require 'functions.php';
	$mahasiswi = query("SELECT * FROM mahasiswi");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Halaman Admin</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswi</h1>
 	<table border= "1" cellpadding="10" cellspacing="0">
 	<tr>
 		<th>No.</th>
 		<th>NIM</th>
 		<th>Nama</th>
 		<th>Jurusan</th>
 		<th>Email</th>
 		<th>Gambar</th>
 		<th>Aksi</th>
 	</tr>
 	<?php $i=1; ?>
 	<?php foreach ($mahasiswi as $row) : ?>
 	<tr>
 		<td><?= $i; ?></td>
 		<td><?= $row["nim"] ?></td>
 		<td><?= $row["nama"] ?></td>
 		<td><?= $row["jurusan"] ?></td>
 		<td><?= $row["email"] ?></td>
 		<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
 		<td><a href="">ubah |</a>
 			<a href="hapus.php?nim=<?= $row["nim"]; ?>">hapus </a>
 		</td>
 	</tr>
 	<?php $i++; ?>
 	<?php endforeach ?>
 	</table>
 	<a href="tambah.php">Tambah Data Mahasiswa</button>
 </body>
 </html>