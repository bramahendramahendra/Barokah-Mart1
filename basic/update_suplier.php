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
                    $id_supplier = $_GET['id_supplier'];
                    // buat query untuk ambil data dari database
                    $sql = "SELECT * FROM suplier WHERE id_supplier=$id_supplier";
                    $query = mysqli_query($db, $sql);
                    $data = mysqli_fetch_assoc($query);
                ?>
                
                <div class="form-control">
                  <form action="" class="" method="post">
                    
                    <label for="nama_suplier">Nama Suplier</label>
                    <input type="text" id="nama_suplier" name="nama_suplier" value="<?php echo $data['nama_suplier'] ?>">
                    
                    <label for="nkode_barang">Kode Barang</label>
                    <input type="text" id="kode_barang" name="kode_barang" value="<?php echo $data['kode_barang'] ?>">
                    
                    <label for="brand">Brand</label>
                    <input type="text" id="brand" name="brand" value="<?php echo $data['brand'] ?>">
                
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" id="nama_barang" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">
                    
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" value="<?php echo $data['kategori'] ?>">
                    
                    <label for="stock">Stock</label>
                    <input type="text" id="stock" name="stock" value="<?php echo $data['stock'] ?>">
                
                    
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
    	  $id_supplier = $data['id_supplier'];
        $nama_suplier = $_POST['nama_suplier'];
    		$kode_barang = $_POST['kode_barang'];
    		$brand = $_POST['brand'];
        $nama_barang = $_POST['nama_barang'];
        $kategori = $_POST['kategori'];
        $stock = $_POST['stock'];


    	// buat query update
    	$sql = "UPDATE suplier SET id_supplier='$id_supplier',nama_suplier='$nama_suplier', kode_barang='$kode_barang', brand='$brand', nama_barang='$nama_barang', kategori='$kategori', stock='$stock' WHERE id_supplier=$id_supplier";
    	$query = mysqli_query($db, $sql);

        header("location: index_suplier.php");
    }


    ?>
    
  </body>
</html>

