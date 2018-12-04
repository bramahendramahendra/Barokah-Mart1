<?php

include("config.php");

if( isset($_GET['no_pelanggan']) ){

	// ambil NIM dari query string
	$no_pelanggan = $_GET['no_pelanggan'];

	// buat query hapus
	$sql = "DELETE FROM pelanggan WHERE no_pelanggan=$no_pelanggan";
	$query = mysqli_query($db, $sql);

	// apakah query hapus berhasil?
	if($query){
		header('Location: index_pelanggan.php');
	} else {
		die("Failed.");
	}

} else {
	die("Forbidden.");
}

?>
