<?php
//koneksi database
include 'connect.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $qty = $_POST['jumlah'];
    $detail = $_POST['detail'];

// Upload gambar
$gambar = $_FILES['gambar']['name'];
$lokasi = $_FILES['gambar']['tmp_name'];

// Ubah nama gambar dengan menyertakan path folder "images/"
$gambarBaru = "images/" . $gambar;

// Proses upload gambar ke folder "images/"
move_uploaded_file($lokasi, $gambarBaru);

// Lakukan query insert data produk ke database
$query = "INSERT INTO product (product_name, product_price, product_qty, product_image, product_code) VALUES ('$nama', '$harga','$qty', '$gambarBaru', '$detail')";
$result = mysqli_query($koneksi, $query);


    if ($result) {
        // Jika insert sukses, redirect ke halaman daftar produk
        header("Location: produkindex.php");
        exit();
    } else {
        // Jika insert gagal, tampilkan pesan error
        echo "Gagal menyimpan data produk.";
    }
}
?>
