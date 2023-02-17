<header>
  <nav id="mobile-nav">
    <span class="toggle" onclick="sideMenuOpen()">
      <a href="#"><i class="fa-sharp fa-solid fa-bars"></i></a>
    </span>
    <a href="../index.php"><img src="../images/logo.png" alt="logo"></a>
  </nav>
  <nav id="desktop-nav">
    <a href="events.php">home</a>
    <a href="angebot_ev.php"><?= $translation->t('pages.events.header.angebot') ?></a>
    <a href="catering.php"><?= $translation->t('pages.events.header.catering') ?></a>
    <a href="kontakt_ev.php"><?= $translation->t('pages.events.header.kontakt') ?></a>
    <a href="impressum.php"><?= $translation->t('pages.events.header.impressum') ?></a>
    <a href="<?= $translation->switchLanguage() ?>"><?= $translation->oppositeLocale() ?></a>
    <a href="../index.php"><img src="../images/logo.png" alt="logo"></a>
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
      <a href="events.php" class="active">home</a>
      <a href="angebot_ev.php"><?= $translation->t('pages.events.header.angebot') ?></a>
      <a href="catering.php"><?= $translation->t('pages.events.header.catering') ?></a>
      <a href="kontakt_ev.php"><?= $translation->t('pages.events.header.kontakt') ?></a>
      <a href="impressum.php"><?= $translation->t('pages.events.header.impressum') ?></a>
    </div>
    <div class="side-lang">
      <a href="<?= $translation->switchLanguage() ?>"><?= $translation->oppositeLocale() ?></a>
    </div>
  </div>
</header>