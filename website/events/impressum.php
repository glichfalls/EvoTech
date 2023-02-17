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
    include '../templates/header_events.php';
  ?>

  <main id="main-impressum">
    <h1><?= $translation->t('pages.tsc.impressum.title') ?></h1>
    <p>
    TopSpeedCenter GmbH<br>
    Glutz-Blotzheim-Strasse 3<br>
    4500 Solothurn<br><br>
    <?= $translation->t('pages.tsc.impressum.leitung') ?>:<br>
    Christoph Flury<br>
    Barbara Flury<br>
    Cyrille Flury<br>
    info@topspeedcenter.ch<br><br>
    <?= $translation->t('pages.tsc.impressum.register') ?><br>
    Firmen-Nr.: CHE-198.529.402<br>
    MwSt-Nr.: CHE-198.529.402
    </p>
  </main>

</body>
</html>