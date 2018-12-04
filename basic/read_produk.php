<!DOCTYPE html>
<?php include('config.php');?>
<html lang="en">
    <head>
        <title>Barokah Mart</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <a href="index.php">Transaksi</a>
                    <div class="dropdown">
                        <button class="dropbtn">Tambah Data 
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="create_user.php">Tambah User</a>
                            <a href="create_produk.php">Tambah Produk</a>
                        </div>
                    </div> 
                    <div class="dropdown">
                        <button class="dropbtn">Lihat Data
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="read_user.php">User</a>
                            <a href="read_produk.php">Produk</a>
                            <a href="read_transaksi.php">Transaksi</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">BI Analysis
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="grafik_stock.php">Stock Produk</a>
                            <a href="grafik_transaksi.php">Transaksi Produk</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Report Data 
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="index_usersystem.php">User</a>
                            <a href="index_pelanggan.php">Pelanggan</a>
                            <a href="index_suplier.php">Supplier</a>
                            <a href="index_produk.php">Produk</a>
                            <a href="index_transaksi.php">Transaksi</a>
                        </div>
                    </div> 
                </div>
            </div>
        </header>
        
       <!--strat body-->
      <div class="container">
        <div class="row">
          <div class="content">
            <h2>Data User</h2>
            
            <br>
            <br>
            <table>
              <tr>
                <th>ID Supplier</th>
                <th>Nama Supplier</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Brand</th>
                <th>Kategori</th>
                <th>Stock</th>
                <th>Harga</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              <?php
                $sql = "SELECT * FROM suplier";
                $query = mysqli_query($db, $sql);
                while($data = mysqli_fetch_array($query)){
                  echo "<tr>";
                  echo "<td>".$data['id_supplier']."</td>";
                  echo "<td>".$data['nama_suplier']."</td>";
                  echo "<td>".$data['kode_barang']."</td>";
                  echo "<td>".$data['nama_barang']."</td>";
                  echo "<td>".$data['brand']."</td>";
                  echo "<td>".$data['kategori']."</td>";
                  echo "<td>".$data['stock']."</td>";
                  echo "<td>".$data['harga_barang']."</td>";
                  echo "<td>";
                  echo "<a href='update_suplier.php?id_supplier=".$data['id_supplier']."'><button class ='button btn'>Edit</button></a>";
                  echo "</td>";
                  echo "<td>";
                  echo "<a href='delete_suplier.php?id_supplier=".$data['id_supplier']."'><button class ='button btn'>Delete</button></a>";
                  echo "</td>";
                  echo "</tr>";
                }
              ?>
            </table>
          </div>    
        </div>
      </div>
        
        
        <!--end body-->
        
        <!--<footer>-->
        <!--  <p>----</p>-->
        <!--</footer>-->
    
  </body>
</html>
