<?php
require_once __DIR__ . '/projects-data.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> Daffa Rifqi Al Faiz | Web Developer & Project Manager</title>
  <meta name="description" content="Portofolio Pengembang Web, Project Manager & Software Engineer - Universitas Indraprasta PGRI.">
  <meta name="keywords" content="Portofolio, Web Developer, Project Manager, Software Engineer, Putik Bouquet, Unindra, Daffa Rifqi Al Faiz">

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

<body class="portfolio-theme">

  <!-- Ambient Background Lighting Glows -->
  <div class="bg-glow-container">
    <div class="ambient-glow glow-top-left"></div>
    <div class="ambient-glow glow-hero-right"></div>
    <div class="ambient-glow glow-middle"></div>
  </div>

 

  <main>

    <!-- HERO SECTION -->
    <section id="hero" class="hero-section">
      <div class="container">
        <div class="row align-items-center g-5">
          
          <!-- Left Column: Content -->
          <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
            <div class="section-tag">
              <span class="dot"></span> WEB DEVELOPER & PROJECT MANAGER
            </div>
            
            <h1 class="hero-title-main">
              Hi, I'm <span class="gradient-text-alex">Daffa Rifqi</span><br>            </h1>

            <p class="hero-desc">
              Mahasiswa Teknik Informatika Universitas Indraprasta PGRI. Membangun aplikasi web modern, mengelola manajemen proyek, serta memimpin tim teknis dengan eksekusi efisien.
            </p>

            <div class="hero-btn-group">
              <a href="#projects" class="btn-primary-purple">
                View My Work <i class="bi bi-arrow-up-right"></i>
              </a>
              <a href="#certificates" class="btn-secondary-outline">
                View Certificates <i class="bi bi-award"></i>
              </a>
              <!-- Direct Download CV Button -->
              <a href="assets/cv/CV_Daffa_Rifqi_Al_Faiz.docx" download="CV_Daffa_Rifqi_Al_Faiz.docx" class="btn-secondary-outline">
                Download CV <i class="bi bi-download"></i>
              </a>
            </div>

            <!-- Social Links -->
            <div class="tech-ribbon-wrapper">
              <div class="tech-ribbon-title">CONNECT WITH ME</div>
              <div class="social-links-row">
                <a href="https://www.linkedin.com/in/d-rifqi-080b97219/" target="_blank" rel="noopener noreferrer" class="social-link-badge linkedin" aria-label="LinkedIn" title="LinkedIn">
                  <i class="fab fa-linkedin-in"></i><span>LinkedIn</span>
                </a>
                <a href="https://wa.me/6289514708034" target="_blank" rel="noopener noreferrer" class="social-link-badge whatsapp" aria-label="WhatsApp" title="WhatsApp">
                  <i class="bi bi-whatsapp"></i><span>WhatsApp</span>
                </a>
                <a href="https://github.com/daffarifqi2803-glitch?tab=repositories" target="_blank" rel="noopener noreferrer" class="social-link-badge github" aria-label="GitHub" title="GitHub">
                  <i class="fab fa-github"></i><span>GitHub</span>
                </a>
                <a href="mailto:daffarifqi2803@gmail.com" class="social-link-badge email" aria-label="Email" title="Email">
                  <i class="bi bi-envelope-fill"></i><span>Email</span>
                </a>
              </div>
            </div>
          </div>

          <!-- Right Column: Profile Photo & Code -->
          <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
            <div class="hero-visual-wrapper">
              <div class="hero-purple-circle-bg"></div>
              
              <!-- Developer Profile Photo -->
              <img src="assets/img/hero-developer.jpg" alt="Daffa Rifqi Al Faiz" class="hero-dev-img">

              <!-- IDE Code Box Below Photo -->
              <div class="ide-code-card">
                <div class="ide-header">
                  <div class="ide-title">
                    <i class="bi bi-code-slash text-purple"></i> &lt;/&gt; Code
                  </div>
                  <div class="ide-dot-green"></div>
                </div>
                <div class="ide-body">
                  <div><span class="code-kw">const</span> <span class="code-var">developer</span> = {</div>
                  <div class="ps-3"><span class="code-var">name</span>: <span class="code-str">"Daffa Rifqi"</span>,</div>
                  <div class="ps-3"><span class="code-var">role</span>: <span class="code-str">"Web Dev & PM"</span>,</div>
                  <div class="ps-3"><span class="code-var">education</span>: <span class="code-str">"Unindra"</span>,</div>
                  <div class="ps-3"><span class="code-var">skills</span>: [<span class="code-str">"PHP"</span>, <span class="code-str">"Laravel"</span>,</div>
                  <div class="ps-4"><span class="code-str">"MySQL"</span>, <span class="code-str">"XAMPP"</span>, <span class="code-str">"PM"</span>],</div>
                  <div class="ps-3"><span class="code-var">passion</span>: <span class="code-str">"Building web apps"</span></div>
                  <div>};</div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- FEATURED PROJECTS SECTION -->
    <section id="projects" class="projects-section">
      <div class="container" data-aos="fade-up">
        
        <div class="text-center mb-5 projects-heading">
          <div class="section-tag">
            FEATURED PROJECTS
          </div>
          <h2 class="section-title section-title-center">
            Some of My Recent Work
            <span class="title-underline"></span>
          </h2>
          <p class="hero-desc text-center mx-auto" style="max-width: 650px;">
            Klik pada salah satu project di bawah untuk melihat rincian arsitektur, penjelasan lengkap, bahasa pemrograman & framework yang digunakan, galeri screenshot, serta dampak implementasi.
          </p>
        </div>

        <div class="row g-4 justify-content-center">
          
          <?php foreach ($projects as $p): ?>
            <div class="col-lg-4 col-md-6">
              <div class="project-card" style="cursor: pointer;" onclick="window.location.href='project-details.php?id=<?php echo urlencode($p['id']); ?>'">
                <div class="project-img-wrapper">
                  <span class="project-num-badge"><?php echo htmlspecialchars($p['num']); ?></span>
                  <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['title']); ?>" class="project-img">
                </div>
                <div class="project-body">
                  <h3 class="project-title"><?php echo htmlspecialchars($p['short_title']); ?></h3>
                  <p class="project-desc">
                    <?php echo htmlspecialchars($p['short_desc']); ?>
                  </p>
                  
                  <div class="mb-3 d-flex flex-wrap gap-1">
                    <?php foreach (array_slice($p['tags'], 0, 3) as $t): ?>
                      <span class="badge" style="background: rgba(139, 92, 246, 0.15); border: 1px solid rgba(139, 92, 246, 0.3); color: #c4b5fd; font-size: 0.7rem; font-weight: 500;">
                        <?php echo htmlspecialchars($t); ?>
                      </span>
                    <?php endforeach; ?>
                  </div>

                  <a href="project-details.php?id=<?php echo urlencode($p['id']); ?>" class="project-link mt-auto">
                    View Project <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>

        <!-- Pagination Dots -->
        <div class="pagination-dots">
          <span class="page-dot active"></span>
          <span class="page-dot"></span>
          <span class="page-dot"></span>
        </div>

      </div>
    </section>

    <!-- CERTIFICATES SECTION (SERTIFIKASI & KOMPETENSI) -->
    <section id="certificates" class="certificates-section">
      <div class="container" data-aos="fade-up">
        
        <div class="text-center mb-5">
          <div class="section-tag">
            SERTIFIKASI & KOMPETENSI
          </div>
          <h2 class="section-title section-title-center">
            Sertifikasi & Kualifikasi Profesional
            <span class="title-underline"></span>
          </h2>
          <p class="hero-desc text-center mx-auto" style="max-width: 680px;">
            Sertifikat resmi penyelesaian simulasi pekerjaan industri di bidang Rekayasa Perangkat Lunak dan Manajemen Proyek.
          </p>
        </div>

        <div class="row g-4 justify-content-center">
          <?php foreach ($certificates as $cert): ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="cert-card">
                <div class="cert-img-wrapper">
                  <img src="<?php echo htmlspecialchars($cert['image']); ?>" alt="<?php echo htmlspecialchars($cert['title']); ?>" class="cert-img">
                </div>
                <div class="cert-body">
                  <div class="cert-issuer-badge">
                    <i class="bi bi-patch-check-fill"></i> <?php echo htmlspecialchars($cert['issuer']); ?>
                  </div>
                  <h3 class="cert-title"><?php echo htmlspecialchars($cert['title']); ?></h3>
                  <div class="cert-date">
                    <i class="bi bi-calendar3 me-1"></i> Selesai: <?php echo htmlspecialchars($cert['date']); ?>
                  </div>
                  <p class="cert-desc">
                    <?php echo htmlspecialchars($cert['description']); ?>
                  </p>

                  <div class="cert-tags-row">
                    <?php foreach ($cert['tags'] as $tag): ?>
                      <span class="cert-tag-pill"><?php echo htmlspecialchars($tag); ?></span>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section>

        <!-- Subfooter Copyright Bar -->
        <div class="subfooter-bar">
          <div>© 2026 Daffa Rifqi Al Faiz. All rights reserved.</div>
          <div>CodeCraft Developer Portfolio</div>
        </div>

      </div>
    </section>

  </main>

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