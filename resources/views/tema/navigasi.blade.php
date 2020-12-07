  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>Siimple</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="nav-link"><a href="{{ route("home") }}">Home</a></li>
          <li class="nav-link"><a href="{{ route("about") }}">About Us</a></li>
          <li class="nav-link"><a href="{{ route("contact") }}">Contact Us</a></li>
          <li class="drop-down"><a href="">Menu</a>
            <ul>
              <li><a href="#">Makanan</a></li>
              <li><a href="#">Minuman</a>
            </ul>
            </li>
          <li class="nav-link"><a href="{{ route("loker") }}">Lowongan Kerja</a></li>
          <li class="nav-link"><a href="{{ route("pemesanan") }}">Pemesanan Tempat</a></li>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->