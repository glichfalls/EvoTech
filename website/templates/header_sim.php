<header>
  <nav id="mobile-nav">
    <span class="toggle" onclick="sideMenuOpen()">
      <a href="#"><i class="fa-sharp fa-solid fa-bars"></i></a>
    </span>
    <img src="../images/logo.png" alt="TopSpeedCenter Logo">
  </nav>
  <nav id="desktop-nav">
    <a href="/<?= $translation->locale() ?>/simulatoren.php">home</a>
    <a href="kontakt_sim.php"><?= $translation->t('pages.sim.header.kontakt') ?></a>
    <a href="shop.php"><?= $translation->t('pages.sim.header.simulatoren') ?></a>
    <a href="impressum_sim.php"><?= $translation->t('pages.sim.header.impressum') ?></a>
    <a href="<?= $translation->switchLanguage() ?>"><?= $translation->oppositeLocale() ?></a>
    <a href="../index.php"><img src="../images/logo.png" alt=""></a>
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
      <a href="index.php">home</a>
      <a href="kontakt.php"><?= $translation->t('pages.sim.header.kontakt') ?></a>
      <a href="shop.php"><?= $translation->t('pages.sim.header.simulatoren') ?></a>
      <a href="impressum.php"><?= $translation->t('pages.sim.header.impressum') ?></a>
    </div>
    <div class="side-lang">
      <a href="<?= $translation->switchLanguage() ?>"><?= $translation->oppositeLocale() ?></a>
    </div>
  </div>
</header>