<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pesanan</title>
       <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- fontawesome -->
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
   <!-- Place your kit's code here -->
            <script src="https://kit.fontawesome.com/da14dfb904.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">
     <!--My Style-->
    <link rel="stylesheet" href="css/adm.css"
    
</head>
<body>
    <style>
  .row {
    --bs-gutter-x: 4rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: 50px;
    margin-right: 5%;
    margin-left: 250px;
  }
    .hr {
    max-width: 50%;
  }
</style>
    <div class="sidebar">
        <div class="logo">
             <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
        </div>
        <div class="admin-name">
            <h5>Admin Qolbeehoney</h5>
            
            <?php
          include 'connect.php';
          $admin = mysqli_query($koneksi, "select * from admin"); 
          $a = mysqli_fetch_object($admin);  
        ?>Welcome, <?php echo $a->name?></a>
        </div>
<ul class="menu">
            
            <li><a href="board.php"><i class="fa-sharp fa-solid fa-house "></i><span>  Dashboard</span></a></li>
            <li><a href="#"><i class="fa-solid fa-inbox"></i>    Pemesanan</a></li>
            <li><a href="produkindex.php"><i class="fa-solid fa-store"></i>    Produk</a></li>
            <li><a href="rsvpindex.php"><i class="fa-solid fa-book-open-reader"></i>    Reservasi</a></li>
            <li><a href="login.php"><i class="fa-solid fa-right-from-bracket"></i> Log-Out</a></li>
        </ul> 
    </div>

        <div class="col-md-10 content mx-auto">
                <h3><i class="fa fa-th-large"></i> Form Pendaftaran TK Azzahra Palembang</h3>
                <hr>
                <div class="row">
                    <!-- Area Chart -->
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-danger">Daftar</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                 <!-- Form untuk input data pesanan baru -->
        <form method="post" action="proses_tambah_pesanan.php">
          <div class="form-group">
            <label for="namaPemesan">Nama Pemesan</label>
            <input type="text" class="form-control" id="namaPemesan" name="namaPemesan" required>
          </div>
          <div class="form-group">
            <label for="alamatEmail">Alamat Email</label>
            <input type="email" class="form-control" id="alamatEmail" name="alamatEmail" required>
          </div>
          <div class="form-group">
            <label for="noHp">No. Hp</label>
            <input type="text" class="form-control" id="noHp" name="noHp" required>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
          </div>
          <div class="form-group">
            <label for="metodeBayar">Metode Bayar</label>
            <input type="text" class="form-control" id="metodeBayar" name="metodeBayar" required>
          </div>
          <div class="form-group">
            <label for="pesananProduk">Pesanan Produk</label>
            <input type="text" class="form-control" id="pesananProduk" name="pesananProduk" required>
          </div>
          <div class="form-group">
            <label for="totalBayar">Total Bayar</label>
            <input type="text" class="form-control" id="totalBayar" name="totalBayar" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
                </div>
        </div>
    </div>

    <!-- Tambahkan script untuk mengaktifkan Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>