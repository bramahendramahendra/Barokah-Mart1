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
                <h2>Data Suplier</h2>
                
                <?php
                    // Check If form submitted, insert form data into table.
                    if(isset($_POST['submit'])) {
                        $nama_suplier = $_POST['nama_suplier'];
                        $kode_barang = $_POST['kode_barang'];
                        $nama_barang = $_POST['nama_barang'];
                        $brand = $_POST['brand'];
                        $kategori = $_POST['kategori'];
                        $stock = $_POST['stock'];
                        $harga_barang = $_POST['harga_barang'];
                        
                        // Insert user data into table
                        $sql = "INSERT INTO suplier(nama_suplier,kode_barang,nama_barang,brand,kategori,stock,harga_barang) VALUES ('$nama_suplier', '$kode_barang', '$nama_barang', '$brand', '$kategori', '$stock','$harga_barang')";
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
                    <label for="nama_suplier">Nama Suplier</label>
                    <input type="text" id="nama_suplier" name="nama_suplier" placeholder="Nama Suplier" required>
                    
                    <label for="kode_barang">Kode Barang</label>
                    <input type="text" id="kode_barang" name="kode_barang" placeholder="Kode Barang" required>
                    
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" id="nama_barang" name="nama_barang" placeholder="Nama Barang" required>
                    
                    <label for="brand">Brand</label>
                    <input type="text" id="brand" name="brand" placeholder="Brand" required>
                    
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" placeholder="Kategori" required>
                    
                    <label for="stock">Stock</label>
                    <input type="text" id="stock" name="stock" placeholder="Stock" required>
                    
                    <label for="harga_barang">Harga Barang</label>
                    <input type="text" id="harga_barang" name="harga_barang" placeholder="Harga Barang" required>
                
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
