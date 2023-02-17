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

  <main id="main-angebot">
    <h1><?= $translation->t('pages.tsc.angebot.title') ?></h1>
      <div class="times">
        <div class="zeiten"> 
          <h2><?= $translation->t('pages.tsc.angebot.o-zeiten') ?></h2>
          <span></span>
          <span></span>
          <p><?= $translation->t('pages.tsc.angebot.mo-do') ?></p>
          <p>07:00</p>
          <p>22:00</p>
          <p><?= $translation->t('pages.tsc.angebot.freitag') ?></p>
          <p>07:00</p>
          <p>23:00</p>
          <p><?= $translation->t('pages.tsc.angebot.samstag') ?></p>
          <p>10:00</p>
          <p>23:00</p>
          <p><?= $translation->t('pages.tsc.angebot.sonntag') ?></p>
          <p>10:00</p>
          <p>19:00</p>
          <p><?= $translation->t('pages.tsc.angebot.feiertage') ?></p>
          <p><?= $translation->t('pages.tsc.angebot.siehe-home') ?></p>
        </div>
        <div class="nebenzeiten"> 
          <h2><?= $translation->t('pages.tsc.angebot.n-zeiten') ?></h2>
          <span></span>
          <p><?= $translation->t('pages.tsc.angebot.hauptzeiten-mo-fr') ?></p>
          <p class="time"><?= $translation->t('pages.tsc.angebot.ab') ?> 16:00</p>
          <p><?= $translation->t('pages.tsc.angebot.wochenende-feiertage') ?></p>
          <p class="time"><?= $translation->t('pages.tsc.angebot.ganzer-tag') ?></p>
          <p><?= $translation->t('pages.tsc.angebot.nebenzeiten-mo-fr') ?></p>
          <p class="time"><?= $translation->t('pages.tsc.angebot.bis') ?> 16:00</p>
        </div>
      </div>
      <div class="tarife">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active text-danger" id="erwachsene-tab" data-bs-toggle="tab" data-bs-target="#erwachsene" type="button" role="tab" aria-controls="erwachsene" aria-selected="true">
            <?= $translation->t('pages.tsc.angebot.erwachsene') ?>
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-danger" id="studenten-tab" data-bs-toggle="tab" data-bs-target="#studenten" type="button" role="tab" aria-controls="studenten" aria-selected="false">
            <?= $translation->t('pages.tsc.angebot.studenten') ?>
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="erwachsene" role="tabpanel" aria-labelledby="erwachsene-tab">
            <div class="tarife-grid"> 
              <h2 class="table-title"><?= $translation->t('pages.tsc.angebot.tarife') ?></h2>
              <h4 class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.einzelfahrt') ?></h4>
              <span></span>
              <span></span>
              <span></span>
              <p class="one-three"><?= $translation->t('pages.tsc.angebot.6sim') ?></p>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.hauptzeit') ?></p>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.nebenzeit') ?></p>
              <p><?= $translation->t('pages.tsc.angebot.startgeb') ?> </p>
              <p class="item-center">29.-</p>
              <p class="item-center">22.-</p>
              <p><?= $translation->t('pages.tsc.angebot.alle-weiteren') ?> 30min</p>
              <p class="item-center">19.-</p>
              <p class="item-center">14.-</p>
              <span></span>
              <span></span>
              <span></span>
              <h4 class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.gutscheine') ?></h4>
              <p class="two">1x 30min</p>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.hauptzeit') ?></p>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.nebenzeit') ?></p>
              <p class="item-center">29.-</p>
              <p class="item-center">22.-</p>
              <p>5x 30min</p>
              <p class="item-center">145.-</p>
              <p class="item-center">110.-</p>
              <p>10x 30min(Bonus 1x 30min)</p>
              <p class="item-center">290.-</p>
              <p class="item-center">220.-</p>
              <span></span>
              <span></span>
              <span></span>
              <p>1x 60min</p>
              <p class="item-center">48.-</p>
              <p class="item-center">36.-</p>
              <p>5x 60min(Bonus 1x 30min)</p>
              <p class="item-center">240.-</p>
              <p class="item-center">180.-</p>
              <p>10x 60min(Bonus 3x 30min)</p>
              <p class="item-center">480.-</p>
              <p class="item-center">360.-</p>
              <span></span>
              <span></span>
              <span></span>
              <h4 class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.lizenzen') ?></h4>
              <p class="three">Gold - Semi-License</p>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.halbj-karte') ?></p>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.jahreskarte') ?></p>
              <p class="item-center">335.-</p>
              <p class="item-center">450.-</p>
              <p>Family - Semi-License</p>
              <p class="item-center">450.-</p>
              <p class="item-center">599.-</p>
              <p></p>
            </div>
          </div>
          <div class="tab-pane" id="studenten" role="tabpanel" aria-labelledby="studenten-tab">
            <div class="tarife-grid"> 
              <h2 class="table-title"><?= $translation->t('pages.tsc.angebot.tarife') ?></h2>
              <h4 class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.einzelfahrt') ?></h4>
              <span></span>
              <span></span>
              <span></span>
              <p class="one">Start 30min</p>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.hauptzeit') ?></p>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.nebenzeit') ?></p>
              <p class="item-center">17.-</p>
              <p class="item-center">13.-</p>
              <p><?= $translation->t('pages.tsc.angebot.alle-weiteren') ?> 30min</p>
              <p class="item-center">11.-</p>
              <p class="item-center">8.-</p>
              <span></span>
              <span></span>
              <span></span>
              <h4 class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.gutscheine') ?></h4>
              <p class="two">1x 30min</p>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.hauptzeit') ?></p>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.nebenzeit') ?></p>
              <p class="item-center">17.-</p>
              <p class="item-center">13.-</p>
              <p>5x 30min</p>
              <p class="item-center">85.-</p>
              <p class="item-center">65.-</p>
              <p>10x 30min(Bonus 1x 30min)</p>
              <p class="item-center">170.-</p>
              <p class="item-center">130.-</p>
              <span></span>
              <span></span>
              <span></span>
              <p>1x 60min</p>
              <p class="item-center">28.-</p>
              <p class="item-center">21.-</p>
              <p>5x 60min(Bonus 1x 30min)</p>
              <p class="item-center">140.-</p>
              <p class="item-center">105.-</p>
              <p>10x 60min(Bonus 3x 30min)</p>
              <p class="item-center">280.-</p>
              <p class="item-center">210.-</p>
              <span></span>
              <span></span>
              <span></span>
              <h4 class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.lizenzen') ?></h4>
              <p class="three">Gold - Semi-License</p>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.halbj-karte') ?></p>
              <p class="item-center"><?= $translation->t('pages.tsc.angebot.jahreskarte') ?></p>
              <p class="item-center">302.-</p>
              <p class="item-center">405.-</p>
              <p>Family - Semi-License</p>
              <p class="item-center license"><?= $translation->t('pages.tsc.angebot.inbegriffen') ?></p>
              <p class="item-center"></p>
            </div>
          </div>
          <div class="zusatzinfos-div">
            <h3><?= $translation->t('pages.tsc.angebot.zusatzinformationen.title') ?></h3>
            <hr>
            <div class="zusatzinformationen">
              <p>1)</p>
              <p><span><?= $translation->t('pages.tsc.angebot.zusatzinformationen.p-two') ?></span> <?= $translation->t('pages.tsc.angebot.zusatzinformationen.p-two-two') ?></p>
              <p>2)</p>
              <p><span><?= $translation->t('pages.tsc.angebot.zusatzinformationen.p-three') ?></span> <?= $translation->t('pages.tsc.angebot.zusatzinformationen.p-three-two') ?></p>
            </div>
          </div>
        </div>
      </div>
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