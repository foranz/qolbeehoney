<?php
include 'connect.php';

// Periksa apakah parameter ID tersedia dalam URL
if (isset($_GET['id'])) {
    // Ambil ID dari URL
    $id = $_GET['id'];

    // Hapus data dari tabel "product" berdasarkan ID
    $query = "DELETE FROM product WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika penghapusan berhasil, tampilkan pesan sukses dan redirect ke halaman daftar produk
        echo "<script> alert('Data Berhasil Dihapus')</script>";
        header("Location: produkindex.php");
        exit();
    } else {
        // Jika penghapusan gagal, tampilkan pesan error
        echo "<script> alert('Gagal menghapus data')</script>";
    }
} else {
    // Jika ID tidak tersedia dalam URL, tampilkan pesan error
    echo "<script> alert('ID tidak tersedia')</script>";
}
?>
