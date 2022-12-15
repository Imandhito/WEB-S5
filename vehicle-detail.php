<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Cards - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include_once 'logics/connect.php'; 
  include('layout-head-import-nice.php');
  include 'logics/auth-check.php';

  $temp_id = $_GET['id'];
  $sql = "SELECT * FROM vehicle WHERE id = ".$temp_id;
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
  <h1><?= $value->name; ?></h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        

              <!-- Default Accordion -->
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <strong>Produk</strong>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body align-items-center">
                      <img src="assets/img/vehicles/<?= $value->img_url ?>" class="img-responsive rounded-start" alt="...">
                      <div class="content align-items-center">
                        <?= $value->description ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Spesifikasi
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="card mb-3">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="assets/img/vehicles/<?= $value->img_url ?>" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"><?= $value->name; ?></h5>
                              <ul class="list-group">
                                <!-- <li class="list-group-item">
                                  <i class="ri-gas-station-line text-warning"></i>
                                  EV, Max 100 kWh
                                </li> -->
                                <li class="list-group-item">
                                  <i class="bi bi-people text-primary"></i>
                                  <?= $value->passanger ?> Orang
                                </li>
                                <!-- <li class="list-group-item">
                                  <i class="ri-equalizer-line me-1 text-success"></i>
                                  AC, Radio, GPS, Small Cargo
                                </li> -->
                                <li class="list-group-item">
                                  <i class="bx bxs-purchase-tag text-danger"></i>
                                  Rp <?= $value->price ?>/hari
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Pesan
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Pastikan anda telah membaca dan menyetujui aturan yang ada dan selalu mematuhi segala peraturan yang ada!.</strong>
                      <a href="item_detail.html" class="active">
                        <button type="button" class="btn btn-primary">
                          <i class="bi bi-tags me-1"></i>
                          Sewa
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div><!-- End Default Accordion Example -->


        
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