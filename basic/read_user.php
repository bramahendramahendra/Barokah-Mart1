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
                <th>Username</th>
                <th>Nama Pengguna</th>
                <th>Level</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Kode Pos</th>
                <th>Nomor Telepon</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              <?php
                $sql = "SELECT * FROM user_system";
                $query = mysqli_query($db, $sql);
                while($data = mysqli_fetch_array($query)){
                  echo "<tr>";
                  echo "<td>".$data['username']."</td>";
                  echo "<td>".$data['nama_pengguna']."</td>";
                  echo "<td>".$data['level']."</td>";
                  echo "<td>".$data['alamat']."</td>";
                  echo "<td>".$data['kota']."</td>";
                  echo "<td>".$data['kode_pos']."</td>";
                  echo "<td>".$data['nomor_telepon']."</td>";
                  echo "<td>".$data['tempat_lahir']."</td>";
                  echo "<td>".$data['tanggal_lahir']."</td>";
                  echo "<td>";
                  echo "<a href='update_user_system.php?username=".$data['username']."'><button class ='button btn'>Edit</button></a>";
                  echo "</td>";
                  echo "<td>";
                  echo "<a href='delete_user_system.php?id_user=".$data['id_user']."'><button class ='button btn'>Delete</button></a>";
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
