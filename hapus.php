<?php

require_once("config.php");

$id_barang = $_GET['id_barang'];
$sql_delete = "delete from penjualan where id_barang = '$id_barang'";
    mysqli_query($coba, $sql_delete);

    header("location:index.php");
?>