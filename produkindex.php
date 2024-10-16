<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Produk</title>
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
    margin-right: 10%;
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
            <li><a href="orderindex.php"><i class="fa-solid fa-inbox"></i>    Pemesanan</a></li>
            <li><a href="#"><i class="fa-solid fa-store"></i>    Produk</a></li>
            <li><a href="rsvpindex.php"><i class="fa-solid fa-book-open-reader"></i>    Reservasi</a></li>
            <li><a href="login.php"><i class="fa-solid fa-right-from-bracket"></i> Log-Out</a></li>
        </ul> 
    </div>
    
    <div class="row">
      <h3><i class="fa-solid fa-chart-simple" style="color: #ffc800;"></i> List Produk</h3><hr>
          <!-- Area Chart -->
          <div class="col">
            <div class="card shadow mb-4">
              
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-danger">Produk</h6>
                <a href="createproduk.php" class="btn btn-warning"><i class="fa fa-plus"></i> Tambah Produk</a>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-sm" id="produk" width="100%" cellspacing="0">
                     
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Jumlah Produk</th>
                        <th>Gambar</th>
                        <th>Kode Produk</th>
                        <th><center>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Include config file
                      include 'connect.php';

                      // Attempt select query execution
                      $product = mysqli_query($koneksi, "select * from product");
                      $no = 1; // Variable untuk nomor urut

                      while($row=$product->fetch_object()){
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row->product_name; ?></td>
                          <td><?php echo $row->product_price; ?></td>
                          <td><?php echo $row->product_qty; ?></td>
                          <td><center><img src="<?php echo $row->product_image; ?>" width="250px"></center></td>
                          <td><?php echo $row->product_code; ?></td>
                          <td><a href="editproduk.php?id=<?php echo $row->id; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                          <a href="deleteproduk.php?id=<?php echo $row->id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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
</body>
</html>
