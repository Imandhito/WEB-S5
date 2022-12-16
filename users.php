<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users - RoamRent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <?php include 'logics/connect.php';
  include('layout-head-import-nice.php');
  include 'logics/auth-check.php';

  $batas = 4;
  $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
  $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

  $previous = $halaman - 1;
  $next = $halaman + 1;

  if (!empty($_GET)) {
    $a = $_GET["search"];
    $sql = "SELECT * FROM user WHERE name LIKE '%$a%' OR email LIKE '%$a%' OR phone LIKE '%$a%' LIMIT $halaman_awal, $batas";
    $result = $conn->query($sql);
  } else {
    $a = '';
    $sql = "SELECT * FROM user LIMIT $halaman_awal, $batas";
    $result = $conn->query($sql);
  }

  $data = $conn->query("SELECT * FROM user WHERE name LIKE '%$a%' OR email LIKE '%$a%' OR phone LIKE '%$a%'");
  $jumlah_data = mysqli_num_rows($data);
  $total_halaman = ceil($jumlah_data / $batas);

  $nomor = $halaman_awal + 1;

  if (strcmp($auth_role, "user") == 0) {
    header("location:home.php");
  }
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
      <h1>Daftar pengguna</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>

        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row align-items-top">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">List users</h5>

              <div class="row mb-3">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
                  <div class="row col-12 mb-2">

                    <div class="col">
                      <input type="text" id="live_search" name="search" placeholder="Search" class="form-control" title="Enter search keyword">
                    </div>
                    <div class="col-1 d-flex justify-content-end align-items-center">
                      <button type="submit" class="btn btn-primary">Search</button>
                    </div>


                  </div>
                </form>

                <div class="row col-12">
                  <div class="col-6">
                    <a href="add-user-form.php"><button class="btn btn-dark">Add user</button></a>
                  </div>
                  <div class="col-6 d-flex justify-content-end">
                    <a href='user-print.php?sql=<?= $a ?>'><button class="btn btn-info">Print</button></a>
                  </div>
                </div>

              </div>
              <div id="table-data">
                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php while ($row = $result->fetch_assoc()) { ?>
                      <tr>
                        <td>
                          <?= $nomor ?>
                        </td>
                        <td>
                          <?= $row["name"] ?>
                        </td>
                        <td>
                          <?= $row["email"] ?>
                        </td>
                        <td>
                          <?= $row["phone"] ?>
                        </td>
                        <td>
                          <a href="edit-user-form.php?id='<?= $row["id"] ?>'"><button class="btn btn-outline-info alert-delete-confirm">Update</button></a>
                          <a href="logics/delete.php?id='<?= $row["id"] ?>'"><button class="btn btn-outline-danger alert-delete-confirm">Delete</button></a>
                          <!-- <button onclick="deleteConfirm(<?= $row['id'] ?>)" class="btn btn-outline-danger alert-delete-confirm">Delete</button> -->
                        </td>
                      </tr>
                    <?php $nomor++;
                    } ?>
                  </tbody>
                </table>
              </div>
              <!-- End Default Table Example -->

              <nav aria-label="...">
                <ul class="pagination">
                  <li class="page-item <?php if ($halaman <= 1) {
                                          echo "disabled";
                                        } ?>">
                    <a class="page-link" <?php if ($halaman > 1) {
                                            echo "href='?halaman=$previous&search=$a'";
                                          } else {
                                            echo "aria-disabled='true'";
                                          } ?> tabindex="-1">Previous</a>
                  </li>
                  <?php
                  for ($x = 1; $x <= $total_halaman; $x++) {
                    $current_page = $halaman == $x
                  ?>
                    <li class="page-item <?= $current_page ? "active" : "" ?>" <?= $current_page ? 'aria-current="page"' : '' ?>><a class="page-link" href="?halaman=<?= $x ?>&search=<?= $a ?>"><?php echo $x; ?></a></li>
                  <?php
                  }
                  ?>
                  <li class="page-item <?php if ($halaman >=  $total_halaman) {
                                          echo "disabled";
                                        } ?>">
                    <a class="page-link" <?php if ($halaman < $total_halaman) {
                                            echo "href='?halaman=$next&search=$a'";
                                          } ?>>Next</a>
                  </li>
                </ul>
              </nav><!-- End Disabled and active states -->

            </div>
          </div>

        </div>

      </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('layout-footer.php'); ?>
  <!-- End Footer -->

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



  <script type="text/javascript">
    $(document).ready(function() {
      $("#live_search").keyup(fucntion() {
        var search = $(this).val();
        $.ajax({
          url: 'livesearch.php',
          method: 'post',
          data: {
            query: search
          },
          success: function(response) {
            $("$table-data").html(response);
          }
        })

      });
    });

    // function deleteConfirm(id) {
    //   Swal.fire({
    //     title: "Are you sure?",
    //     text: "Once deleted, you will not be able to recover this imaginary file!",
    //     icon: "warning",
    //     showCancelButton: true,
    //     confirmButtonText: 'Delete'
    //   }).then((result) => {
    //     if (result.isConfirmed) {
    //       //Swal.fire("Cancelled", "Your imaginary file is safe :)", "error");
    //       $.ajax({
    //         url: 'delete.php',
    //         type: 'POST',
    //         data: {
    //           id: id
    //         },
    //         dataType: 'php',
    //         success: function(response) {
    //           /* ini error delete */
    //           Swal.fire('Oops...', 'Something went wrong with ajax!', 'error');
    //         },
    //         error: function() {
    //           /* ini success delete */
    //           Swal.fire('Deleted!', "Successfully Deleted", "success").then(function() {
    //             window.location = "users.php";
    //           });

    //         }
    //       })
    //       // .done(function(response){
    //       //     swal.fire('Deleted!', "Successfully Deleted", "success").then(function() {
    //       //         window.location = "index.php";
    //       //     });
    //       // })
    //       // .fail(function(){
    //       //     swal.fire('Oops...', 'Something went wrong with ajax!', 'error');
    //       // });


    //     } else if (result.dismiss === Swal.DismissReason.cancel) {
    //       swal.fire('Canceled', 'Your data is safe', 'info');
    //     }
    //   });

    // }
  </script>
</body>

</html>