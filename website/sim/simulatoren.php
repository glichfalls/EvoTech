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

  <main id="main-home">
    <div class="main-bg home-sim"></div>
      <div class="header-text">
        <h1>TopSpeedCenter</h1>
        <h2><?= $translation->t('pages.sim.home.simulatoren') ?></h2>
        <p>
          <?= $translation->t('pages.sim.home.sub-text') ?>
        </p>
      </div>
      <div class="main-bottom">
        <button onclick="location.href='shop.php'" type="button">
        <?= $translation->t('pages.sim.home.button') ?>
        </button>
        <p>
          <?= $translation->t('pages.sim.home.bottom-text') ?>
        </p>
      </div>
  </main>

</body>
</html>