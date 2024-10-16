<?php
//koneksi database
include 'connect.php';

// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa apakah parameter 'id' telah diberikan
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
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
$query = "UPDATE product SET product_name='$nama', product_price='$harga',  product_qty='$qty' ,product_code='$detail', product_image='$gambarBaru' WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "<script> alert ('Data Berhasil di Update')</script>";
            header("refresh:0;produkindex.php");
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        echo "ID produk tidak diberikan.";
    }
} else {
    echo "Metode permintaan tidak valid.";
}

// Menutup koneksi database
mysqli_close($koneksi);
?>