<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>News - RoamRent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php
  include_once 'logics/connect.php';
  include 'logics/auth-with-guest-check.php';
  include 'layout-head-import-hero.php';

  $sql_article_category = "SELECT * FROM article_category";
  $result_article_category = $conn->query($sql_article_category);

  $sql_recent = "SELECT *,article.id as article_id ,user.name as author , article_category.name as category_name, article_category.id as category_id FROM article INNER JOIN user ON article.user_id=user.id INNER JOIN article_category ON article.article_category_id = article_category.id ORDER BY article.id DESC LIMIT 5";
  $result_recent = $conn->query($sql_recent);


  $batas = 2;
  $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
  $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

  $previous = $halaman - 1;
  $next = $halaman + 1;



  $a = !empty($_GET["search"]) ? $_GET["search"] : '';
  $result_article = $conn->query("SELECT a.id, title, text, a.img_url, ac.name as category, article_category_id, u.name as author, u.role, u.email, u.job, u.about, u.profile_picture, u.twitter FROM article a INNER JOIN user u ON a.user_id=u.id INNER JOIN article_category ac ON a.article_category_id = ac.id WHERE u.name LIKE '%$a%' OR title LIKE '%$a%' ORDER BY a.id DESC LIMIT $halaman_awal, $batas");

  $data = $conn->query("SELECT a.id, title, text, a.img_url, ac.name as category, article_category_id, u.name as author, u.role, u.email, u.job, u.about, u.profile_picture, u.twitter FROM article a INNER JOIN user u ON a.user_id=u.id INNER JOIN article_category ac ON a.article_category_id = ac.id WHERE u.name LIKE '%$a%' OR title LIKE '%$a%' ORDER BY a.id DESC");
  $jumlah_data = mysqli_num_rows($data);
  $total_halaman = ceil($jumlah_data / $batas);

  $nomor = $halaman_awal + 1;
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
          <h2>Blog</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">

              <!-- START WHILE -->
              <?php while ($row = $result_article->fetch_assoc()) {
              ?>

                <div class="col-lg-6">
                  <article class="d-flex flex-column">

                    <div class="post-img">
                      <img src="assets/img/hero/blog/<?= $row['img_url'] ?>" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">
                      <a href="blog-details.html"><?= $row['title'] ?></a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html"><?= $row['author'] ?></a></li>
                        <!-- <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
                      </ul>
                    </div>

                    <!-- <div class="content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                    </p>
                  </div> -->

                    <div class="read-more mt-auto align-self-end">
                      <a href="blog-details.php?id=<?= $row['id'] ?>"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>

                  </article>
                </div><!-- End post list item -->

              <?php } ?>
              <!-- END WHILE -->
            </div>
            <!-- End blog posts list -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
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
            </div><!-- End blog pagination -->


          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <a href="add-blog-form.php" class="btn btn-primary"><i class="bi bi-plus-lg"></i>Write New Article</a>
              </div><!-- End add button-->


              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get" class="mt-3">
                  <input type="text" name="search" value="<?= $a ?>">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <?php while ($row = $result_article_category->fetch_assoc()) {
                  ?>
                    <li><a href="#"><?= $row['name'] ?>
                        <!-- <span>(25)</span> -->
                      </a></li>
                  <?php } ?>
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">
                  <?php while ($row = $result_recent->fetch_assoc()) {
                  ?>

                    <div class="post-item mt-3">
                      <img src="assets/img/hero/blog/<?= $row['img_url'] ?>" alt="" class="flex-shrink-0">
                      <div>
                        <h4><a href="blog-details.php?id=<?= $row['article_id'] ?>"><?= $row['title'] ?></a></h4>
                        <!-- <time datetime="2020-01-01">Jan 1, 2020</time> -->
                      </div>
                    </div><!-- End recent post item-->

                  <?php } ?>

                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'layout-footer-hero.php';  ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <?php include 'layout-script-hero.php'; ?>

</body>

</html>