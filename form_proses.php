<?php
include 'connect.php';

// Mengambil nilai input dari formulir
$namo = $_POST['nama'];
$emel = $_POST['email'];
$hape = $_POST['nomor'];

// Membuat prepared statement
$stmt = mysqli_prepare($koneksi, "INSERT INTO formulir (nama, email, nomor) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sss", $namo, $emel, $hape);

if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Terima kasih, data Anda sudah masuk!');</script>";
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

// Menutup prepared statement
mysqli_stmt_close($stmt);

// Menutup koneksi ke database
mysqli_close($koneksi);
?>
