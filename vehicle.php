<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vehicles - RoamRent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php
  include("layout-head-import-nice.php");
  include 'logics/connect.php';
  include 'logics/auth-check.php';

  $sql = 'SELECT * FROM vehicle';
  $result = $conn->query($sql);
  ?>
</head>

<body>

<!-- ======= Header ======= -->
  <?php include 'layout-header-nice.php'; ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="home.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Home Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="vehicle.php">
          <i class="bi bi-menu-button-wide"></i>
          <span>Vehicles</span>
        </a>
      </li><!-- End Vehicles Nav -->

      <?php
  if (strcmp($auth_role, "admin") == 0) {
    ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="vehicle-category.php">
          <i class="bi bi-menu-button-wide"></i>
          <span>Vehicles Category</span>
        </a>
      </li><!-- End Vehicles Nav -->
    <?php
  }
  ?>
      

      <li class="nav-item">
        <a class="nav-link collapsed" href="users.php">
          <i class="bi bi-person"></i>
          <span>Users</span>
        </a>
      </li><!-- End Users Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="blog.php">
          <i class="bi bi-grid"></i>
          <span>News</span>
        </a>
      </li><!-- End News Nav -->

    </ul>

  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <div class="row">
        <div class="col">
        <h1>Daftar Kendaraan</h1>
      <nav>
        <p>Berbagai kendaraan pilihan dari kami</p>
      </nav>
        </div>
        <?php
  if (strcmp($auth_role, "admin") == 0) {
    ?>
    <div class="col-2 d-flex justify-content-end align-items-center">
          <a href="vehicle-manage.php" class="btn btn-primary">Manage</a>
        </div>
    <?php
  }
  ?>
        
      </div>
    </div>
    <!-- End Page Title -->
    <section class="section">
      <div class="row align-items-top">
        <div class="col">

          <?php
          while ($row = $result->fetch_assoc()) {
          ?>
            <!-- Card with an image on left -->

            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/img/vehicles/<?= $row['img_url'] ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?= $row['name'] ?></h5>
                    <ul class="list-group mb-2">
                      <!-- <li class="list-group-item">
                      <i class="ri-gas-station-line text-warning"></i>
                      Petrol, Max 15 Liter
                    </li> -->
                      <li class="list-group-item">
                        <i class="bi bi-people text-primary"></i>
                        <?= $row['passanger'] ?> Orang
                      </li>
                      <!-- <li class="list-group-item">
                        <i class="ri-equalizer-line me-1 text-success"></i>
                        AC, Radio, GPS, MEdium Cargo
                      </li> -->
                      <li class="list-group-item">
                        <i class="bx bxs-purchase-tag text-danger"></i>
                        Rp <?= $row['price'] ?>/hari
                      </li>
                    </ul>
                    <a href="vehicle-detail.php?id=<?= $row['id'] ?>" class="active">
                      <button type="button" class="btn btn-primary">
                        <i class="bi bi-eye me-1"></i>
                        Detail
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>


        </div>

      </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('layout-footer.php'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- ======= Script ======= -->
  <?php include('layout-script.php'); ?>
  <!-- End Script -->

</body>

</html>