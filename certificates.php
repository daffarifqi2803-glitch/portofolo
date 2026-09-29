<?php
require_once __DIR__ . '/projects-data.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <base href="./">
  <title>Sertifikasi & Kualifikasi Profesional — Daffa Rifqi Al Faiz</title>
  <meta name="description" content="Daftar sertifikasi kompetensi industri dan simulasi kerja software engineering & project management yang telah diselesaikan.">
  <meta name="keywords" content="Sertifikat, Software Engineering, Project Management, Forage, Commonwealth Bank, CBRE, Daffa Rifqi">

  <!-- Favicon -->
  <link href="assets/img/favicon-d.svg" rel="icon" type="image/svg+xml">

  <!-- Modern Fonts: Montserrat, Inter & Fira Code -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Custom Developer Theme CSS -->
  <link href="assets/css/portfolio-custom.css" rel="stylesheet">
</head>

<body class="split-portfolio-page">

  <!-- Ambient Background Lighting Glows -->
  <div class="bg-glow-container">
    <div class="ambient-glow glow-top-left"></div>
    <div class="ambient-glow glow-hero-right"></div>
    <div class="ambient-glow glow-middle"></div>
  </div>

  <div class="split-layout-container">
    <div class="row g-0">
      
      <!-- LEFT COLUMN: Sticky Profile Sidebar -->
      <aside class="col-lg-4 col-xl-4 split-sidebar-col">
        <div class="split-sidebar-sticky">
          
          <!-- Top Area: Brand, Profile & Bio -->
          <div>
            <a href="index.php" class="sidebar-brand-badge">
              <span class="brand-icon">&lt;/&gt;</span> CodeCraft
            </a>

            <h1 class="sidebar-profile-name">Daffa Rifqi Al Faiz</h1>
            <h2 class="sidebar-role">Web Developer & Project Manager</h2>
            
            <p class="sidebar-profile-bio">
              Mahasiswa Teknik Informatika Universitas Indraprasta PGRI. Membangun aplikasi web modern, mengelola manajemen proyek, serta memimpin tim teknis dengan eksekusi efisien.
            </p>

            <div class="sidebar-status-wrap">
              <div class="sidebar-status-pill">
                <span class="pulse-dot"></span> Tersedia untuk peluang kerja
              </div>
              <span class="sidebar-location-text">Jakarta, Indonesia</span>
            </div>

            <!-- Vertical Navigation Menu -->
            <nav class="sidebar-nav-menu">
              <a href="index.php#about" class="sidebar-nav-link">
                <span class="nav-dash"></span>
                <span class="nav-text">TENTANG</span>
              </a>
              <a href="index.php#experience" class="sidebar-nav-link">
                <span class="nav-dash"></span>
                <span class="nav-text">PENGALAMAN</span>
              </a>
              <a href="index.php#skills" class="sidebar-nav-link">
                <span class="nav-dash"></span>
                <span class="nav-text">SKILLS</span>
              </a>
              <a href="index.php#projects" class="sidebar-nav-link">
                <span class="nav-dash"></span>
                <span class="nav-text">PROJECT</span>
              </a>
              <a href="certificates.php" class="sidebar-nav-link active">
                <span class="nav-dash"></span>
                <span class="nav-text">SERTIFIKAT</span>
              </a>
              <a href="index.php#contact" class="sidebar-nav-link">
                <span class="nav-dash"></span>
                <span class="nav-text">KONTAK</span>
              </a>
            </nav>
          </div>

          <!-- Bottom Area: Social Icons & Language Switcher -->
          <div class="sidebar-footer-wrap">
            <div class="sidebar-social-list">
              <a href="https://github.com/daffarifqi2803-glitch?tab=repositories" target="_blank" rel="noopener noreferrer" class="sidebar-social-item" title="GitHub" aria-label="GitHub"><i class="fab fa-github"></i></a>
              <a href="https://www.linkedin.com/in/d-rifqi-080b97219/" target="_blank" rel="noopener noreferrer" class="sidebar-social-item" title="LinkedIn" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:daffarifqi2803@gmail.com" class="sidebar-social-item" title="Email" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
              <a href="https://wa.me/6289514708034" target="_blank" rel="noopener noreferrer" class="sidebar-social-item" title="WhatsApp" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
            </div>

            <div class="sidebar-lang-pill">
              <span class="sidebar-lang-btn active">ID</span>
              <span class="sidebar-lang-btn">EN</span>
            </div>
          </div>

        </div>
      </aside>

      <!-- RIGHT COLUMN: Certificates Content -->
      <main class="col-lg-8 col-xl-8 split-content-col">
        
        <!-- Back Link -->
        <a href="index.php" class="project-back-btn">
          <i class="bi bi-arrow-left"></i> Kembali ke beranda
        </a>

        <!-- Header -->
        <h1 class="project-hero-title">Sertifikasi & Kualifikasi Profesional</h1>
        <div class="project-hero-meta">
          2026 · Bukti Kompetensi Industri & Simulasi Kerja Nyata
        </div>

        <p class="text-secondary mb-5" style="max-width: 720px; line-height: 1.65;">
          Berikut adalah sertifikat resmi hasil penyelesaian simulasi pekerjaan industri (Job Simulation) yang mencakup rekayasa perangkat lunak berskala korporat dan tata kelola manajemen proyek berbasis standar internasional.
        </p>

        <!-- Certificates Grid -->
        <div class="row g-4">
          <?php foreach ($certificates as $cert): ?>
            <div class="col-12" data-aos="fade-up">
              <div class="cert-card">
                <div class="row g-0">
                  
                  <div class="col-md-5">
                    <div class="cert-img-wrapper h-100">
                      <a href="<?php echo htmlspecialchars($cert['image']); ?>" class="glightbox" data-gallery="certs" title="<?php echo htmlspecialchars($cert['title']); ?> — <?php echo htmlspecialchars($cert['issuer']); ?>">
                        <img src="<?php echo htmlspecialchars($cert['image']); ?>" alt="<?php echo htmlspecialchars($cert['title']); ?>" class="cert-img h-100">
                        <div class="cert-overlay-zoom">
                          <i class="bi bi-zoom-in me-2"></i> Perbesar Sertifikat
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="col-md-7">
                    <div class="cert-body">
                      
                      <div class="cert-issuer-badge">
                        <i class="bi bi-patch-check-fill"></i> <?php echo htmlspecialchars($cert['issuer']); ?>
                      </div>

                      <h3 class="cert-title"><?php echo htmlspecialchars($cert['title']); ?></h3>
                      
                      <div class="cert-date">
                        <i class="bi bi-calendar3 me-1"></i> Selesai: <?php echo htmlspecialchars($cert['date']); ?> · Kode Verifikasi: <code><?php echo htmlspecialchars($cert['credential']); ?></code>
                      </div>

                      <p class="cert-desc">
                        <?php echo htmlspecialchars($cert['description']); ?>
                      </p>

                      <div class="mb-3">
                        <strong class="d-block text-white mb-2" style="font-size: 0.82rem; text-transform: uppercase; letter-spacing: 0.5px;">Tugas Praktis yang Diselesaikan:</strong>
                        <ul class="cert-tasks-list">
                          <?php foreach ($cert['tasks'] as $task): ?>
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo htmlspecialchars($task); ?></li>
                          <?php endforeach; ?>
                        </ul>
                      </div>

                      <div class="cert-tags-row">
                        <?php foreach ($cert['tags'] as $tag): ?>
                          <span class="cert-tag-pill"><?php echo htmlspecialchars($tag); ?></span>
                        <?php endforeach; ?>
                      </div>

                      <a href="<?php echo htmlspecialchars($cert['image']); ?>" class="cert-footer-btn glightbox" data-gallery="certs-btn">
                        <i class="bi bi-arrows-fullscreen"></i> Lihat Sertifikat Resolusi Penuh
                      </a>

                    </div>
                  </div>

                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Detail Footer Note -->
        <footer class="split-page-footer d-flex justify-content-between flex-wrap gap-2">
          <div>© 2026 Daffa Rifqi Al Faiz. All rights reserved.</div>
          <div>CodeCraft Developer Portfolio</div>
        </footer>

      </main>

    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
      });

      const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true
      });
    });
  </script>
</body>

</html>
