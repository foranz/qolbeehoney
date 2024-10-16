<?php
include 'connect.php';

// Menghapus data produk yang ada di dalam tabel
$sql = "DELETE FROM produk";
$koneksi->query($sql);

// Menambahkan data produk ke dalam tabel
foreach ($dataProduk as $produk) {
    $image = $produk['image'];
    $name = $produk['name'];
    $price = $produk['price'];
    $description = $produk['description'];

    $sql = "INSERT INTO produk (image, name, price, description)
            VALUES ('$image', '$name', $price, '$description')";
    $koneksi->query($sql);
}

echo "Data produk berhasil disimpan ke dalam database!";
?>
