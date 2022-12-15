<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RoamRent - Jasa Rental Kendaraan Darat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php
  include_once 'logics/connect.php';
  include "layout-head-import-hero.php";
  $sql = "SELECT * FROM vehicle";
  $sql_article = "SELECT * FROM article";
  $result = $conn->query($sql);
  $result_article = $conn->query($sql_article);
  ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>RoamRent<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li>
            <a href="#"><span>Home</span></a>
            <!--<ul>
              <li><a href="index.html">Home 1 - index.html</a></li>
              <li><a href="index-2.html">Home 2 - index-2.html</a></li>
              <li><a href="index-3.html" class="active">Home 3 - index-3.html</a></li>
              <li><a href="index-4.html">Home 4 - index-4.html</a></li>
            </ul>-->
          </li>

          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html#portfolio">Vehicles</a></li>
          <!--<li><a class="nav-link scrollto" href="index.html#team">Team</a></li>-->
          <li><a class="nav-link scrollto" href="index.html#recent-blog-posts">News</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="login.php">Login</a>

    </div>
  </header><!-- End Header -->

  <section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
      <h2>Selamat Datang di <span>RoamRent</span></h2>
      <p>Perjalanan ke mana pun ditemani oleh kendaraan kami dengan harga terjangkau.</p>
      <div class="d-flex">
        <a href="home.php" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>
            Layanan rental kendaraan dengan berbagai macam pilihan kendaraan darat.
            <!--Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.-->
          </p>
        </div>

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="assets/img/hero/about.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">Bersama kami, layanan rental kendaraan darat no.1 kelas internasional</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Harga Terjangkau</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Bersih dan Aman</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Flexible</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">

                <p class="fst-italic">
                  Kualitas pelayananan dan kendaraan yang kami sediakan adalah yang hanya terpilih saja. Namun, harga kami juga sangat terjangkau apabila Anda tepat dalam memilih dan mengikuti selalu perkembangan kami.
                </p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Semua harga akan ditampilkan langsung tanpa ada harga tambahan dibelakang.</h4>
                </div>
                <p>Kami tidak akan menagih Anda lagi di luar harga yang sudah ditampilkan di aplikasi kami. Karena demi kenyamanan Anda, harga yang telah kami keluarkan sudah termasuk pajak, ansuransi, dan layanan kualitas premium kami.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Dapat memilih pembayaran sesuka hati sesuai dengan kemampuan dan ketertarikan Anda.</h4>
                </div>
                <p>Kami menyediaka berbagai macam opsi pilihan penyewaan. Di mana setiap pilihan akan mempengaruhi total harga layanan kami. Sehingga Anda bisa menyesuaikan dengan sesuka hati seusai dengan keinginan hati Anda</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Beragam macam pilihan kendaraan lama sampai yang terbaru</h4>
                </div>
                <p>Demi pelanggan yang ingin bernostalgia dengan kendaraan zaman dahulu kala, kami juga menyediakannya dengan kualitas dan kebersihan seperti baru. Dengan banyaknya pilihan kendaraan pun, harga menjadi sangat bervariatif. Sehingga cocok bagi Anda yang mencari kendaraan murah untuk menjaga dompet Anda agar tidak berlubang terlalu dalam.</p>

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">

                <p class="fst-italic">Pelayanan yang baik adalah layanan yang selalu bersih, teratur, indah, nan aman. Semua itu kami miliki dan hanya untuk Anda pelanggan kami semata.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Seluruh kendaraan dan layanan kami telah terlisensi secara legal dengan kualitas internasional</h4>
                </div>
                <p>Berkendara tanpa takut untuk ditilang karena surat tidak lengkap. Karena kami juga menyediakan STNK dalam kendaraan yang membutuhkan STNK.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Demi kenyamanan dan keamanan Anda, kami juga menerapkan Social Distancing</h4>
                </div>
                <p>Kami juga selalu menerapkan protokol kesehatan dan selalu waspada terhadap penyebaran pandemi. Sehingga Anda dapat berkendara tanpa khawatir akan kesehatan dan kebersihan kendaraan kami.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Setiap kendaraan akan disediakan dengan kondisi bersih dan terawat.</h4>
                </div>
                <p>Terkadang banyak pelanggan yang mengkhawatirkan tentang tingkat kebersihan dan keterawatan kendaraan pada layanan penyewaan kendaraan. Maka dari itu Anda tidak perlu khawatir. Karena sebelum kendaraan sampai di tangan Anda, kami melakukan inspeksi dan pembersihan secara menyeluruh.</p>

              </div>
              <!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">

                <p class="fst-italic">Demi pelanggan kami yang sangat berharga. Kami juga menyediakan layanan yang juga memprioritaskan fleksibilitas dalam pelaksanaannya.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Terjadi kesalahan saat pemesanan? Dapat di batalkan kapanpun dan di mana pun</h4>
                </div>
                <p>Pembatalan pemesanan kendaraan kami dapat dilakukan di mana saja. Jadi, jangan khawatir untuk memesan terlebih dahulu sebelum di pesan orang lain.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Perpanjang layanan kami sewaktu-waktu</h4>
                </div>
                <p>Hanya dengan melalui aplikasi kami, Anda dapat memperpanjangnya dengan mudah. Atau jika Anda tidak bisa mengakses aplikasi kami, sistem kami akan melanjutkan layanan kami setelah waktu penyewaan Anda telah habis</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Buang sopir ketika tidak dibutuhkan lagi. Atau panggil sopir ketika dibutuhkan lagi</h4>
                </div>
                <p>Sopir dapat diadakan atau ditiadakan sesuai dengan kebutuhan Anda. Bahkan di tengah antah beranta, sopir dapat dikeluarkan jika Anda benar-benar tidak membutuhkannya</p>

              </div>
              <!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/hero/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/hero/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/hero/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/hero/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/hero/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/hero/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/hero/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/hero/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>Kami menyediakan banyak layanan yang berkualitas premium demi meningkatkan kenyamanan dan pengalaman para customer kami.</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/hero/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Emergency</h3>
                </a>
                <p>Karyawan kami akan langsung mengerahkan segala tenaga yang ada, apabila terjadi kecelakaan yang tidak diinginkan.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/hero/services-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Connectivity</h3>
                </a>
                <p>Kami menyediakan alat telekomunikasi darurat pada setiap kendaraan kami. Sehingga di mana pun Anda berada, kami masih tetap bisa menjangkau Anda.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/hero/services-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Micro Detail</h3>
                </a>
                <p>Memberikan informasi kendaraan dengan tingkat kedetailan tertinggi. Serta memberikan pengarahan dengan sejelas mungkin apabila terjadi hal yang tidak diinginkan.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/hero/services-4.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-bounding-box-circles"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Extend Anytime</h3>
                </a>
                <p>Ingin menambah waktu penggunaan layanan jasa rental dengan mudah. Tanpa harus mengulangi langkah meminjam dari awal.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/hero/services-5.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-calendar4-week"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Schedule</h3>
                </a>
                <p>Pilih tanggal dan waktu sesuka hati Anda. Kendaraan akan pasti tersedia di waktu yang telah Anda pilih.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/hero/services-6.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-chat-square-text"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Customer Service</h3>
                </a>
                <p>Adanya layanan komunikasi apabila terjadi kendala atau situasi di luar kendali. Menyediakan juga pertanyaan-pertanyaan yang menyangkut layanan kami.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/hero/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Ah sayang sekali kendaraan nya tidak boleh di beli. Soalnya mobilnya terawat dengan baik sih.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/hero/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Woke dah pokoknya
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/hero/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Mendengar dari kata teman-teman, bahwa layanan rental paling baik adalah roamRent. Makanya langsung kucoba. Eh ternyata memang benar kata teman-teman. Pengalaman luar biasa
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/hero/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Tinggal cusss
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/hero/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Merupakan pengalaman yang menakjubkan. Mulai dari pemesanan, kendaraan tiba, sampai selesai, semuanya keren. Sudah tidak bisa diungkapkan pakai kata-kata.
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Kami sangat menerima segala macam bentuk pertanyaan atau saran. Karena semua itu akan membantu kami dalam meningkatkan layanan kami. Sehingga jika Anda memiliki kebingunan akan layanan kami, berikut pertanyaan yang sering ditanyakan.
              </p>
            </div>

            <div class="accordion accordion-flush px-xl-5" id="faqlist">

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa yang perlu disiapkan untuk menggunakan layanan rental kendaraan?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Ketika Anda sudah memilih kendaraan yang akan Anda sewa, siapkan uangnya terlebih dahulu. Lalu sebelum menggunakan kendaraan, Anda harus sudah siap <b>SIM</b>, <b>KTP</b> atau <b>KTM</b>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    Bisakah saya booking layanan sewa kendaraan untuk teman, keluarga, atau kerabat saya?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Tentu saja bisa. Cukup berikan kartu identitas dan SIM teman Anda untuk menggunakan layanan kami. Dan tentu saja Anda yang bayar.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apakah ada tips untuk memilih kendaraan yang tepat?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Pertama-tama pikirkan terlebih dahulu ke mana tujuan dan perjalanan Anda. Sebagai contoh, mobil Jeep akan cocok untuk mendaki gunung. Namun, jika jalannya sempit maka sebaliknya motor trail adalah pilihan yang cocok. Pastikan juga Anda memilih kendaraan yang bisa Anda kendarai.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <!--<div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>-->
              <!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    Tolong saya tersesat dan sedang mengalami kecelakaan, apa yang perlu saya lakukan?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Tenang, pada setiap kendaraan sudah tersedia alat komunikasi darurat. Dan untuk kendaraan mobil kami sudah sediakan panduan survival guide beserta kotak p3k untuk pertolongan pertama.
                    Sedangkan sepeda motor juga sudah tersedia guideline survival di bagasinya.
                    untuk sepeda pancal, sudah disertai alat pelacak tersembunyi. Sehingga ketika ada situasi darurat, Anda juga bisa menggunakan kekuatan batin Anda sendiri.
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/hero/faq.jpg");'>&nbsp;</div>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">

      <div class="container">

        <div class="section-header">
          <h2>Vehicles</h2>
          <p>Berikut adalah beberapa sebagian kendaraan berkualitas kami yang tersedia. Semua memiliki standard yang terjamin internasional</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-1">Mobil</li>
            <li data-filter=".filter-2">Motorcycle</li>
            <li data-filter=".filter-3">Bicycle</li>
            <!--<li data-filter=".filter-books">Books</li>-->
          </ul><!-- End Portfolio Filters -->




          <div class="row g-0 portfolio-container">
            <?php while ($row = $result->fetch_assoc()) { ?>

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?= $row['category'] ?>">
                <img src="<?= $row['img_url'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $row['name'] ?></h4>
                  <a href="assets/img/hero/portfolio/2021-skoda-octavia-rs.jpg" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="item_detail.php?id=<?= $row['id'] ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

            <?php } ?>

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!--<section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/hero/team/team-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>&lt;!&ndash; End Team Member &ndash;&gt;

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/hero/team/team-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>&lt;!&ndash; End Team Member &ndash;&gt;

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/hero/team/team-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>&lt;!&ndash; End Team Member &ndash;&gt;

        </div>

      </div>
    </section>-->
    <!-- End Team Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Latest News</h2>
          <p>Cerita dan peningkatan kualitas service terbaru kami.</p>
        </div>

        <div class="row">

          <?php while ($row = $result_article->fetch_assoc()) {
          ?>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="post-box">
                <div class="post-img"><img src="<?= $row['img_url'] ?>" class="img-fluid" alt=""></div>
                <div class="meta">
                  <!-- <span class="post-date">Tue, December 12</span> -->
                  <span class="post-author">
                    <!-- / --> <?= $row['author'] ?>
                  </span>
                </div>
                <h3 class="post-title"><?= $row['title'] ?></h3>
                <!-- <p>Dengan pergantian CEO baru, telah dibentuknya peraturan - peraturan baru. Telah di lihat bahwa peraturan tersebut memberikan dampak besar ke...</p> -->
                <a href="blog-details.php?id=<?= $row['id'] ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          <?php } ?>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Jika tidak menemukan apa yang sedang dicari. Jangan malu untuk menghubungi kami ya. Kami sedia 24/7 setiap minggunya ^_^</p>
        </div>

      </div>

      <!--<div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>-->
      <!-- End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Kami dengan senang hati menerima Anda sebagai tamu kami. Jadi, silahkan sapa dan mampir ke tempat kami.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Villa Puncak Tidar Blok N no. 1, Doro, Karangwidoro, Kec. Dau, Kabupaten Malang, Jawa Timur 65151</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>31250001@student.machung.ac.id</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telepon:</h4>
                  <p>(0341) 550171</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>HeroBiz</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>HeroBiz</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <?php include("layout-script-hero.php") ?>

</body>

</html>