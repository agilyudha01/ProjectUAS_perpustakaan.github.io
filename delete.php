<?php 
// session_start();

// if( !isset($_SESSION["login"]) ) {
// 	header("Location: login.php");
// 	exit;
// }

require 'function.php';

$id = $_GET["id"];

if( delete($id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'dataBuku.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'dataBuku.php';
		</script>
	";
}

?>