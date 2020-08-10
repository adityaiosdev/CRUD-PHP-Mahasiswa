<?php 
require 'functions.php';

	$nim = $_GET["nim"];
	if (hapus($nim)>0){
		var c = confirm("click OK to continue");
		echo "<script>
						alert('data berhasil dihapus');
						document.location.href = 'index.php';
					</script>
					";
				}else {
					echo "<script>
						alert('data gagal dihapus');
						document.location.href = 'index.php';
					</script>
					";
				}
 ?>