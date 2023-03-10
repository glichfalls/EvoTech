<?php

include '../bootstrap.php'; global $formData;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../assets/PHPMailer/PHPMailer.php';
require '../assets/PHPMailer/SMTP.php';
require '../assets/PHPMailer/Exception.php';

if(isset($_POST["submit"])) {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "robin.ingold22@gmail.com";
    $mail->Password = "erxkhoqfkmmitout";

    $mail->setFrom("robin.ingold22@gmail.com", "sender");
    $mail->addAddress("robin.ingold@hotmail.com", "robin");

    $mail->Subject = "Webanfrage Simulatoren";

    $mail->isHTML();
    ob_start();
    require 'mail.php';
    $body = ob_get_clean();
    ob_end_clean();

    $mail->Body = $body;
    $mail->send();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../assets/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <title>TopSpeedCenter Solothurn</title>
</head>
<body>


  <?php
    include '../templates/header_sim.php';
  ?>

  <main id="main-sim-item">
    <h1><?= $translation->t('pages.sim.shop.sim-pro.title') ?></h1>
    <div class="all-item">
      <div class="sim-item">
        <div class="slideshow">
          <div class="slides">
            <img id="slide_1" src="../images/sneaker/img09.jpg" alt="" class="slide active">
            <img id="slide_2" src="../images/sneaker/img17.jpg" alt="" class="slide">
            <img id="slide_3" src="../images/sneaker/img25.jpg" alt="" class="slide">
            <img id="slide_4" src="../images/sneaker/img01.jpg" alt="" class="slide">
          </div>
          <div class="right"></div>
        </div>
        <div class="thumbnails">
          <img id="thumbnail_1" src="../images/sneaker/img01.jpg" alt="" class="thumbnail">
          <img id="thumbnail_2" src="../images/sneaker/img09.jpg" alt="" class="thumbnail">
          <img id="thumbnail_3" src="../images/sneaker/img17.jpg" alt="" class="thumbnail">
          <img id="thumbnail_4" src="../images/sneaker/img25.jpg" alt="" class="thumbnail">
        </div>
        <div class="sim-text">
          <p><?= $translation->t('pages.sim.shop.sim-pro.desc') ?></p><br>
          <p><?= $translation->t('pages.sim.shop.lizenz.one') ?>:</p>
          <p>- <?= $translation->t('pages.sim.shop.lizenz.two') ?></p>
          <p>- <?= $translation->t('pages.sim.shop.lizenz.three') ?></p>
          <p>- <?= $translation->t('pages.sim.shop.lizenz.four') ?></p><br>
          <p>- <?= $translation->t('pages.sim.shop.desc1') ?></p>
          <p>- <?= $translation->t('pages.sim.shop.desc2') ?></p><br>
          <p>- <?= $translation->t('pages.sim.shop.desc3') ?></p>
          <img src="" alt="" class="nummer">
          <img src="" alt="" class="farben">
          <img src="" alt="" class="sitz">
        </div>
      </div>
      <div class="item-all-right">
        <form id="form-container" method="post" onsubmit="return validateSim()">
        <div class="accordion" id="formAccordion">
          <h2>Zwischentotal : <span id="total">12558</span> CHF</h2>
          <?php foreach ($formDataPro as $mainCategory => $categories): ?>
            <div class="accordion-item">
              <h2 class="accordion-header my-0" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $mainCategory ?>">
                  <?= $mainCategory ?>
                </button>
              </h2>
            <div id="<?= $mainCategory ?>" class="accordion-collapse collapse" data-bs-parent="#formAccordion">
              <div class="accordion-body">
                <?php foreach ($categories as $category => $row): ?>
                    <p><?= $category ?></p>
                    <?php if(is_array($row)): ?>
                      <select class="form-select" name="<?= $category ?>">
                        <?php foreach ($row as $column): ?>
                          <option value="<?= $column['label'] ?>" data-price="<?= $column['price'] ?? 0 ?>">
                            <?= $column['label'] ?>
                          </option>
                        <?php endforeach ?>
                      </select>
                    <?php elseif($row === 'input'): ?>
                      <input class="form-control" type="text" name="<?= $category ?>" />
                    <?php elseif($row === 'textarea'): ?>
                       <textarea class="form-control" name="<?= $category ?>"></textarea>
                    <?php endif ?>
                <?php endforeach ?>
              </div>
            </div>

            </div>
          <?php endforeach ?>
        </div>
          <input class="form-control" type="text" id="vorname" name="vorname" value="" placeholder="Vorname">
          <input class="form-control" type="text" id="nachname" name="nachname" value="" placeholder="Nachname">
          <input class="form-control" type="text" id="strasse" name="strasse" value="" placeholder="Strasse, Nr.">
          <input class="form-control" type="text" id="ort" name="ort" value="" placeholder="PLZ, Ort">
          <input class="form-control" type="email" id="email" name="email" value="" placeholder="Email">
          <input class="form-control" type="text" id="tel" name="tel" value="" placeholder="Tel. Nr.">
          <button type="submit" name="submit"><?= $translation->t('pages.sim.shop.send') ?></button>
        </form>
      </div>
    </div>
  </main>
</body>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../assets/code.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</html>