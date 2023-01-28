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
    include '../templates/header_sim.php';
  ?>

  <main id="main-shop">
    <h1><?= $translation->t('pages.sim.shop.title') ?></h1>
    <div class="sim-items">
      <div class="simulator">
        <h2>race</h2>
        <img src="../images/angebot_3.jpg" alt="simulator race version">
        <p><?= $translation->t('pages.sim.shop.text-race') ?></p>
        <button onclick="location.href='sim-race.php'" type="button">
          <?= $translation->t('pages.sim.shop.button') ?>
        </button>
      </div>
      <div class="simulator">
        <h2>pro</h2>
        <img src="../images/angebot_3.jpg" alt="simulator pro version">
        <p><?= $translation->t('pages.sim.shop.text-pro') ?></p>
        <button onclick="location.href='sim-pro.php'" type="button">
          <?= $translation->t('pages.sim.shop.button') ?>
        </button>
      </div>
      </div>
  </main>

</body>
</html>