<!-- required to include auth-check.php -->
<header id=" header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">

        <a href="home.php" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block">RoamRent.</span>
        </a>

        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <?php if (empty($auth_photo)) { ?>
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <?php } else { ?>
                        <img src="logics/photo/<?= $auth_photo ?>" alt="Profile" class="rounded-circle">
                    <?php } ?>
                    <span class="d-none d-md-block dropdown-toggle ps-2"><?= $auth_name ?></span>
                </a><!-- End Profile Iamge Icon -->
                <!-- assets/img/profile-img.jpg -->
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6><?= $auth_name ?></h6>
                        <span><?= $auth_job ?></span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="logics/logout.php">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>