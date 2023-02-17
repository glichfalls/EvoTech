<?php 

include '../bootstrap.php'; global $formData;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../assets/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../assets/code.js"></script>
  <title>TopSpeedCenter Solothurn</title>
</head>
<body>

  <?php
    include '../templates/header_tsc.php';
  ?>

  <main id="main-home">
    <div class="main-bg"></div>
      <div class="header-text">
        <h1>TopSpeedCenter</h1>
        <h2>sim racing</h2>
        <h2>solothurn</h2>
        <p>
          <?= $translation->t('pages.tsc.topspeedcenter.sub-text') ?> <a href="buchen.php" style="color: red;"><?= $translation->t('pages.tsc.topspeedcenter.buchungssystem') ?></a>, <?= $translation->t('pages.tsc.topspeedcenter.sub-text') ?>
        </p>
      </div>
      <div class="main-allg">
        <h2><?= $translation->t('pages.tsc.topspeedcenter.erwartet') ?>:</h2>
        <p>- <?= $translation->t('pages.tsc.topspeedcenter.erwartet1') ?></p>
        <p>- <?= $translation->t('pages.tsc.topspeedcenter.erwartet2') ?>:</p>
        <div class="main-profil">
          <p><?= $translation->t('pages.tsc.topspeedcenter.profil') ?></p>
          <p>Beginner</p>
          <p>Racer</p>
          <p>Expert</p>
          <p>Profi</p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.schaltung') ?></p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.automatisch') ?></p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.automatisch') ?></p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.manuell') ?></p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.manuell') ?></p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.ideallinie') ?></p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.ja') ?></p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.nein') ?></p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.nein') ?></p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.nein') ?></p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.abs') ?></p>
          <p>100%</p>
          <p>50%</p>
          <p>50%</p>
          <p>0%</p>
          <p><?= $translation->t('pages.tsc.topspeedcenter.schaden') ?></p>
          <p>0%</p>
          <p>0%</p>
          <p>50%</p>
          <p>100%</p>
        </div>
        <p>- <?= $translation->t('pages.tsc.topspeedcenter.erwartet3') ?></p>
        <p>- <?= $translation->t('pages.tsc.topspeedcenter.erwartet4') ?></p>
        <p>- <?= $translation->t('pages.tsc.topspeedcenter.erwartet5') ?></p>
        <p>- <?= $translation->t('pages.tsc.topspeedcenter.erwartet6') ?></p>
        <p>- <?= $translation->t('pages.tsc.topspeedcenter.erwartet7') ?></p>
        <p>- <?= $translation->t('pages.tsc.topspeedcenter.erwartet8') ?></p>
        <p><?= $translation->t('pages.tsc.topspeedcenter.erwartet9') ?></p>
        <h2><?= $translation->t('pages.tsc.topspeedcenter.mitbringen') ?>:</h2>
        <p>- <?= $translation->t('pages.tsc.topspeedcenter.schuhe') ?>:</p>
        <p>- <?= $translation->t('pages.tsc.topspeedcenter.kleidung') ?>:</p>
        <p>- <?= $translation->t('pages.tsc.topspeedcenter.handschuhe') ?>:</p>
      </div>
      <div class="main-bottom">
        <button onclick="location.href='buchen.php'" type="button">
          <?= $translation->t('pages.tsc.topspeedcenter.button') ?>
        </button>
      </div>
  </main>

</body>
</html>