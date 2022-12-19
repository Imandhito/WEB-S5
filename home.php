<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home - RoamRent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php
  include('layout-head-import-nice.php');
  include('logics/connect.php');
  include 'logics/auth-check.php';

  $sql_article = 'SELECT * FROM article ORDER BY id DESC LIMIT 5';
  $result_article = $conn->query($sql_article);

  $sql_count_article = "SELECT COUNT(id) as total FROM article";
  $result_count_article = $conn->query($sql_count_article);
  $data_count_article = $result_count_article->fetch_object();

  $sql_user = 'SELECT COUNT(id) as total FROM user';
  $result_user = $conn->query($sql_user);
  $data_count_user = $result_user->fetch_object();

  $sql_vehicle = 'SELECT COUNT(id) as total FROM vehicle WHERE is_borrow = 1';
  $result_vehicle = $conn->query($sql_vehicle);
  $data_count_vehicle = $result_vehicle->fetch_object();

  $sql_vehicle_category = 'SELECT * FROM vehicle_category';
  $result_vehicle_category = $conn->query($sql_vehicle_category);

  $sql_vehicle_not_borrow_count = 'SELECT vc.id, COUNT(v.id) as total, vc.name as category FROM vehicle v RIGHT JOIN vehicle_category vc ON v.vehicle_category_id = vc.id WHERE v.is_borrow = 0 GROUP BY category ORDER BY vc.id';
  $result_vehicle_not_borrow_count = $conn->query($sql_vehicle_not_borrow_count);

  $sql_vehicle_borrow_count = 'SELECT vc.id, COUNT(v.id) as total, vc.name as category FROM vehicle v RIGHT JOIN vehicle_category vc ON v.vehicle_category_id = vc.id WHERE v.is_borrow = 1 GROUP BY category ORDER BY vc.id';
  $result_vehicle_borrow_count = $conn->query($sql_vehicle_borrow_count);

  $sql_monthly_income = "SELECT created_at, date_format(created_at,'%b') as month, SUM(amount) as sale FROM `money` WHERE is_income = true GROUP BY month ORDER BY created_at";
  $result_monthly_income = $conn->query($sql_monthly_income);

  $sql_monthly_spending = "SELECT created_at, date_format(created_at,'%b') as month, SUM(amount) as sale FROM `money` WHERE is_income = false GROUP BY month ORDER BY created_at";
  $result_monthly_spending = $conn->query($sql_monthly_spending);

  $sql_monthly = "SELECT created_at, date_format(created_at,'%b') as month FROM money GROUP BY month ORDER BY created_at";
  $result_monthly = $conn->query($sql_monthly);

  $sql_revenue = "SELECT date_format(created_at,'%b') as month, SUM(amount - (SELECT SUM(amount) as value FROM money WHERE date_format(current_date()	,'%b') = date_format(created_at,'%b') AND is_income = FALSE)) as value FROM money WHERE date_format(current_date()	,'%b') = date_format(created_at,'%b') AND is_income = true";
  $result_revenue = $conn->query($sql_revenue);
  $data_revenue = $result_revenue->fetch_object();
  ?>

</head>

<body class="toggle-sidebar">

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

      <li class="nav-item">
        <a class="nav-link collapsed" href="blog-category.php">
          <i class="bi bi-grid"></i>
          <span>Category</span>
        </a>
      </li><!-- End News Nav -->
    </ul>

  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
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

                <div class="card-body">
                  <h5 class="card-title">Vehicle Being Rent <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $data_count_vehicle->total ?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp.<?= $data_revenue->value ?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Users Card -->
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">User Account Count</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $data_count_user->total ?> User Account</h6>
                    </div>
                  </div>
                  <a href="users.php"><button class="btn btn-outline-info alert-delete-confirm">Details</button></a>
                </div>
              </div>

            </div><!-- End Users Card -->

            <!-- Article Card -->
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Article Count</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $data_count_article->total ?> Article Published</h6>
                    </div>
                  </div>
                  <a href="blog.php"><button class="btn btn-outline-info alert-delete-confirm">Details</button></a>
                </div>
              </div>
            </div><!-- End Article Card -->

            <!-- Reports -->
            <div class="col-12">
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

                <div class="card-body">
                  <h5 class="card-title">Reports <span>| Monthly</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Income',
                          data: [
                            <?php while ($row = $result_monthly_income->fetch_assoc()) { ?>
                              <?= $row['sale'] ?>,
                            <?php } ?>
                          ],
                        }, {
                          name: 'Spending',
                          data: [
                            <?php while ($row = $result_monthly_spending->fetch_assoc()) { ?>
                              <?= $row['sale'] ?>,
                            <?php } ?>
                          ]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          categories: [
                            <?php while ($row = $result_monthly->fetch_assoc()) { ?>
                              "<?php echo $row['month']; ?>",
                            <?php } ?>
                          ]
                        }
                        /* tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        } */
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div>
            <!-- End Reports -->


            <!-- Reports -->
            <div class="col-12">
              <div class="card">


                <div class="card-body">
                  <h5 class="card-title">Vehicles Status</h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>
                  <!-- Vertical Bar Chart -->
                  <div id="chart_status_vehicle" style="min-height: 400px;" class="echart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      echarts.init(document.querySelector("#chart_status_vehicle")).setOption({
                        /* title: {
                          text: 'Status Vehicle'
                        }, */
                        tooltip: {
                          trigger: 'axis',
                          axisPointer: {
                            type: 'shadow'
                          }
                        },
                        legend: {},
                        grid: {
                          left: '3%',
                          right: '4%',
                          bottom: '3%',
                          containLabel: true
                        },
                        xAxis: {
                          type: 'value',
                          boundaryGap: [0, 0.01]
                        },
                        yAxis: {
                          type: 'category',
                          data: [
                            <?php while ($row = $result_vehicle_category->fetch_assoc()) {
                        ?> 
                            '<?= $row['name'] ?>',

                        <?php } ?>
                          ]
                        },
                        series: [{
                            name: 'Being Rented',
                            type: 'bar',
                            data: [
                              <?php while ($row = $result_vehicle_borrow_count->fetch_assoc()) {
                        ?> 
                            <?= $row['total'] ?>,

                        <?php } ?>
                            ]
                          },
                          {
                            name: 'Available',
                            type: 'bar',
                            data: [
                              <?php while ($row = $result_vehicle_not_borrow_count->fetch_assoc()) {
                        ?> 
                            <?= $row['total'] ?>,

                        <?php } ?>
                            ]
                          }
                        ]
                      });
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div>
            <!-- End Reports -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Website Traffic -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">Vehicles <span>| Arsenal</span></h5>
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

            <?php
            $sql_articles = "SELECT * FROM article";
            $result_list_article = $conn->query($sql_article);
            ?>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Recently</span></h5>

              <div class="news">
                <?php
                while ($row = $result_list_article->fetch_assoc()) {
                ?>

                  <div class="post-item clearfix mb-4">
                    <img src="assets/img/hero/blog/<?= $row['img_url'] ?>" alt="">
                    <h4><a href="blog-details.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></h4>
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