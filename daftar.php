<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun Admin</title>
</head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

<body>
    <!-- Daftar -->
    <section class="vh-100" style="background-color: #e78524;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="images/ma.jpg"
                    alt="daftar form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">

                    <?php
                    include 'connect.php';

                    if (isset($_POST['daftar'])) {
                        $nama = $_POST['nama'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        // Masukkan kode untuk menyimpan data ke dalam database sesuai dengan tabel yang diinginkan

                        // Contoh: Menyimpan data ke dalam tabel "admin"
                        $query = "INSERT INTO admin (name, username, password) VALUES ('$nama', '$username', '$password')";
                        $result = mysqli_query($koneksi, $query);

                        if ($result) {
                            echo '<script>alert("Registrasi berhasil. Silakan login menggunakan akun yang baru dibuat.")</script>';
                            header("Location: login.php");
                            exit();
                        } else {
                            $errorMessage = "Registrasi gagal. Silakan coba lagi.";
                        }
                    }
                    ?>

                    <form method="post">

                      <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        <span class="h1 fw-bold mb-0">Daftar</span>
                      </div>

                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Buat Akun Admin Baru</h5>

                      <?php if (isset($errorMessage)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $errorMessage; ?>
                        </div>
                      <?php endif; ?>

                      <div class="form-outline mb-4">
                        <input type="text" name="nama" class="form-control form-control-lg" />
                        <label class="form-label">Nama</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" name="username" class="form-control form-control-lg" />
                        <label class="form-label">Username</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control form-control-lg" />
                        <label class="form-label">Password</label>
                      </div>

                      <div class="pt-1 mb-4">
                        <button class="btn btn-warning btn-lg btn-block" type="submit" name="daftar">Daftar</button>
                       <a class="btn btn-danger btn-user btn-block" href="login.php">
                          Kembali
                       </a>

                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>
