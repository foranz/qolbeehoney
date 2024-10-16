<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Pesanan</title>
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
    <!-- Place this script inside the <head> tag --> 
<script>
  function changeStatus(id, status) {
    // Send an AJAX request to update the status in the database
    // You need to create a separate PHP script to handle the AJAX request and database update
    // For simplicity, I'll use a placeholder script called update_status.php
    // Replace "update_status.php" with the actual PHP script that handles the update
    const url = `order_status.php?id=${id}&status=${status}`;
    fetch(url)
      .then(response => {
        if (response.ok) {
          // If the update is successful, reload the page to reflect the changes
          location.reload();
        } else {
          // Handle error if the update fails
          alert("Failed to update status.");
        }
      })
      .catch(error => {
        // Handle any network or other errors
        console.error('Error:', error);
        alert("An error occurred while updating the status.");
      });
  }
</script>

    
</head>
<body>
    <style>
  .row {
    --bs-gutter-x: 4rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: 50px;
    margin-right: 3%;
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
    
    <div class="row">
      <h3><i class="fa-solid fa-basket-shopping" style="color: #ffc800;"></i> List Pesanan</h3><hr>
          <!-- Area Chart -->
          <div class="col">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-danger">Pesanan</h6>
               
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-sm" id="produk" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Email</th>
                        <th>No.Hp</th>
                        <th>Alamat</th>
                        <th>Metode Bayar</th>
                        <th>Pesanan Produk</th>
                        <th>Total Bayar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Include config file
                      include 'connect.php';

                      // Attempt select query execution
                      $product = mysqli_query($koneksi, "select * from orders");
                      $no = 1; // Variable untuk nomor urut

                      while($row=$product->fetch_object()){
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row->name; ?></td>
                          <td><?php echo $row->email; ?></td>
                          <td><?php echo $row->phone; ?></td>
                          <td><?php echo $row->address; ?></td>
                          <td><?php echo $row->pmode; ?></td>
                          <td><?php echo $row->products; ?></td>
                          <td><?php echo $row->amount_paid; ?></td>
                          <td><?php echo $row->status; ?></td>
                           <td>
        <!-- Buttons for changing the status -->
        <button class="btn btn-success btn-sm" onclick="changeStatus(<?php echo $row->id; ?>, 'selesai')"><i class="fa-solid fa-check"></i></button>
        <button class="btn btn-warning btn-sm" onclick="changeStatus(<?php echo $row->id; ?>, 'ditolak')"><i class="fa-solid fa-xmark"></i></button>
      
                          <a href="deleteorder.php?id=<?php echo $row->id; ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
