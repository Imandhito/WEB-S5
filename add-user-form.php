<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add User - RoamRent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php
  include('logics/connect.php');
   include("layout-head-import-nice.php");
  include('logics/auth-check.php');

  session_start();
  if (!isset($_SESSION['user_id'])) {
    header("location:login.php");
  }

  $sql = 'SELECT * FROM user WHERE id = ' . $_SESSION['user_id'];
  $result = $conn->query($sql);
  $data = $result->fetch_object();
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
    <a class="nav-link collapsed" href="home.php">
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
    <a class="nav-link " href="users.php">
      <i class="bi bi-person"></i>
      <span>Users</span>
    </a>
  </li><!-- End Users Nav -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="blog.html">
      <i class="bi bi-grid"></i>
      <span>News</span>
    </a>
  </li><!-- End News Nav -->

</ul>

</aside>
<!-- End Sidebar-->
 

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add a new user</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item"><a href="users.php">Users</a></li>
          <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">

        <div class="col-12 mb-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add User</h5>

              <!-- Vertical Form -->
            <form method="post" action="logics/add-user.php">
                <div class="row g-3">
                    <div class="col-12">
                    <label for="inputName" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="inputName">
                    </div>
                    <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="col-12">
                    <label for="inputAddress" class="form-label">Nomor telepon</label>
                    <input type="text" name="phone" class="form-control" id="inputAddress" >
                    </div>
                    <div class="col-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="col-12 mb-6">
                    <label for="inputCountry" class="form-label">Country</label>
                    <input type="text" name="Country" class="form-control" id="inputCountry">
                    </div>
                    <div class="text-center" style="margin-top:12px;">
                    <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>`
</div><!-- Vertical Form -->

            </div>
          </div>

          


        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>