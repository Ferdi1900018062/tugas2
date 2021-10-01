<?php 
require_once("config.php");

$id_barang = $_GET['id_barang'];

    $sql_cari = "select * from penjualan where id_barang = '$id_barang'";
    $query = mysqli_query($coba, $sql_cari);
    $hasil = mysqli_fetch_assoc($query);

    if(isset($_POST['submit'])){
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];
        $nama_supplier = $_POST['nama_supplier'];
    
        $sql_edit = "update penjualan set id_barang = '$id_barang',nama_barang = '$nama_barang',
        stok = '$stok',harga_beli = '$harga_beli',harga_jual = '$harga_jual',nama_supplier = '$nama_supplier'
        where id_barang = '$id_barang'";
        mysqli_query($coba, $sql_edit);
    
        header("location:index.php");
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>ubah data</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
  <div class="container-md">
  <h1>Mengubah Data</h1>

  <form action="edit.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id barang</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="id_barang" value="<?= $hasil['id_barang'];?>" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_barang" value="<?= $hasil['nama_barang'];?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">stok</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="stok" value="<?= $hasil['stok'];?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">harga beli</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="harga_beli" value="<?= $hasil['harga_beli'];?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">harga jual</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="harga_jual" value="<?= $hasil['harga_jual'];?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">supplier</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_supplier" value="<?= $hasil['nama_supplier'];?>">
  </div>
  
  <button type="submit" class="btn btn-primary" name = "submit">ubah</button>
</form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>