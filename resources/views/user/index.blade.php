<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CutiNow - Application Employee Leave</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('user/dist/img/logo_circle/2.png')}}" rel="icon">
  <link href="{{ asset('user/dist/img/logo_circle/2.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('user/plugins/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('user/plugins/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('user/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('user/plugins/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('user/plugins/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('user/plugins/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('user/dist/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><img src="{{ asset('user/dist/img/logo_circle/2.png')}}" class="img-fluid" alt="" srcset=""> <a
              href="/">Cuti<span style="color: #18d26e;">Now</span> </a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          @if (Route::has('login'))
    <nav id="navbar" class="navbar">
        <ul>
            @auth
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#"><span>Cuti Pegawai</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('admin.pegawai.create') }}">Pengajuan Cuti</a></li>
                        <li><a href="{{ route('admin.pegawai.index') }}">Riwayat Cuti</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" style="color: #18d26e;" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @else
                <li><a class="nav-link scrollto" href="{{ route('login') }}">Log In</a></li>
                @if (Route::has('register'))
                    <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
                @endif
            @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
@endif

        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url('{{ asset('user/dist/img/hero-carousel/1.jpg') }}')">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate_animated animate_fadeInDown">Smart Leave Solutions</h2>
                <p class="animate_animated animate_fadeInUp">Sebuah sistem dan menjadi solusi yang efisien untuk
                  mengelola permintaan dan persetujuan cuti pegawai.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate_animated animate_fadeInUp">Get
                  Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('{{ asset('user/dist/img/hero-carousel/2.jpg') }}')">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate_animated animate_fadeInDown">Cuti Tanpa Ribet</h2>
                <p class="animate_animated animate_fadeInUp">Nikmati kemudahan dalam mengajukan dan mengelola cuti
                  dengan sistem informasi yang modern dan user-friendly.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate_animated animate_fadeInUp">Get
                  Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('{{ asset('user/dist/img/hero-carousel/3.jpg') }}')">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate_animated animate_fadeInDown">Track Your Leave Balance</h2>
                <p class="animate_animated animate_fadeInUp">Pegawai dapat dengan mudah melihat jatah cuti mereka dan
                  merencanakan liburan bersama keluarga dengan lebih baik.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate_animated animate_fadeInUp">Get
                  Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('{{ asset('user/dist/img/hero-carousel/5.jpg') }}')">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate_animated animate_fadeInDown">Fitur Cuti Lengkap</h2>
                <p class="animate_animated animate_fadeInUp">Sistem informasi kami menyediakan fitur lengkap mulai
                  dari pengajuan, persetujuan, hingga pelaporan cuti pegawai.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate_animated animate_fadeInUp">Get
                  Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('{{ asset('user/dist/img/hero-carousel/4.jpg') }}')">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate_animated animate_fadeInDown">Transparent Leave Management</h2>
                <p class="animate_animated animate_fadeInUp">Sistem kami memastikan transparansi dalam pengelolaan
                  cuti, sehingga semua pengajuan dan persetujuan dapat dipantau dengan jelas.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate_animated animate_fadeInUp">Get
                  Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="bi bi-briefcase"></i>
            <h4 class="title"><a href="">Leave Management</a></h4>
            <p class="description">Kelola semua pengajuan cuti pegawai dengan mudah. Dari permintaan hingga persetujuan,
              semuanya terintegrasi dalam satu sistem yang efisien dan transparan</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="bi bi-card-checklist"></i>
            <h4 class="title"><a href="">Task Management</a></h4>
            <p class="description">Pantau dan kelola tugas-tugas penting dengan sistem kami. Atur prioritas, lacak
              progres, dan pastikan setiap pekerjaan selesai tepat waktu</p>
          </div>

          <div class="col-lg-4 box">
            <i class="bi bi-binoculars"></i>
            <h4 class="title"><a href="">Performance Monitoring</a></h4>
            <p class="description">Monitor kinerja pegawai secara real-time. Dapatkan wawasan berharga tentang
              produktivitas dan identifikasi area yang memerlukan perbaikan</p>
          </div>

        </div>
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Selamat datang di CutiNow, platform inovatif yang didedikasikan untuk mempermudah pengelolaan cuti pegawai.
            Kami memahami bahwa efisiensi dan transparansi adalah kunci dalam menciptakan lingkungan kerja yang harmonis
            dan produktif. Dengan sistem kami yang canggih dan user-friendly, kami membantu perusahaan dari berbagai
            ukuran untuk mengatur pengajuan cuti, manajemen tugas, dan pemantauan kinerja dengan lebih efektif.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
                <img src="{{ asset('user/dist/img/about-vision.jpg') }}" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Didukung oleh tim profesional yang berpengalaman di bidang teknologi dan manajemen sumber daya manusia,
                kami siap membantu Anda mengoptimalkan pengelolaan cuti dan kinerja pegawai. Kami percaya bahwa dengan
                pendekatan yang tepat dan alat yang sesuai, setiap perusahaan dapat mencapai potensi maksimalnya.
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col">
              <div class="img">
                <img src="{{ asset('user/dist/img/about-plan.jpg') }}" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                <b>Transparansi:</b> Kami menjunjung tinggi transparansi pada setiap aspek layanan kami, memastikan
                 semua informasi diakses dengan jelas dan akurat.
              </p>
              <p>
                <b>Kepuasan Pelanggan:</b> Kami memberikan layanan terbaik dan mendengarkan kebutuhan
                dari pelanggan kami untuk terus berkembang.
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="{{ asset('user/dist/img/about-mission.jpg') }}" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-bar-chart"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Team</a></h2>
              <p>
                Didukung oleh tim profesional yang berpengalaman di bidang teknologi dan manajemen sumber daya manusia,
                kami siap membantu Anda mengoptimalkan pengelolaan cuti dan kinerja pegawai. Kami percaya bahwa dengan
                pendekatan yang tepat dan alat yang sesuai, setiap perusahaan dapat mencapai potensi maksimalnya.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Kami menawarkan berbagai layanan untuk mendukung efisiensi dan produktivitas perusahaan Anda. Dengan
            fitur-fitur yang dirancang khusus, kami membantu Anda mengelola berbagai aspek penting dari pengelolaan
            sumber daya manusia. Berikut adalah layanan utama yang kami tawarkan:

          </p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Manajemen Cuti</a></h4>
            <p class="description">Sistem terpadu untuk mengelola semua pengajuan dan persetujuan cuti pegawai dengan
              mudah dan efisien.</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Pemantauan Kinerja</a></h4>
            <p class="description">Lacak kinerja pegawai secara real-time untuk mendapatkan wawasan berharga tentang
              produktivitas dan area perbaikan</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Manajemen Tugas</a></h4>
            <p class="description">Atur dan pantau tugas-tugas penting dengan mudah, memastikan setiap pekerjaan selesai
              tepat waktu.</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Kesejahteraan Pegawai</a></h4>
            <p class="description">Fitur untuk memantau dan mendukung kesejahteraan pegawai, membantu menciptakan
              lingkungan kerja yang sehat dan produktif</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Analitik & Pelaporan</a></h4>
            <p class="description">Dapatkan laporan mendetail dan analitik komprehensif untuk mengoptimalkan pengambilan
              keputusan berbasis data</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Integrasi Kalender</a></h4>
            <p class="description">Sinkronkan pengajuan cuti dan jadwal tugas dengan kalender perusahaan untuk manajemen
              waktu yang lebih baik</p>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container text-center" data-aos="zoom-in">
        <h3>Segera Integrasikan Sistem Informasi Kami ke Perusahaan Anda</h3>
        <p> Ajak visitors untuk segera mengintegrasikan sistem informasi Anda ke dalam operasional perusahaan mereka.
        </p>
        <a class="cta-btn" href="#">Coba Gratis</a>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('user/dist/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('user/dist/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('user/dist/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('user/dist/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('user/dist/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('user/dist/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('user/dist/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('user/dist/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('user/dist/img/testimonial-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Andi Pratama</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <img src="{{ asset('user/dist/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                  Cutinow telah mengubah cara kami mengelola cuti karyawan. Proses yang sebelumnya rumit kini menjadi
                  sangat mudah dan efisien. Aplikasi ini benar-benar membantu kami dalam menghemat waktu dan
                  meningkatkan produktivitas <img src="{{ asset('user/dist/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                  <img src="{{ asset('user/dist/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('user/dist/img/testimonial-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Siti Nur Haliza</h3>
                <h4>Karyawan</h4>
                <p>
                  <img src="{{ asset('user/dist/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                  Saya sangat menyukai Cutinow! Aplikasi ini memudahkan saya untuk mengajukan cuti tanpa harus repot.
                  Semua informasi cuti saya tercatat dengan baik dan saya bisa melihat status pengajuan saya kapan saja
                  <img src="{{ asset('user/dist/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('user/dist/img/testimonial-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Rina Kusuma</h3>
                <h4>Asisten Administrasi</h4>
                <p>
                  <img src="{{ asset('user/dist/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                  Cutinow benar-benar aplikasi yang luar biasa. Fitur-fiturnya sangat membantu dalam mengelola jadwal
                  cuti karyawan. Kami tidak lagi mengalami kebingungan dalam melacak cuti yang sudah diambil. <img
                    src="{{ asset('user/dist/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('user/dist/img/testimonial-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Andi Pratama</h3>
                <h4>Manajer HRD</h4>
                <p>
                  <img src="{{ asset('user/dist/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                  Cutinow telah mengubah cara kami mengelola cuti karyawan. Proses yang sebelumnya rumit kini menjadi
                  sangat mudah dan efisien. Aplikasi ini benar-benar membantu kami dalam menghemat waktu dan
                  meningkatkan produktivitas <img src="{{ asset('user/dist/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('user/dist/img/testimonial-5.jpg') }}" class="testimonial-img" alt="">
                <h3>Joko Widodo</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <img src="{{ asset('user/dist/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                  Dengan Cutinow, kami bisa memantau dan menyetujui permintaan cuti karyawan dengan cepat. Sistemnya
                  transparan dan user-friendly, membuat manajemen cuti menjadi jauh lebih terorganisir. <img
                    src="{{ asset('user/dist/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Team</h3>
          <p>Terdiri dari para ahli dalam teknologi dan manajemen sumber daya manusia, kami fokus pada solusi inovatif
            untuk mengoptimalkan manajemen cuti dan kinerja. Setiap anggota tim membawa dedikasi dan keahlian untuk
            mendukung perusahaan Anda mencapai efisiensi terbaik.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <img src="{{ asset('user/dist/img/hilmi.jpg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Muhamad Hilmi Kamil</h4>
                  <span>Leader Team</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('user/dist/img/elyas.jpg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Elyas Randi Renaldi</h4>
                  <span>Back-End Dev</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <img src="{{ asset('user/dist/img/dzakwan.jpg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Firmansyah Dzakwan</h4>
                  <span>Back-End Dev</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <img src="{{ asset('user/dist/img/ilyas.png') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ilyas Abdul Aziz</h4>
                  <span>Front-End Dev</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Tertarik dengan layanan kami? Jangan ragu untuk menghubungi tim kami untuk konsultasi lebih lanjut atau
            mendapatkan demo gratis.
            <br>
            Kami siap membantu Anda meningkatkan efisiensi dan produktivitas perusahaan Anda. Segera hubungi kami dan
            mulailah perubahan positif hari ini!
          </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>Kampus B Nurul Fikri, Jakarta 12510, Indonesia</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+62 857 8314 2077</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">heliosgroup@company.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>CutiNow</h3>
            <p>Cutinow adalah solusi sempurna untuk mengelola cuti karyawan Anda. Mudah digunakan, efisien, dan membantu
              Anda mengatur semua permintaan cuti dengan cepat dan tepat.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Kampus B Nurul Fikri <br>
              Jakarta, JK 12510<br>
              Indonesia <br>
              <strong>Phone:</strong> +62 857 8314 2077<br>
              <strong>Email:</strong> heliosgroup@company.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Berlanggananlah untuk mendapatkan berita terbaru, tips, dan penawaran eksklusif langsung ke kotak masuk
              Anda. Jangan lewatkan informasi penting dari kami!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Cuti<span style="color: #18d26e;">Now</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('user/plugins/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('user/plugins/aos/aos.js')}}"></script>
  <script src="{{ asset('user/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('user/plugins/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('user/plugins/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('user/plugins/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('user/plugins/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('user/dist/js/main.js')}}"></script>
  <script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  
</body>

</html>