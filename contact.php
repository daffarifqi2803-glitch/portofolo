<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kontak - Web Developer & Software Engineer</title>
  <meta name="description" content="Hubungi Web Developer dan Software Engineer untuk diskusi proyek web, karir, dan kolaborasi.">

  <!-- Favicons -->
  <link href="assets/img/favicon-d.svg" rel="icon" type="image/svg+xml">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Montserrat:wght@400;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Main CSS & Developer Theme -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/portfolio-custom.css" rel="stylesheet">
</head>

<body class="portfolio-theme contact-page">

  <!-- Header Navigation -->
  <header id="header" class="header fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename"><span class="brand-code">&lt;/&gt;</span>DevPortofolio</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero">Beranda</a></li>
          <li><a href="about.php">Tentang Saya</a></li>
          <li><a href="index.php#skills">Keahlian</a></li>
          <li><a href="index.php#projects">Projek</a></li>
          <li><a href="index.php#experience-education">Pengalaman & Education</a></li>
          <li><a href="contact.php" class="active">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-header-cta d-none d-sm-inline-block" href="contact.php">
        <i class="bi bi-send-fill me-1"></i> Hubungi Saya
      </a>
    </div>
  </header>

  <main class="main" style="padding-top: 110px;">

    <!-- Contact Section -->
    <section class="section py-5">
      <div class="container" data-aos="fade-up">

        <div class="text-center mb-5">
          <span class="section-subtitle-tag"><i class="bi bi-envelope-fill"></i> Hubungi Saya</span>
          <h2 class="dev-heading">Diskusi Proyek & Peluang Karir</h2>
          <p class="dev-description mx-auto" style="max-width: 650px;">
            Saya siap berdiskusi seputar kebutuhan web development, pembuatan software kustom, maupun peluang kolaborasi engineering.
          </p>
        </div>

        <div class="row g-4">

          <!-- Left Info Cards -->
          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
            <div class="contact-card">
              <h3 class="text-white mb-4" style="font-weight: 700;">Informasi Kontak</h3>
              
              <div class="contact-info-item">
                <div class="contact-info-icon"><i class="bi bi-envelope"></i></div>
                <div class="contact-info-text">
                  <h5>Email</h5>
                  <p>daffarifqi2803@gmail.com</p>
                </div>
              </div>

              <div class="contact-info-item">
                <div class="contact-info-icon"><i class="bi bi-whatsapp"></i></div>
                <div class="contact-info-text">
                  <h5>WhatsApp / Telepon</h5>
                  <p>+62 895-1470-8034</p>
                </div>
              </div>

              <div class="contact-info-item">
                <div class="contact-info-icon"><i class="bi bi-geo-alt"></i></div>
                <div class="contact-info-text">
                  <h5>Lokasi</h5>
                  <p>Indonesia (Terbuka untuk Remote Work)</p>
                </div>
              </div>

              <hr class="my-4" style="border-color: var(--dev-border);">

              <h5 class="text-white mb-3">Tautan Sosial & Kode</h5>
              <div class="social-links-dev">
                <a href="https://github.com/daffarifqi2803-glitch?tab=repositories" target="_blank" rel="noopener noreferrer" class="social-link-item" title="GitHub" aria-label="GitHub"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/in/d-rifqi-080b97219/" target="_blank" rel="noopener noreferrer" class="social-link-item" title="LinkedIn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="mailto:daffarifqi2803@gmail.com" class="social-link-item" title="Email" aria-label="Email"><i class="bi bi-envelope-at"></i></a>
                <a href="https://wa.me/6289514708034" target="_blank" rel="noopener noreferrer" class="social-link-item" title="WhatsApp" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>

          <!-- Right Form -->
          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
            <div class="contact-card">
              <h3 class="text-white mb-4" style="font-weight: 700;">Kirim Pesan</h3>
              <form action="#" method="post" role="form" onsubmit="event.preventDefault(); alert('Terima kasih! Pesan Anda telah dikirim.');">
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label text-muted">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control dev-form-control" placeholder="Nama Anda" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label text-muted">Alamat Email</label>
                    <input type="email" class="form-control dev-form-control" name="email" placeholder="email@contoh.com" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label text-muted">Subjek / Judul Pesan</label>
                    <input type="text" class="form-control dev-form-control" name="subject" placeholder="Subjek tawaran / diskusi projek" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label text-muted">Isi Pesan</label>
                    <textarea class="form-control dev-form-control" name="message" rows="5" placeholder="Tuliskan pesan atau detail projek Anda di sini..." required></textarea>
                  </div>
                  <div class="col-12 mt-4">
                    <button type="submit" class="btn-dev-primary w-100 justify-content-center">
                      <i class="bi bi-send-fill me-1"></i> Kirim Pesan Sekarang
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="footer-dev">
    <div class="container text-center">
      <h3 class="sitename text-white mb-3"><span class="brand-code">&lt;/&gt;</span>DevPortofolio</h3>
      <p class="dev-description mb-4" style="font-size: 0.95rem;">
        Siap berkontribusi dalam tim software engineering dan membangun aplikasi web berkualitas tinggi.
      </p>
      <div class="copyright text-muted" style="font-size: 0.88rem;">
        &copy; <?php echo date("Y"); ?> <strong>Portofolio Web Developer & Software Engineer</strong>.
      </div>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>