<?php $koneksi = mysqli_connect("localhost", "root", "", "honey");   // Periksa koneksi
            if (mysqli_connect_errno()) {
                echo "Koneksi database gagal: " . mysqli_connect_error();
                exit;
            }?>
