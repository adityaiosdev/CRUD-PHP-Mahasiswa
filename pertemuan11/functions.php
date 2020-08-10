<?php 
	$conn = mysqli_connect("localhost", "root" , "", "phpdasar");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows=[];
	while($row = mysqli_fetch_assoc($result)){
		$rows[]= $row;
	}
	return $rows;
}

function hapus($nim){
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswi where nim= $nim");
	return mysqli_affected_rows($conn);
}

function tambah($data){
	global $conn;
	$nim=$data["nim"];
	$nama=$data["nama"];
	$jurusan=$data["jurusan"];
	$email=$data["email"];
	$gambar=$data["gambar"];
	$query= "INSERT INTO mahasiswi VALUES('$nim', '$nama','$jurusan','$email','$gambar')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

?>
