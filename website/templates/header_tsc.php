<header>
  <nav id="mobile-nav">
    <span class="toggle" onclick="sideMenuOpen()">
      <a href="#"><i class="fa-sharp fa-solid fa-bars"></i></a>
    </span>
    <a href="../index.php"><img src="../images/logo.png" alt="Logo"></a>
  </nav>
  <nav id="desktop-nav">
    <a href="topspeedcenter.php">home</a>
    <a href="angebot.php"><?= $translation->t('pages.tsc.header.angebot') ?></a>
    <a href="buchen.php"><?= $translation->t('pages.tsc.header.buchen') ?></a>
    <a href="kontakt.php"><?= $translation->t('pages.tsc.header.kontakt') ?></a>
    <a href="impressum.php"><?= $translation->t('pages.tsc.header.impressum') ?></a>
    <a href="<?= $translation->switchLanguage() ?>"><?= $translation->oppositeLocale() ?></a>
    <a href="../index.php"><img src="../images/logo.png" alt="Logo"></a>
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
      <a href="topspeedcenter.php" class="active">home</a>
      <a href="angebot.php"><?= $translation->t('pages.tsc.header.angebot') ?></a>
      <a href="buchen.php"><?= $translation->t('pages.tsc.header.buchen') ?></a>
      <a href="kontakt.php"><?= $translation->t('pages.tsc.header.kontakt') ?></a>
      <a href="impressum.php"><?= $translation->t('pages.tsc.header.impressum') ?></a>
    </div>
    <div class="side-lang">
      <a href="<?= $translation->switchLanguage() ?>"><?= $translation->oppositeLocale() ?></a>
    </div>
  </div>
</header>