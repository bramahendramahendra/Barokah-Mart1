<?php

include("config.php");

if( isset($_GET['kode_barang']) ){

	// ambil NIM dari query string
	$kode_barang = $_GET['kode_barang'];

	// buat query hapus
	$sql = "DELETE FROM produk WHERE kode_barang=$kode_barang";
	$query = mysqli_query($db, $sql);

	// apakah query hapus berhasil?
	if($query){
		header('Location: index_produk.php');
	} else {
		die("Failed.");
	}

} else {
	die("Forbidden.");
}

?>
