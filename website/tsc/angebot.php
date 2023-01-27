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

  <main id="main-angebot">
    <span>
      <h1><?= $translation->t('pages.tsc.angebot.title') ?></h1>
      <div class="angebot-items">
        <div class="angebot">
          <img src="../images/angebot_1.jpg" alt="">
          <p>
            <li><?= $translation->t('pages.tsc.angebot.f1-rennstrecken') ?><br></li>
            <li><?= $translation->t('pages.tsc.angebot.gt-rennstrecken') ?><br></li>
            <li><?= $translation->t('pages.tsc.angebot.weitereRS') ?></li>
          </p>
        </div>
        <div class="angebot">
          <img src="../images/angebot_2.jpg" alt="">
          <p>
          <li><?= $translation->t('pages.tsc.angebot.f1-boliden') ?><br></li>
          <li><?= $translation->t('pages.tsc.angebot.gt-boliden') ?><br></li>
          <li><?= $translation->t('pages.tsc.angebot.weitereRW') ?></li>
          </p>
        </div>
        <div class="angebot">
          <img src="../images/angebot_3.jpg" alt="">
          <p>
            <?= $translation->t('pages.tsc.angebot.angebot3') ?>
          </p>
        </div>
      </div>
    </span>
  </main>
</body>
</html>