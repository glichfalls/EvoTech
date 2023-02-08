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
      <div class="tarife">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active text-danger" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
              Erwachsene
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-danger" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
            Familien-Ermässigung 2. erw. Person
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-danger" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">
            Schüler, Lehrlinge und Studenten
            </button>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">Content 1</div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">Content 2</div>
          <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">Content 3</div>
        </div>

      </div>
    </span>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../assets/code.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script>

var firstTabEl = document.querySelector('#myTab li:last-child a')
  var firstTab = new bootstrap.Tab(firstTabEl)

  firstTab.show()

</script>
</html>