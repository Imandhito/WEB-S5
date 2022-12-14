<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>News Categories - RoamRent</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php
    include("layout-head-import-nice.php");
    include 'logics/connect.php';
    include 'logics/auth-check.php';

    $sql = 'SELECT * FROM article_category';
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

  <li class="nav-item">
    <a class="nav-link" href="blog-category.php">
      <i class="bi bi-grid"></i>
      <span>Category</span>
    </a>
  </li><!-- End News Nav -->
</ul>

</aside>
<!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <div class="row">
                <div class="col">
                    <h1>Manage News Category</h1>
                    <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active">News Categories</li>
        </ol>
      </nav>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <a href="blog-category-add.php" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">List Categories</h5>
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
                                            <a href="blog-category-edit.php?id='<?= $row["id"] ?>'"><button class="btn btn-outline-info alert-delete-confirm">Update</button></a>
                                            <a href="logics/blog-category-delete.php?id='<?= $row["id"] ?>'"><button class="btn btn-outline-danger alert-delete-confirm">Delete</button></a>
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