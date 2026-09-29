<?php
require_once __DIR__ . '/projects-data.php';

$current_id = isset($_GET['id']) ? trim($_GET['id']) : 'putik-bouquet';
if (!isset($projects[$current_id])) {
    $current_id = 'putik-bouquet';
}
$project = $projects[$current_id];
$other_projects = array_filter($projects, function ($p) use ($current_id) {
    return $p['id'] !== $current_id;
});
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <base href="<?php echo (strpos($_SERVER['REQUEST_URI'] ?? '', '/project/') !== false) ? '../' : './'; ?>">
  <title><?php echo htmlspecialchars($project['title']); ?> — Daffa Rifqi Al Faiz</title>
  <meta name="description" content="<?php echo htmlspecialchars($project['short_desc']); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars(implode(', ', $project['tags'])); ?>">

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
      
      <!-- Project Details Content -->
      <main class="col-12 split-content-col project-details-full-width">
        
        <!-- Back Link -->
        <a href="index.php#projects" class="project-back-btn">
          <i class="bi bi-arrow-left"></i> Kembali ke semua project
        </a>

        <!-- Project Title -->
        <h1 class="project-hero-title"><?php echo htmlspecialchars($project['title']); ?></h1>

        <!-- Project Meta (Year · Role/Category · Status) -->
        <div class="project-hero-meta">
          <?php echo htmlspecialchars($project['meta']); ?>
        </div>

        <!-- Tech Badges Row -->
        <div class="project-hero-tags">
          <?php foreach ($project['tags'] as $tag): ?>
            <span class="project-pill-tag">
              <span class="tag-dot"></span> <?php echo htmlspecialchars($tag); ?>
            </span>
          <?php endforeach; ?>
        </div>

        <!-- Main Featured Showcase Image -->
        <div class="project-main-showcase" data-aos="fade-up">
          <a href="<?php echo htmlspecialchars($project['image']); ?>" class="glightbox" data-gallery="main-project" title="<?php echo htmlspecialchars($project['title']); ?>">
            <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="project-featured-img">
            <div class="showcase-zoom-overlay">
              <i class="bi bi-zoom-in me-1"></i> Perbesar Gambar
            </div>
          </a>
        </div>

        <!-- Impact Callout Card (Dampak:) -->
        <div class="project-impact-box" data-aos="fade-up">
          <div class="impact-badge-header">
            <i class="bi bi-stars"></i> Dampak:
          </div>
          <p class="impact-body-text">
            <?php echo htmlspecialchars($project['impact']); ?>
          </p>
        </div>

        <!-- Full Detailed Explanation (Penjelasan Lengkap) -->
        <div class="project-rich-desc" data-aos="fade-up">
          <?php echo $project['description']; ?>
        </div>

        <!-- Action Links -->
        <div class="project-actions-row" data-aos="fade-up">
          <?php if (!empty($project['live_url'])): ?>
            <a href="<?php echo htmlspecialchars($project['live_url']); ?>" target="_blank" class="btn-primary-purple">
              Kunjungi Website (putikbouquet.com) <i class="bi bi-box-arrow-up-right ms-1"></i>
            </a>
          <?php endif; ?>
          <a href="index.php#projects" class="btn-secondary-outline">
            Kembali ke Daftar Project <i class="bi bi-grid ms-1"></i>
          </a>
          <a href="index.php#certificates" class="btn-secondary-outline">
            Lihat Sertifikat <i class="bi bi-award ms-1"></i>
          </a>
        </div>

        <!-- Gallery Section -->
        <div class="project-gallery-section" data-aos="fade-up">
          <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
            <h3 class="detail-block-title mb-0">Gallery (<?php echo count($project['gallery']); ?> Screenshots)</h3>
            <span class="text-dim" style="font-size: 0.8rem; font-family: var(--font-code);">Klik gambar untuk pratinjau penuh</span>
          </div>
          <div class="row g-3">
            <?php foreach ($project['gallery'] as $idx => $gImg): ?>
              <div class="col-md-4 col-sm-6 col-6">
                <a href="<?php echo htmlspecialchars($gImg); ?>" class="gallery-thumb-card glightbox" data-gallery="project-gallery" title="<?php echo htmlspecialchars($project['short_title']); ?> — Screenshot <?php echo $idx + 1; ?> dari <?php echo count($project['gallery']); ?>">
                  <img src="<?php echo htmlspecialchars($gImg); ?>" alt="Screenshot <?php echo $idx + 1; ?>" loading="lazy">
                  <span class="gallery-badge-num">#<?php echo sprintf('%02d', $idx + 1); ?></span>
                  <div class="gallery-overlay-hint">
                    <i class="bi bi-zoom-in"></i>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Project Lainnya Section (Other Projects) -->
        <div class="other-projects-section" data-aos="fade-up">
          <h3 class="detail-block-title">Project Lainnya</h3>
          <div class="other-projects-list">
            <?php foreach ($other_projects as $other): ?>
              <a href="project-details.php?id=<?php echo urlencode($other['id']); ?>" class="other-project-card">
                <div class="other-card-thumb">
                  <img src="<?php echo htmlspecialchars($other['image']); ?>" alt="<?php echo htmlspecialchars($other['title']); ?>">
                </div>
                <div class="other-card-info">
                  <div class="other-card-title">
                    <span><?php echo htmlspecialchars($other['short_title']); ?></span>
                    <i class="bi bi-arrow-up-right"></i>
                  </div>
                  <div class="other-card-meta">
                    <?php echo htmlspecialchars($other['meta']); ?>
                  </div>
                  <p class="other-card-desc">
                    <?php echo htmlspecialchars($other['short_desc']); ?>
                  </p>
                  <div class="other-card-tags">
                    <?php foreach (array_slice($other['tags'], 0, 4) as $t): ?>
                      <span class="other-card-pill"><?php echo htmlspecialchars($t); ?></span>
                    <?php endforeach; ?>
                  </div>
                </div>
              </a>
            <?php endforeach; ?>
          </div>
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
