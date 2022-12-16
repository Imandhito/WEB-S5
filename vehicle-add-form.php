<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add New Vehicle - RoamRent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php
  include 'layout-head-import-nice.php';
  include('logics/connect.php');
  include 'logics/auth-check.php';

  $sql = 'SELECT * FROM user WHERE id = ' . $_SESSION['user_id'];
  $result = $conn->query($sql);
  $data = $result->fetch_object();

  $sql_category = 'SELECT * FROM vehicle_category';
    $result_category = $conn->query($sql_category);
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
      <h1>Add a new vehicle</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item"><a href="home.php">Manage Vehicle</a></li>
          <li class="breadcrumb-item active"><a href="vehicle.php">Add</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">

        <div class="col">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Vehicle</h5>

              <!-- Vertical Form -->
              <form method="post" action="logics/vehicle-add.php" enctype="multipart/form-data">
                <form class="row g-3">
                  <div class="col-12">
                    <label for="inputName" class="form-label">Vehicle Name</label>
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                  </div>
                  <div class="col-12">
                    <label for="inputImage" class="form-label">Photo</label>
                    <input type="file" name="image" class="form-control" id="inputImage">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Passanger Capacity</label>
                    <input type="text" name="passanger" class="form-control" id="inputAddress">
                  </div>
                  <div class="col-12">
                    <label for="inputPrice" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="inputPrice">
                  </div>
                  <div class="col-12">
                    <label for="inputCountry" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" id="inputDescription">
                  </div>
                  <div class="col-12">
                    <label for="inputCountry" class="form-label">Vehicle Category</label>
                    <select id="inputState" class="form-select" name="category">
                        <?php while ($row = $result_category->fetch_assoc()) { ?>
                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="margin-top:10px;">Add</button>
                  </div>
                </form>`
              </form><!-- Vertical Form -->

            </div>
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