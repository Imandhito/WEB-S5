<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php
  include('layout-head-import-nice.php');
  include('logics/connect.php');
  include 'logics/auth-check.php';

  $sql_article = 'SELECT * FROM article';
  $result_article = $conn->query($sql_article);

  $sql_user = 'SELECT * FROM user';
  $result_user = $conn->query($sql_user);
  $data = $result_user->fetch_object();
  ?>

</head>

<body class="toggle-sidebar">

  <!-- ======= Header ======= -->
  <?php include 'layout-header-nice.php'; ?>
  <!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <?php
  /* if (strcmp($data->role, "admin") == 0) {
    include('layout-sidebar-admin.php');
  } else {
    include('layout-sidebar.php');
  } */
  ?>
  <!-- End Sidebar-->

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
        <a class="nav-link collapsed" href="vehicle.php">
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

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Vehicle Being Rent <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1</h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp.700000</h6>
                      <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Users Card -->
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">User Account Count</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <?php echo ('<h6>');
                      $count_user = 1;
                      while ($row_user = $result_user->fetch_assoc()) {
                        $count_user = $count_user + 1;
                      }
                      echo ($count_user . ' User Account');
                      echo ('<h6>') ?>
                    </div>
                  </div>
                  <a href="users.php"><button class="btn btn-outline-info alert-delete-confirm">Details</button></a>
                </div>
              </div>

            </div><!-- End Users Card -->

            <!-- Article Card -->
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Article Count</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <?php echo ('<h6>');
                      $count2 = 0;
                      while ($row_article = $result_article->fetch_assoc()) {
                        $count2 = $count2 + 1;
                      }
                      echo ($count2 . ' Article Published');
                      echo ('<h6>') ?>
                    </div>
                  </div>
                  <a href="blog.php"><button class="btn btn-outline-info alert-delete-confirm">Details</button></a>
                </div>
              </div>
            </div><!-- End Article Card -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Vehicles <span>| Today</span></h5>
              <?php
              $query_vehicle_availability = "SELECT vc.name, COUNT(v.id) as total FROM vehicle v LEFT JOIN vehicle_category vc on v.vehicle_category_id = vc.id GROUP BY vc.name";
              $result_vehicle_availability = $conn->query($query_vehicle_availability);
              //$data_vehicle_availability = $result_vehicle_availability->fetch_assoc()
              ?>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [
                        <?php while ($row = $result_vehicle_availability->fetch_assoc()) {
                        ?> {
                            value: <?= $row['total'] ?>,
                            name: '<?= $row['name'] ?>'
                          },

                        <?php } ?>
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <?php
            $sql_articles = "SELECT * FROM article";
            $result_list_article = $conn->query($sql_article);
            ?>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <?php
                while ($row = $result_list_article->fetch_assoc()) {
                ?>

                  <div class="post-item clearfix">
                    <img src="assets/img/news-1.jpg" alt="">
                    <h4><a href="#"><?= $row['title'] ?></a></h4>
                    <p></p>
                    <!-- <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p> -->
                  </div>

                <?php
                }
                ?>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

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