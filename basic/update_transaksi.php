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
                    $no_transaksi = $_GET['no_transaksi'];
                    // buat query untuk ambil data dari database
                    $sql = "SELECT * FROM transaksi WHERE no_transaksi=$no_transaksi";
                    $query = mysqli_query($db, $sql);
                    $data = mysqli_fetch_assoc($query);
                ?>
                
                <div class="form-control">
                  <form action="" class="" method="post">
                    

                    
                    <label for="kode_barang">Kode Barang</label>
                    <input type="text" id="kode_barang" name="kode_barang" value="<?php echo $data['kode_barang'] ?>">
                    
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" id="nama_barang" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">
                
                    <label for="jumlah">Jumlah</label>
                    <input type="text" id="jumlah" name="jumlah" value="<?php echo $data['jumlah'] ?>">
                    
                    <label for="harga_barang">Harga Barang</label>
                    <input type="text" id="harga_barang" name="harga_barang" value="<?php echo $data['harga_barang'] ?>">
                    
                    <label for="total_transaksi">Total Transaksi</label>
                    <input type="text" id="total_transaksi" name="total_transaksi" value="<?php echo $data['total_transaksi'] ?>">
          
                  
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
    	  $no_transaksi = $data['no_transaksi'];
        $kode_barang = $_POST['kode_barang'];
    		$nama_barang = $_POST['nama_barang'];
    		$jumlah = $_POST['jumlah'];
        $harga_barang = $_POST['harga_barang'];
        $total_transaksi = $_POST['total_transaksi'];

    	// buat query update
    	$sql = "UPDATE transaksi SET no_transaksi='$no_transaksi', kode_barang='$kode_barang', nama_barang='$nama_barang', jumlah='$jumlah', harga_barang='$harga_barang', total_transaksi='$total_transaksi' WHERE no_transaksi=$no_transaksi";
    	$query = mysqli_query($db, $sql);

        header("location: index_transaksi.php");
    }


    ?>
    
  </body>
</html>

