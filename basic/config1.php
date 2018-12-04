<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","db_project_001");

$sqlQuery = "SELECT kode_barang,nama_barang,stock FROM produk ORDER BY kode_barang";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>