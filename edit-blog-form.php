<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php
  include 'layout-head-import-nice.php';
  include('logics/connect.php');
  include 'logics/auth-check.php';

  $sql = 'SELECT * FROM article WHERE id = ' . $_GET['id'];
  $result = $conn->query($sql);
  $data = $result->fetch_object();

  $sql_category = 'SELECT * FROM article_category';
    $result_category = $conn->query($sql_category);
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
      <h1>Edit vehicle</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item"><a href="home.php">Manage Vehicle</a></li>
          <li class="breadcrumb-item active"><a href="vehicle.php">Edit</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">

        <div class="col">

        
        <div class="card">
          <img src="assets/img/hero/blog/<?= $data->img_url ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Change Article Photo</h5>

              <!-- Vertical Form -->
              <form method="post" action="logics/blog-edit-photo.php" enctype="multipart/form-data">
                <form class="row g-3">
                  <div class="col-12">
                    <label for="inputImage" class="form-label">Photo</label>
                    <input type="file" name="image" class="form-control" id="inputImage">
                  </div>
                    <input name="id_article" type="hidden" value="<?= $data->id ?>" />
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="margin-top:10px;">Submit</button>
                  </div>
                </form>`
              </form><!-- Vertical Form -->

            </div>
          </div>


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Article</h5>

              <!-- Vertical Form -->
              <form method="post" action="logics/blog-edit.php" enctype="multipart/form-data">
                <form class="row g-3">
                  <div class="col-12">
                    <label for="inputTitle" class="form-label">Article Title</label>
                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title" value="<?= $data->title ?>">
                  </div>
                  <div class="col-12">
                    <label for="inputText" class="form-label">Article Text</label>
                    <input type="text" name="text" class="form-control" id="inputText" placeholder="Text" value="<?= $data->text ?>">
                  </div>
                    <input name="id_article" type="hidden" value="<?= $data->id ?>" />
                  <div class="col-12">
                    <label for="inputCategory" class="form-label">Article Category</label>
                    <select id="inputState" class="form-select" name="category">
                        <?php while ($row = $result_category->fetch_assoc()) { ?>
                        <option value="<?= $row['id'] ?>" <?php if ($data->article_category_id == $row['id']) {
                                echo "selected";
                            } ?>><?= $row['name'] ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="margin-top:10px;">Submit</button>
                  </div>
                </form>`
              </form><!-- Vertical Form -->

            </div>
          </div>



        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'layout-footer.php'; ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- ======= Script ======= -->
  <?php include 'layout-script.php'; ?>
  <!-- End Script -->

</body>

</html>