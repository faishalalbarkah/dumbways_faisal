<?php 
	include "koneksi.php";

	$id = $_GET['id'];
	$delete = $con->query("DELETE FROM products_tb WHERE id = '$id'");
	if ($delete) {
		echo "<script>alert('Data Product Berhasil Dihapus');window.location='index.php'</script>";
	}else{
		echo "<script>alert('Data Gagal Dihapus');window.location='index.php'</script>";
	}
?>