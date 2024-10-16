<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- fontawesome -->
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
   <!-- Place your kit's code here -->
            <script src="https://kit.fontawesome.com/da14dfb904.js" crossorigin="anonymous"></script>
    <!-- sweetalert2 css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.2/sweetalert2.min.css"
    />

    <!-- my css -->
    <link rel="stylesheet" href="css/adm.css" />
    <title>Admin Qolbeehoney</title>
  </head>
<body>
    <div class="sidebar">
      
        <div class="logo">
            <img src="images/logo.png" alt="Logo">
        </div>
        <div class="admin-name">
            <h4>Admin Qolbeehoney</h4>
            
            <?php
          include 'connect.php';
          $admin = mysqli_query($koneksi, "select * from admin"); 
          $a = mysqli_fetch_object($admin);  
        ?>Welcome, <?php echo $a->name?></a>
        </div>
        <ul class="menu">
            
            <li><a href="#"><i class="fa-sharp fa-solid fa-house "></i><span>  Dashboard</span></a></li>
            <li><a href="orderindex.php"><i class="fa-solid fa-inbox"></i>    Pemesanan</a></li>
            <li><a href="produkindex.php"><i class="fa-solid fa-store"></i>    Produk</a></li>
            <li><a href="penggunaindex.php"><i class="fa-solid fa-user-group"></i> Pengguna</a></li>
            <li><a href="login.php"><i class="fa-solid fa-right-from-bracket"></i> Log-Out</a></li>
        </ul> 
    </div>
    
      
    <!-- feather icon -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="js/icon.js"></script>

    <!-- sweetalert2 js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.2/sweetalert2.min.js"></script>

  </body>
</html>

