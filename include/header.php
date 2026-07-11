<header class="site-header" id="siteHeader">
  <div class="container header-inner">
    <a href="index.php" class="brand">
      <span class="brand-mark" aria-hidden="true">
        <img src="assets/images/logo.png" alt="Asher's Place logo" width="100" height="100">
      </span>
      <!-- <span class="brand-text">Asher's Place<em>Community Homes</em></span> -->
    </a>

    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>

    <nav class="main-nav" id="mainNav" aria-label="Primary">
      <a href="index.php" class="<?= ($currentPage == 'index.php') ? 'is-active' : ''; ?>">Home</a>

      <a href="about.php" class="<?= ($currentPage == 'about.php') ? 'is-active' : ''; ?>">About</a>

      <a href="services.php" class="<?= ($currentPage == 'services.php') ? 'is-active' : ''; ?>">What We Do</a>

      <a href="partner.php" class="<?= ($currentPage == 'partner.php') ? 'is-active' : ''; ?>">Partner With Us</a>

      <a href="community.php" class="<?= ($currentPage == 'community.php') ? 'is-active' : ''; ?>">Community</a>

      <a href="careers.php" class="<?= ($currentPage == 'careers.php') ? 'is-active' : ''; ?>">Careers</a>

      <a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'is-active' : ''; ?>">Contact</a>
    </nav>

    <div class="header-actions">
      <a href="partner.php" class="btn btn-ghost">Partner as a Landlord</a>
      <?php if ($currentPage !== 'index.php'): ?>
      <a href="donate.php" class="btn btn-gold">Donate</a>
      <?php endif; ?>
      <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<!-- ============ MOBILE NAV ============ -->
<div class="mobile-nav" id="mobileNav">
    <button class="mobile-nav-close" id="mobileNavClose" aria-label="Close menu">
      &times;
    </button>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="services.php">What We Do</a>
    <a href="partner.php">Partner With Us</a>

    <a href="community.php">Community</a>
    <a href="careers.php">Careers</a>
    <a href="contact.php">Contact</a>

    <div class="mobile-nav-cta">
      <a href="partner.php" class="btn btn-ghost-dark">Partner as a Landlord</a>
      <?php if ($currentPage !== 'index.php'): ?>
      <a href="donate.php" class="btn btn-gold">Donate</a>
      <?php endif; ?>
    </div>
  </div>