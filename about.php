<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tentang Saya - Web Developer & Software Engineer</title>
  <meta name="description" content="Tentang profil, visi karir, dan keahlian Web Developer & Software Engineer.">

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

<body class="portfolio-theme about-page">

  <!-- Header -->
  <header id="header" class="header fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename"><span class="brand-code">&lt;/&gt;</span>DevPortofolio</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero">Beranda</a></li>
          <li><a href="about.php" class="active">Tentang Saya</a></li>
          <li><a href="index.php#skills">Keahlian</a></li>
          <li><a href="index.php#projects">Projek</a></li>
          <li><a href="index.php#experience-education">Pengalaman & Education</a></li>
          <li><a href="contact.php">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-header-cta d-none d-sm-inline-block" href="contact.php">
        <i class="bi bi-send-fill me-1"></i> Hubungi Saya
      </a>
    </div>
  </header>

  <main class="main" style="padding-top: 110px;">

    <!-- About Section Header -->
    <section class="section py-5">
      <div class="container" data-aos="fade-up">
        
        <div class="text-center mb-5">
          <span class="section-subtitle-tag"><i class="bi bi-person-circle"></i> Profil Profesional</span>
          <h2 class="dev-heading">Tentang & Filosofi Software Engineer</h2>
          <p class="dev-description mx-auto" style="max-width: 750px;">
            Memiliki passion yang mendalam dalam pengembangan perangkat lunak, perancangan web responsif, serta optimasi backend dan sistem basis data.
          </p>
        </div>

        <div class="row align-items-center g-5 mb-5">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="about-card">
              <h3 class="gradient-text mb-3" style="font-weight: 700;">Filosofi Pemrograman Saya</h3>
              <p class="dev-description mb-3">
                Bagi saya, menulis kode bukan sekadar membuat aplikasi berfungsi, melainkan membangun sistem yang <strong>terstruktur, mudah dirawat (maintainable), dan scalable</strong>.
              </p>
              <ul class="list-unstyled dev-description">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-info me-2"></i> <strong>Clean Code:</strong> Menulis kode yang rapi, modular, dan sesuai standar industri.</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-info me-2"></i> <strong>User-Centric UX:</strong> Memastikan performa web cepat dan responsif di semua perangkat.</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-info me-2"></i> <strong>Data Security:</strong> Menerapkan praktik keamanan terbaik pada API dan database.</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left">
            <div class="about-card">
              <h3 class="text-white mb-3" style="font-weight: 700;">Target Karir & Pengembangan</h3>
              <p class="dev-description mb-4">
                Saya bertujuan untuk terus berkembang sebagai <strong>Software Engineer & Web Developer Specialist</strong>, siap berkontribusi dalam proyek skala kecil hingga enterprise, serta beradaptasi cepat dengan teknologi masa depan.
              </p>
              <div class="d-flex gap-3">
                <a href="index.php#projects" class="btn-dev-primary"><i class="bi bi-folder-check"></i> Portofolio Projek</a>
                <a href="contact.php" class="btn-dev-outline"><i class="bi bi-envelope"></i> Kontak</a>
              </div>
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