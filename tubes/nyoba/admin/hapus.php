<?php 
require '../php_manufactur/functions.php';

 // cek apakah yang mengakses halaman ini sudah login
 // if($_SESSION['role']==""){
 //  header("location:../index.php?pesan=gagal");
 // }
 
$id_sabun = $_GET['id_sabun'];

if( hapus($id_sabun) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'admin.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = 'admin.php';
		</script>
	";
}

?>