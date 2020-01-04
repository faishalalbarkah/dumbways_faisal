<?php 
	include "koneksi.php";

	$id = $_GET['id'];
	$delete = $con->query("DELETE FROM suppliers_tb WHERE id = '$id'");
	if ($delete) {
		echo "<script>alert('Data Supplier Berhasil Dihapus');window.location='index_supplier.php'</script>";
	}else{
		echo "<script>alert('Data Gagal Dihapus');window.location='index_supplier.php'</script>";
	}
?>