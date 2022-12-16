<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog Details - HeroBiz Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include_once 'logics/connect.php';
  include 'logics/auth-with-guest-check.php';
  include 'layout-head-import-hero.php';

  $temp_id = $_GET['id'];
  $sql = "SELECT *,user.name as users_name ,article_category.name as category_name, article_category.id as category_id FROM article INNER JOIN user ON article.user_id=user.id INNER JOIN article_category ON article.article_category_id = article_category.id WHERE article.id = " . $temp_id;
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
            <li><a href="blog.html">News</a></li>
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
                <img src="<?= $value->img_url ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?= $value->title ?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html"><h0><?= $value->users_name ?></h0></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
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
                <ul class="tags">
                  <li><a href="blog-tag.php?id=<?= $value->category_id ?>"><?= $value->category_name ?></a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
              <img src="assets/img/hero/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4><?= $value->users_name ?></h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div><!-- End post author -->
          <td>
            <a href="edit-blog-form.php?id='<?= $temp_id ?>'"><button class="btn btn-outline-info alert-delete-confirm">Update</button></a>
            <a href="logics/delete-blog.php?id='<?= $temp_id ?>'"><button class="btn btn-outline-danger alert-delete-confirm">Delete</button></a>
            <!-- <button onclick="deleteConfirm(<?= $row['id'] ?>)" class="btn btn-outline-danger alert-delete-confirm">Delete</button> -->
          </td>
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