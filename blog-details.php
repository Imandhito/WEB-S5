<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail News - RoamRent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include_once 'logics/connect.php';
  include 'logics/auth-with-guest-check.php';
  include 'layout-head-import-hero.php';

  $temp_id = $_GET['id'];
  $sql = "SELECT a.id, title, text, a.img_url, ac.name as category, article_category_id, u.name as author, u.role, u.email, u.job, u.about, u.profile_picture, u.twitter FROM article a INNER JOIN user u ON a.user_id=u.id INNER JOIN article_category ac ON a.article_category_id = ac.id WHERE a.id = $temp_id";
  $result = $conn->query($sql);
  $value = $result->fetch_object();
  ?>
</head>

<body>

<!-- ======= Header ======= -->
<?php include 'layout-header-hero.php' ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our News</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">News</a></li>
            <li>Read News</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-12">

            <article class="blog-details">

              <div class="post-img">
                <img src="assets/img/hero/blog/<?= $value->img_url ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?= $value->title ?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog.php?search=<?= $value->author ?>"><h0><?= $value->author ?></h0></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li> -->
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                  <?= $value->text ?>
                </p>

              </div><!-- End post content -->

              <div class="meta-bottom">
                
                <i class="bi bi-tags"></i>
                <ul class="cats">
                  <li><a href="blog.php?search=<?= $value->category ?>"><?= $value->category ?></a></li>
                </ul>

                
              </div><!-- End meta bottom -->

              <div class="text-end">
            <a href="edit-blog-form.php?id='<?= $temp_id ?>'"><button class="btn btn-outline-info alert-delete-confirm">Update</button></a>
            <a href="logics/delete-blog.php?id='<?= $temp_id ?>'"><button class="btn btn-outline-danger alert-delete-confirm">Delete</button></a>
            <!-- <button onclick="deleteConfirm(<?= $row['id'] ?>)" class="btn btn-outline-danger alert-delete-confirm">Delete</button> -->
</div>

            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
            <?php if (empty($value->profile_picture)) { ?>
                        <img src="assets/img/profile-img.jpg" class="rounded-circle flex-shrink-0" alt="">
                    <?php } else { ?>
                        <img src="logics/photo/<?= $value->profile_picture ?>" class="rounded-circle flex-shrink-0" alt="">
                    <?php } ?>
              <div>
                <h4><?= $value->author ?></h4>
                <div class="social-links">
                  <a href="https://twitter.com/<?= $value->twitter ?>"><i class="bi bi-twitter"></i></a>
                  <!-- <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a> -->
                </div>
                <p>
                  <?= $value->about ?>
                </p>
              </div>
            </div><!-- End post author -->
          </div>


        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'layout-footer-hero.php';  ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <?php include 'layout-script-hero.php'; ?>

</body>

</html>