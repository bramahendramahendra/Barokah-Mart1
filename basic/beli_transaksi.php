<!DOCTYPE html>
<?php include('config.php');?>
<html lang="en">
  <head>
      <title>CSS Template</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <a href="index.php">User System</a>
          <a href="index_pelanggan.php">Pelanggan</a>
          <a href="index_produk.php">Produk</a>
          <a href="index_suplier.php">Suplier</a>
          <a href="index_transaksi.php">Transaksi</a>
        </div>
      </div>
    </header>

    <!--strat body-->
    <div class="container">
        <div class="row">
            <div class="content">
                <h2>Transaksi</h2>

                <?php
                    //ambil nim dari query string
                    $kode_barang = $_GET['kode_barang'];
                    // buat query untuk ambil data dari database
                    $sql = "SELECT * FROM produk WHERE kode_barang=$kode_barang";
                    $query = mysqli_query($db, $sql);
                    $data = mysqli_fetch_assoc($query);
                ?>

                 

                <table>
                      <tr>
                        <th>Nama Barang</th>
                        <th>Brand</th>
                        <th>Kategori</th>
                        <th>Stock</th>
                        <th>Harga Barang</th>

                      </tr>
                      <?php
                        echo "<tr>";
                        echo "<td>".$data['nama_barang']."</td>";
                        echo "<td>".$data['brand']."</td>";
                        echo "<td>".$data['kategori']."</td>";
                        echo "<td>".$data['stock']."</td>";
                        echo "<td>".$data['harga_barang']."</td>";
                        echo "</tr>";
                      ?>
                    </table>

                <h2>Isi Pembelian Transaksi</h2>
                 <div class="form-control">
                  <form action="" class="" method="post">

                    <label for="alamat">Jumlah</label>
                    <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah" required>

                    <input href="index.php" type="submit" value="Submit" name="submit">
                  </form>
                </div>
            </div>
        </div>
    </div>
  <?php

    // cek apakah tombol daftar sudah diklik atau blum?
    if(isset($_POST['submit'])){

    	// ambil data dari formulir
        $kode_barang = $data['kode_barang'];
        $nama_barang = $data['nama_barang'];
        $jumlah = $_POST['jumlah'];
        $harga_barang = $data['harga_barang'];
        $total_transaksi = $_POST['jumlah']*$data['harga_barang'];

    	// buat query update
    	$sql = "INSERT INTO transaksi(kode_barang,nama_barang,jumlah,harga_barang,total_transaksi) VALUES ('$kode_barang', '$nama_barang', '$jumlah', '$harga_barang', '$total_transaksi')";
    	$query = mysqli_query($db, $sql);

        header("location: index.php");
    }


    ?>

  </body>
</html>

