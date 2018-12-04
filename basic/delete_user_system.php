<?php

include("config.php");

if( isset($_GET['id_user']) ){

	// ambil NIM dari query string
	$id_user = $_GET['id_user'];

	// buat query hapus
	$sql = "DELETE FROM user_system WHERE id_user=$id_user";
	$query = mysqli_query($db, $sql);

	// apakah query hapus berhasil?
	if($query){
		header('Location: index.php');
	} else {
		die("Failed.");
	}

} else {
	die("Forbidden.");
}

?>
