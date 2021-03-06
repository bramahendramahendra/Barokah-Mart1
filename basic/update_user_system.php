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
                    //ambil nim dari query string
                    $username = $_GET['username'];
                    // buat query untuk ambil data dari database
                    $sql = "SELECT * FROM user_system WHERE username=$username";
                    $query = mysqli_query($db, $sql);
                    $data = mysqli_fetch_assoc($query);
                ?>
                
                <div class="form-control">
                  <form action="" class="" method="post">
                    
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="<?php echo $data['username'] ?>">
                    
                    <label for="nama_pengguna">Nama Pengguna</label>
                    <input type="text" id="nama_pengguna" name="nama_pengguna" value="<?php echo $data['nama_pengguna'] ?>">
                    
                    <label for="level">Level</label>
                    <input type="text" id="level" name="level" value="<?php echo $data['level'] ?>">
                
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="<?php echo $data['alamat'] ?>">
                    
                    <label for="kota">Kota</label>
                    <input type="text" id="kota" name="kota" value="<?php echo $data['kota'] ?>">
                    
                    <label for="kode_pos">Kode Pos</label>
                    <input type="text" id="kode_pos" name="kode_pos" value="<?php echo $data['kode_pos'] ?>">
                
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" value="<?php echo $data['nomor_telepon'] ?>">
                    
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>">
                    
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>">
                  
                    <input href="index.php" type="submit" value="update" name="update">
                  </form>
                </div>
            </div>    
        </div>
    </div>
    
    
    
  <?php

    

    // cek apakah tombol daftar sudah diklik atau blum?
    if(isset($_POST['update'])){

    	// ambil data dari formulir
    	  $id_user = $data['id_user'];
        $username = $_POST['username'];
    		$nama_pengguna = $_POST['nama_pengguna'];
    		$level = $_POST['level'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $kode_pos = $_POST['kode_pos'];
        $nomor_telepon = $_POST['nomor_telepon'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];

    	// buat query update
    	$sql = "UPDATE user_system SET id_user='$id_user',username='$username', nama_pengguna='$nama_pengguna', level='$level', alamat='$alamat', kota='$kota', kode_pos='$kode_pos', nomor_telepon='$nomor_telepon', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir' WHERE id_user=$id_user";
    	$query = mysqli_query($db, $sql);

        header("location: index_usersystem.php");
    }


    ?>
    
  </body>
</html>

