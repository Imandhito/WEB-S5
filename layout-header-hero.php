<!-- required to include auth-with-guest-check.php -->
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>RoamRent<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#"><span>Home</span></a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.php#portfolio">Vehicles</a></li>
          <li><a class="nav-link scrollto" href="index.php#recent-blog-posts">News</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
        <?php if (strcmp($auth_role, "guest") == 0){?>
        <a class="btn-getstarted scrollto" href="login.php">Login</a>
      <?php }else{
        ?>
        <a class="btn-getstarted scrollto" href="home.php">Get Started</a>
      <?php }
      ?>


    </div>
  </header>
  <!-- End Header -->