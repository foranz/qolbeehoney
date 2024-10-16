<?php
include 'connect.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM orders WHERE id = $id");
echo "<script> alert ('Data Berhasil Dihapus')</script>";
header("refresh:0;orderindex.php");
?>
