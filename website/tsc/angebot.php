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
        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
          <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
          <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
        </div>
        <div id="London" class="tabcontent">
        <div class="divTable" style="width: 30%;border: 1px solid #000;" >
          <div class="divTableBody">
          <div class="divTableRow">
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          </div>
          <div class="divTableRow">
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          </div>
          <div class="divTableRow">
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          </div>
          <div class="divTableRow">
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          </div>
          <div class="divTableRow">
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          <div class="divTableCell">&nbsp;</div>
          </div>
          </div>
          </div>
        </div>

        <div id="Paris" class="tabcontent">
          <h3>Paris</h3>
          <p>Paris is the capital of France.</p> 
        </div>

        <div id="Tokyo" class="tabcontent">
          <h3>Tokyo</h3>
          <p>Tokyo is the capital of Japan.</p>
        </div>
      </div>
    </span>
  </main>
</body>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</html>