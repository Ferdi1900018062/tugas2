<?php   
require_once("config.php");

$sql_get = "select * FROM penjualan";
$query_mhs = mysqli_query($coba, $sql_get);

$results = [];

while($row = mysqli_fetch_assoc($query_mhs)){
    $results[] = $row;
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

    <title>data</title>
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
  <h1>Daftar Barang</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">id barang</th>
      <th scope="col">nama barang</th>
      <th scope="col">stok</th>
      <th scope="col">harga beli</th>
      <th scope="col">harga jual</th>
      <th scope="col">supplier</th>
    </tr>
  </thead>
  <tbody>
  <?php  
        $no =1;
            foreach($results as $hasil):
        ?>
     <td><?= $no; ?></td>
            <td><?= $hasil['id_barang'] ?></td>
            <td><?= $hasil[ 'nama_barang'] ?></td>
            <td><?= $hasil[ 'stok'] ?></td>
            <td><?= $hasil[ 'harga_beli'] ?></td>
            <td><?= $hasil[ 'harga_jual'] ?></td>
            <td><?= $hasil[ 'nama_supplier'] ?></td>
            <td>
            <a href="edit.php?id_barang=<?=$hasil['id_barang']; ?>">edit</a>
            ||
            <a href="hapus.php?id_barang=<?=$hasil['id_barang']; ?>">hapus</a>
            </td>
        </tr>
        <?php 
        $no++;
        endforeach;
        ?>
  </tbody>
</table>
<a href="tambah.php"><button type="submit" class="btn btn-primary" name = "sumbit">tambah</button></a>
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