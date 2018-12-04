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
                
                <?php
                    // Check If form submitted, insert form data into table.
                    if(isset($_POST['submit'])) {
                        $username = $_POST['username'];
                        $nama_pengguna = $_POST['nama_pengguna'];
                        $level = $_POST['level'];
                        $alamat = $_POST['alamat'];
                        $kota = $_POST['kota'];
                        $kode_pos = $_POST['kode_pos'];
                        $nomor_telepon = $_POST['nomor_telepon'];
                        $tempat_lahir = $_POST['tempat_lahir'];
                        $tanggal_lahir = $_POST['tanggal_lahir'];
                        
                        
                        
                        // Insert user data into table
                        $sql = "INSERT INTO user_system(username,nama_pengguna,level,alamat,kota,kode_pos,nomor_telepon,tempat_lahir,tanggal_lahir) VALUES ('$username', '$nama_pengguna', '$level', '$alamat', '$kota', '$kode_pos', '$nomor_telepon', '$tempat_lahir', '$tanggal_lahir')";
                        $query = mysqli_query($db, $sql);
            
                        // Show message when user added
                ?>
                        <div class="alert alert-success" >
                            <strong style="color:green;font-size: 150%;">Success!</strong> <a href='index.php' style>View Data</a>.
                        </div>
                <?php
                    }
                ?>
                
                <div class="form-control">
                  <form action="" class="" method="post">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" required>
                    
                    <label for="nama_pengguna">Nama Pengguna</label>
                    <input type="text" id="nama_pengguna" name="nama_pengguna" placeholder="Nama Pengguna" required>
                    
                    <label for="level">Level</label>
                    <input type="text" id="level" name="level" placeholder="Level" required>
                
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Alamat" required>
                    
                    <label for="kota">Kota</label>
                    <input type="text" id="kota" name="kota" placeholder="Kota" required>
                    
                    <label for="kode_pos">Kode Pos</label>
                    <input type="text" id="kode_pos" name="kode_pos" placeholder="Kode Pos" required>
                
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" placeholder="Nomor Telepon" required>
                    
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                    
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                  
                    <input href="index.php" type="submit" value="Submit" name="submit">
                  </form>
                </div>
            </div>    
        </div>
    </div>
    
    
    
    <!--end body-->
        
        <!--<footer>-->
        <!--  <p>----</p>-->
        <!--</footer>-->
    
  </body>
</html>
