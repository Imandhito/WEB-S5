<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / Cards - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php
    include("layout-head-import-nice.php");
    include 'logics/connect.php';
    include 'logics/auth-check.php';

    $id=$_GET['id'];

    $sql = 'SELECT * FROM vehicle_category WHERE id = ' . $id;
    $result = $conn->query($sql);
    $value = $result->fetch_object();
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
    <a class="nav-link " href="index.html">
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
            <div class="row">
                <div class="col">
                    <h1>Daftar Kategori Kendaraan</h1>
                    <nav>
                        <p>Berbagai kategori kendaraan dapat dibuat di sini</p>
                    </nav>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <a href="vehicle.php" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Cateogory</h5>
                        <!-- <p>Highlight a table row or cell by adding a <code>.table-active</code> class.</p> -->
                        <!-- Vertical Form -->
              <form class="row g-3" action="logics/vehicle-edit.php">
                <div class="col-12">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name" placeholder="Category Name" name="name" value="<?= $value->name ?>">
                </div>
                <input name="id_category" type="hidden" value="<?= $value->id ?>" />
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'layout-footer.php'; ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Script ======= -->
    <?php include 'layout-script.php'; ?>
    <!-- End Script -->

</body>

</html>