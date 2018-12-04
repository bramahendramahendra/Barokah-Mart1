<?php

include("config.php");

if( isset($_GET['no_transaksi']) ){

	// ambil NIM dari query string
	$no_transaksi = $_GET['no_transaksi'];

	// buat query hapus
	$sql = "DELETE FROM transaksi WHERE no_transaksi=$no_transaksi";
	$query = mysqli_query($db, $sql);

	// apakah query hapus berhasil?
	if($query){
		header('Location: index_transaksi.php');
	} else {
		die("Failed.");
	}

} else {
	die("Forbidden.");
}

?>
