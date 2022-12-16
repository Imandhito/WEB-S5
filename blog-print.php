<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Print News - RoamRent</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <?php include("layout-head-import-nice.php");
    include 'logics/connect.php';
    include 'logics/auth-check.php';

    if (strcmp($auth_role, "user") == 0) {
        header("location:home.php");
    }

    $a = $_GET['sql'];
    $sql = "SELECT a.id, title, text, a.img_url, ac.name as category, article_category_id, u.name as author, u.role, u.email, u.job, u.about, u.profile_picture, u.twitter FROM article a INNER JOIN user u ON a.user_id=u.id INNER JOIN article_category ac ON a.article_category_id = ac.id WHERE u.name LIKE '%$a%' OR title LIKE '%$a%' ORDER BY a.id DESC";
    $result = $conn->query($sql);
    ?>


</head>

<body class="toggle-sidebar">

    <main id="main" class="main" style="margin-top:0px;">

        <div class="pagetitle">
            <div class="d-flex align-items-center justify-content-between">

                <h1>
                    <span href="home.php" class="logo d-flex align-items-center">
                        RoamRent.
                    </span>
                </h1>
            </div><!-- End Logo -->
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row align-items-top">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Artikel</h5>
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i ?></th>
                                            <td class="w-25">
                                                <img src="assets/img/hero/blog/<?= $row['img_url'] ?>"
                                                class = "img-fluid img-thumbnail">
                                            </td>
                                            <td><?= $row['author'] ?></td>
                                            <td><?= $row['title'] ?></td>
                                            <td><?= $row['category'] ?></td>
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
  <?php include('layout-footer.php'); ?>
  <!-- End Footer -->

    <!-- ======= Script ======= -->
  <?php include('layout-script.php'); ?>
  <!-- End Script -->



    
</body>

</html>