<?php

include("config.php");

if( isset($_GET['id_supplier']) ){

	// ambil NIM dari query string
	$id_supplier = $_GET['id_supplier'];

	// buat query hapus
	$sql = "DELETE FROM suplier WHERE id_supplier=$id_supplier";
	$query = mysqli_query($db, $sql);

	// apakah query hapus berhasil?
	if($query){
		header('Location: index_suplier.php');
	} else {
		die("Failed.");
	}

} else {
	die("Forbidden.");
}

?>
