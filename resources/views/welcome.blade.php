<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CarePasundan | Kelompok 1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.svg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  @include('includes.landing.stylesheet')
  </head>

  <body>

    @include('includes.landing.navbar')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Selamat Datang di CarePasundan</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Platform dengan target user masyarakat wilayah Bandung untuk melaukan pelaporan kerusakan fasilitas. CarePasundan memiliki 3 Fitur yaitu: Pelaporan Kerusakan Fasilitas, Community, dan Donasi</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="{{ url('login')}}" class="btn-get-started scrollto">Laporkan!</a>
           
            <a href="#services" class="btn-get-started-2 scrollto">Alur laporan</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              <h3>CarePasundan</h3> Proyek PasundanCare memiliki 2 fokus utama, yaitu: pengelolaan kerusakan infrastruktur publik pada fokus infrastruktur jalan, jembatan dan kondisi air bersih, serta mendorong partisipasi publik dalam menjaga lingkungan di masyarakat secara aktif.
            </p>
            <ul>
              <h3>Tujuan CarePasundan</h3>
              <li><i class="ri-check-double-line"></i>Meningkatkan penanganan infrastruktur publik yang rusak</li>
              <li><i class="ri-check-double-line"></i>Meningkatkan kesadaran dan kolaborasi masyarakat dalam menangani isu lingkungan</li>
              <li><i class="ri-check-double-line"></i>Membangun komunitas peduli lingkungan yang aktif dan berkelanjutan</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              <h3>Fitur CarePasundan</h3> 
              <li>Pelaporan Kerusakan Fasilitas: kerusakan infrastruktur publik dengan fokus infrastruktur jalan, jembatan dan kondisi air bersih</li>
              <li>Community: Halaman untuk membagikan kegiatan peduli lingkungan Anda</li>
              <li>Donasi: Menampilkan berbagai informasi donasi dan kegiatan voluntering di Bandung yang bisa Anda ikuti</li>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Laporan Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>TATA CARA</h2>
          <p>Nah ini dia alur pelaporan kerusakan fasilitas pada CarePasundan</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class='bx bxs-edit-alt'></i></div>
              <h4 class="title"><a href="">Kirim Laporan</a></h4>
              <p class="description">Tulis laporan keluhan Anda dengan jelas.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-shuffle"></i></div>
              <h4 class="title"><a href="">Proses Verifikasi</a></h4>
              <p class="description">Tunggu sampai laporan Anda di verifikasi oleh admin/petugas.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Tindak Lanjut</a></h4>
              <p class="description">Laporan Anda sedang dalam diproses dan ditindak lanjut.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class='bx bx-check-shield'></i></div>
              <h4 class="title"><a href="">Selesai</a></h4>
              <p class="description">Laporan pengaduan telah selesai ditindak.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Laporan Section -->


    @include('includes.landing.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.landing.javascript')

</body>

</html>
