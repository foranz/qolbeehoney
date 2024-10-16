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

    <!-- sweetalert2 css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.2/sweetalert2.min.css"
    />

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Website Qolbeehoney</title>
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <img src="images/logo.png" width="80" />
      <a href="#" class="navbar-logo">Madu <span>Qolbeehoney</span></a>
      <div class="navbar-list-group">
        <a href="#home" class="navbar-list">Home</a>
        <a href="#about" class="navbar-list">Tentang Kami</a>
        <a href="#product" class="navbar-list">Menu</a>
        <a href="get_produk.php" class="navbar-list">Produk</a>
        <a href="#contact" class="navbar-list">Kontak</a>
      </div>
      <div class="navbar-icon">
          <a href="login.php">
          <i
            data-feather="user"
            class="icon"
            id="login"
          ></i>
        </a>
        <i
          data-feather="search"
          class="icon btn-modal"
          id="search"
          data-modal="searchModal"
        ></i>
        <a href="cart.php">
        <i
          data-feather="shopping-cart"
          class="icon"
          id="shopping-cart"
        ></i>
</a>
        <i data-feather="menu" class="icon" id="hamburger"></i>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- section hero start -->
    <section class="hero" id="home">
      <div class="content">
        <h1>Fresh and Healthy <span>Pure Honey</span></h1>
        <p>
          We serve delicious and nutritious honey, staying true to our
          commitment to use quality, sustainable and organic bees..
        </p>
        <a href="get_produk.php" class="button">Beli Sekarang</a>
      </div>
    </section>
    <!-- section hero end -->

    <!-- section about start -->
    <section class="about" id="about">
      <h2>Tentang <span>Kami</span></h2>
      <div class="row">
        <div class="image-wrapper">
          <img
            src="images/farm.jpg"
            width="100"
            alt="tentang kami"
            class="image"
          />
        </div>
        <div class="content">
          <h3>Kenapa Memilih Kami</h3>
          <p>
            Qolbehoney adalah madu murni hasil budi daya peternakan lebah dengan
            sistem digembalakan diperkebunan, daerah pegunungan dan hutan-hutan
            secara alami sehingga madu yang dihasilkan berkualitas tinggi, murni
            dan alami. Dikemas tanpa zat aditif apapun. Dijamin kemurniannya dan
            tersedia macam-macam nektar bunga dengan khasiatnya masing-masing.
          </p>
          <p>
            Kami menjamin kualitas, kemurnian, tanpa bahan pengawet dan campuran
            apapun karena kami menjalin hubungan dengan peternak yang jujur dan
            amanah.
          </p>
        </div>
      </div>
    </section>
    <!-- section about end -->

    <!-- section menu start -->
    <section class="product" id="product">
      <div class="header">
        <h2>Menu <span>Kami</span></h2>
        <p>
          Produk yang langsung dikemas dengan proses yang higenis sehingga
          keaslian madu terjamin
        </p>
      </div>
      <div class="card-container"></div>
    </section>
    <!-- section menu end -->

    <!-- section contact start -->
    <section class="contact" id="contact">
      <div class="header">
        <h2>Kontak <span>Kami</span></h2>
        <p>
          Hubungi kami untuk bisa berkunjung serta melihat
          langsung peternakan QolbeeHoney dan rasakan madu yang di ambil dari
          sarangnya
        </p>
      </div>
      <div class="row">
        <div class="image-wrapper">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.5368910112065!2d104.52633371068569!3d-3.2154910407648605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bbba0ea5324fb%3A0xe6b405a08a64f8d4!2sQolbeehoney%20Farm!5e0!3m2!1sen!2sid!4v1689394332817!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="form-wrapper">
          <form action="form_proses.php" method="POST" class="form">
            <div class="form-group">
              <label for="nama" class="label">Nama lengkap</label>
              <input
                type="text" name="nama"
                id="nama_lengkap"
                
                class="input input-name"
                placeholder="Nama lengkap" required
              />
            </div>
            <div class="form-group">
              <label for="email" class="label">Alamat email</label>
              <input
                type="text" name="email"
                id="alamat_email"
                
                class="input input-email"
                placeholder="Alamat email" required
              />
            </div>
            <div class="form-group">
              <label for="nomor" class="label">Nomor telepon</label>
              <input
                type="number" name="nomor" 
                id="nomor_telepon"
                
                class="input input-nomor"
                placeholder="No.telepon" required
              />
            </div>
            <button type="submit" class="button btn-submit">Submit</button>
          </form>
        </div>
      </div>
    </section>
    <!-- section contact end -->

    <!-- footer start -->
    <footer class="footer">
      <div class="wrapper">
        <a href="https://www.instagram.com/qolbeehoney/" target="_blank"
          ><i data-feather="instagram"></i
        ></a>
        <a href="https://wa.me/628976640896" target="_blank"
          ><img src="images/wa.png" width="28" />
        </a>
        <a href="https://shopee.co.id/qolbeehoney" target="_blank"
          ><img src="images/shopee.png" width="28" />
        </a>
      </div>
      <div class="wrapper">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#product">Produk Kami</a>
        <a href="#contact">Kontak</a>
      </div>
      <span
        >created by
        <a href="https://www.instagram.com/khniswtya" target="_blank"
          >Khoirun Niswati Ulya</a
        >
        | © 2023</span
      >
    </footer>
    <!-- footer end -->

    <!-- search input modal start -->
    <div class="modal" data-id="searchModal">
      <div class="modal-header">
        <h3>Search Modal</h3>
        <i data-feather="x-circle" class="btn-modal-close"></i>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input
            type="text"
            class="input search-input"
            placeholder="ketikkan nama produk ..."
          />
        </div>
        <!-- product container start -->
        <div class="product-container"></div>
        <!-- product container end -->
      </div>
    </div>
    <!-- search input modal end -->

    <!-- shopping cart modal start -->
    <div class="modal" data-id="tableModal">
      <div class="modal-header">
        <h3>Shopping Cart Modal</h3>
        <i data-feather="x-circle" class="btn-modal-close"></i>
      </div>
      <div class="modal-body">
        <!-- list start -->
        <div class="box-container"></div>
        <!-- list end -->
        <div class="wrapper">
          <h4>Total Biaya :</h4>
          <span class="price">0</span>
        </div>
        <button class="button button-checkout">Checkout</button>
      </div>
    </div>
    <!-- shopping cart modal end -->

    <!-- feather icon -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="js/icon.js"></script>

    <!-- sweetalert2 js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.2/sweetalert2.min.js"></script>

    <!-- my javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
