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

    $sql = 'SELECT * FROM vehicle_category';
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
    <a class="nav-link collapsed" href="vehicle=category.php">
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
                    <h1>Daftar Kendaraan</h1>
                    <nav>
                        <p>Berbagai kendaraan pilihan dari kami</p>
                    </nav>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <a href="vehicle.php" class="btn btn-primary">View</a>
                </div>
            </div>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Vehicle</h5>
                        <!-- <p>Highlight a table row or cell by adding a <code>.table-active</code> class.</p> -->
                        <!-- Default Table -->
                        <table class="table col">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $row['name'] ?></td>
                                        <td>
                                            <a href="vehicle-category-edit.php?id='<?= $row["id"] ?>'"><button class="btn btn-outline-info alert-delete-confirm">Update</button></a>
                                            <a href="logics/vehicle-category-delete.php?id='<?= $row["id"] ?>'"><button class="btn btn-outline-danger alert-delete-confirm">Delete</button></a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
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