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
    <div class="events">
      <div class="events-item">
        <h3><?= $translation->t('pages.events.angebot.h3_1') ?></h3>
        <p><?= $translation->t('pages.events.angebot.t1') ?></p>
        <h3><?= $translation->t('pages.events.angebot.h3_2') ?></h3>
        <p><?= $translation->t('pages.events.angebot.t2') ?></p>
        <h3><?= $translation->t('pages.events.angebot.h3_3') ?>:</h3>
        <p>- <?= $translation->t('pages.events.angebot.t3') ?></p>
        <p>- <?= $translation->t('pages.events.angebot.t4') ?></p>
        <p>- <?= $translation->t('pages.events.angebot.t5') ?></p>
        <p>- <?= $translation->t('pages.events.angebot.t6') ?></p>
        <p>- <?= $translation->t('pages.events.angebot.t7') ?></p>
        <p>- <?= $translation->t('pages.events.angebot.t8') ?></p>
        <p>- <?= $translation->t('pages.events.angebot.t9') ?></p>
        <p>- <?= $translation->t('pages.events.angebot.t10') ?></p>
        <h3><?= $translation->t('pages.events.angebot.h3_4') ?></h3>
        <p><?= $translation->t('pages.events.angebot.t11') ?></p>
        <h3><?= $translation->t('pages.events.angebot.h3_5') ?></h3>
        <p><?= $translation->t('pages.events.angebot.t12') ?></p>
        <p><?= $translation->t('pages.events.angebot.t13') ?></p>
        <p><?= $translation->t('pages.events.angebot.t14') ?></p>
        <p><?= $translation->t('pages.events.angebot.t15') ?>:</p>
        <p>- <a href="www.ristorantecasablanca.ch">www.ristorantecasablanca.ch</a></p>
        <p>- <a href="www.gelateria-italia.ch">www.gelateria-italia.ch</a></p>
        <p>- <a href="www.stuto-antipasti.com">www.stuto-antipasti.com</a></p>
        <p>- <a href="www.emmenparkcatering.ch">www.emmenparkcatering.ch</a></p>
        <p>- <a href="www.cucinaarte.ch">www.cucinaarte.ch</a></p>
        <p>- <a href="www.sabsins-thai.ch">www.sabsins-thai.ch</a></p>
        <h3><?= $translation->t('pages.events.angebot.h3_6') ?></h3>
        <p><?= $translation->t('pages.events.angebot.t16') ?></p>
        <p><?= $translation->t('pages.events.angebot.t17') ?></p>
      </div>
      <div class="events-item">
        <h3><?= $translation->t('pages.events.angebot.h3_7') ?></h3>
        <p><?= $translation->t('pages.events.angebot.t18') ?></p>
        <h3><?= $translation->t('pages.events.angebot.h3_3') ?></h3>
        <p>- <?= $translation->t('pages.events.angebot.t19') ?></p>
        <p>- <?= $translation->t('pages.events.angebot.t20') ?></p>
        <p>- <?= $translation->t('pages.events.angebot.t21') ?></p>
        <p>- <?= $translation->t('pages.events.angebot.t22') ?></p>
        <h3><?= $translation->t('pages.events.angebot.h3_6') ?></h3>
        <p>- <?= $translation->t('pages.events.angebot.t16') ?></p>
        <p>- <?= $translation->t('pages.events.angebot.t17') ?></p>
      </div>
    </div>
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
        <p>23:30</p>
        <p><?= $translation->t('pages.tsc.angebot.samstag') ?></p>
        <p>10:00</p>
        <p>23:30</p>
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
          <div class="events-grid"> 
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
            <p class="item-center">516.-</p>
            <p class="item-center">384.-</p>
            <p><?= $translation->t('pages.tsc.angebot.alle-weiteren') ?> 30min</p>
            <p class="item-center">114.-</p>
            <p class="item-center">84.-</p>
            <span></span>
            <span></span>
            <span></span>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info1') ?></hp>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info2') ?></hp>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info3') ?></hp>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info4') ?></hp>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info5') ?></hp>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info6') ?></hp>
          </div>
        </div>
        <div class="tab-pane" id="studenten" role="tabpanel" aria-labelledby="studenten-tab">
          <div class="events-grid"> 
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
            <p><?= $translation->t('pages.tsc.angebot.startgeb') ?></p>
            <p class="nm"><?= $translation->t('pages.tsc.angebot.nicht-moeglich') ?></p>
            <p class="item-center">222.-</p>
            <p><?= $translation->t('pages.tsc.angebot.alle-weiteren') ?> 30min</p>
            <p class="item-center">48.-</p>
            <span></span>
            <span></span>
            <span></span>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info1') ?></hp>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info2') ?></hp>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info3') ?></hp>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info4') ?></hp>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info5') ?></hp>
            <hp class="tarife-mwst"><?= $translation->t('pages.tsc.angebot.tarif-info6') ?></hp>
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