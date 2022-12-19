<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Print - RoamRent</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include("layout-head-import-nice.php"); ?>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php include 'logics/connect.php';
    include 'logics/auth-check.php';

    if (strcmp($auth_role, "user") == 0) {
        header("location:home.php");
    }

    $a = $_GET['sql'];
    $result = $conn->query("SELECT * FROM user WHERE name LIKE '%$a%' OR email LIKE '%$a%' OR phone LIKE '%$a%'");
    ?>


</head>

<body class="toggle-sidebar">

    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <!-- End Sidebar-->

    <main id="main" class="main" style="margin-top:0px;">

        <div class="pagetitle">
            <div class="d-flex align-items-center justify-content-between">

                <div class="d-flex align-items-center justify-content-between">

                    <h1>
                        <span href="home.php" class="logo d-flex align-items-center">
                            RoamRent.
                        </span>
                    </h1>
                </div><!-- End Logo -->
            </div><!-- End Logo -->
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row align-items-top">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar pengguna</h5>
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1;
                                    while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <!-- <td>
                                                <a href="users-profile.php?id='<?= $row["id"] ?>'"> <?= $row["id"] ?> </a>
                                                <br>
                                            </td> -->
                                            <td>
                                                <?= $i ?>
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
                                        </tr>
                                    <?php $i++;
                                    } ?>
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
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
        window.print()
    </script>
</body>

</html>