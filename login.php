<!DOCTYPE html>
<html lang="en">

<?php
if (isset($_SESSION["user_id"])) {
  session_start();
  header("location:index.php");
}
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - RoamRent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Get template styles nice -->
  <?php include('layout-head-import-nice.php'); ?>

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto justify-content-center">
                  <img src="assets/img/Main-logo.png" alt="" width="20%">
                  <span class="d-none d-lg-block">RoamRent</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <form method="post" action="logics/login.php">
                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                      <p class="text-center small">Masukkan E-mail dan Password</p>
                    </div>

                    <form class="row g-3 needs-validation" novalidate>

                      <div class="col-12">
                        <label for="yourUsername" class="form-label">E-mail</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="text" name="email" class="form-control" id="yourUsername" required>
                          <div class="invalid-feedback">Please enter your E-mail.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                      </div>

                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                          <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Login</button>
                      </div>
                      <div class="col-12">
                        <p class="small mb-0">Don't have account? <a href="register.html">Create an account</a></p>
                      </div>
                    </form>

                  </div>
                </form>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="#">UMC</a>
              </div>


            </div>
          </div>
        </div>

      </section>
    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- ======= Script ======= -->
  <?php include('layout-script.php'); ?>
  <!-- End Script -->

</body>

</html>