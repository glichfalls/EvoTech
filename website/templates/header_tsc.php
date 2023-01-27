<header>
  <nav id="mobile-nav">
    <span class="toggle" onclick="sideMenuOpen()">
      <a href="#"><i class="fa-sharp fa-solid fa-bars"></i></a>
    </span>
    <img src="../images/logo.png" alt="TopSpeedCenter Logo">
  </nav>
  <nav id="desktop-nav">
    <a href="/<?= $translation->locale() ?>/topspeedcenter.php">home</a>
    <a href="kontakt.php"><?= $translation->t('pages.tsc.header.kontakt') ?></a>
    <a href="angebot.php"><?= $translation->t('pages.tsc.header.angebot') ?></a>
    <a href="buchen.php"><?= $translation->t('pages.tsc.header.buchen') ?></a>
    <a href="impressum.php"><?= $translation->t('pages.tsc.header.impressum') ?></a>
    <a href="/en/#">EN</a>
    <a href="../index.php"><img src="../../images/logo.png" alt=""></a>
  </nav>
  <div id="side-menu">
    <div class="side-top">
      <div class="side-social">
        <a href="https://tinyurl.com/2cpzted3"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://tinyurl.com/3xznjs3k"><i class="fa-brands fa-square-facebook"></i></a>
      </div>
      <span class="toggle" onclick="sideMenuClose()">
        <a href="#"><i class="fa-sharp fa-solid fa-xmark"></i></a>
      </span>
    </div>
    <div class="side-menu-links">
      <a href="index.php" class="active">home</a>
      <a href="kontakt.php"><?= $translation->t('pages.tsc.header.kontakt') ?></a>
      <a href="angebot.php"><?= $translation->t('pages.tsc.header.angebot') ?></a>
      <a href="buchen.php"><?= $translation->t('pages.tsc.header.buchen') ?></a>
      <a href="impressum.php"><?= $translation->t('pages.tsc.header.impressum') ?></a>
    </div>
    <div class="side-lang">
      <a href="/de/#">DE</a>
      <a href="/en/#">EN</a>
    </div>
  </div>
</header>