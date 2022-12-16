<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Print - RoamRent</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/nice-style.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <?php include 'logics/connect.php';
    $a = $_GET['sql'];
    $sql = 'SELECT v.id,v.name,img_url,passanger,price,description,is_borrow,vc.name as vehicle_category FROM vehicle v LEFT JOIN vehicle_category vc ON v.vehicle_category_id = vc.id WHERE v.name LIKE "%'.$a.'%"';
    $result = $conn->query($sql);
    ?>


</head>
<body class="toggle-sidebar">

    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <!-- End Sidebar-->

    <main id="main" class="main">
    
        <div class="pagetitle">
        <div class="d-flex align-items-center justify-content-between">

<a href="home.php" class="logo d-flex align-items-center">
    <span class="d-none d-lg-block">RoamRent.</span>
</a>
</div><!-- End Logo -->
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row align-items-top">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Kendaraan</h5>
                            <!-- Default Table -->
                            <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Passanger</th>
                                    <th scope="col">Is Being Borrowed</th>
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
                                        <td><?= $row['vehicle_category'] ?></td>
                                        <td><?= $row['price'] ?></td>
                                        <td><?= $row['passanger'] ?></td>
                                        <td><?= $row['is_borrow'] ?></td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table><!-- End Default Table Example -->
                        </div>
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



    <script>
        function deleteConfirm(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Delete'
            }).then((result) => {
                if (result.isConfirmed) {
                    //Swal.fire("Cancelled", "Your imaginary file is safe :)", "error");
                    $.ajax({
                        url: 'delete.php',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        dataType: 'php',
                        success: function(response) {
                            /* ini error delete */
                            Swal.fire('Oops...', 'Something went wrong with ajax!', 'error');
                        },
                        error: function() {
                            /* ini success delete */
                            Swal.fire('Deleted!', "Successfully Deleted", "success").then(function() {
                                window.location = "users.php";
                            });

                        }
                    })
                    // .done(function(response){
                    //     swal.fire('Deleted!', "Successfully Deleted", "success").then(function() {
                    //         window.location = "index.php";
                    //     });
                    // })
                    // .fail(function(){
                    //     swal.fire('Oops...', 'Something went wrong with ajax!', 'error');
                    // });


                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swal.fire('Canceled', 'Your data is safe', 'info');
                }
            });
        }
    </script>
</body>

</html>