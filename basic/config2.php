<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","db_project_001");

$sqlQuery = "SELECT no_transaksi,nama_barang,jumlah FROM transaksi ORDER BY no_transaksi";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>