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
  $mail->Host = "asmtp.mail.hostpoint.ch";
  $mail->SMTPAuth = true;
  $mail->Username = "info@topspeedcenter.ch";
  $mail->Password = 'test_$_888test';

  $mail->setFrom("robin.ingold22@gmail.com", "Webformular");
  $mail->addAddress("info@topspeedcenter.ch", "SimCenter");

  $mail->Subject = "Webanfrage Sim-Center";
  $mail->Body = 
  "Vorname: " . $_POST["vorname"] .
  "\r\n \r\n Nachname: " . $_POST["nachname"] .
  "\r\n \r\n Email: " . $_POST["email"] .
  "\r\n \r\n Nachricht: \r\n" . $_POST["message"];

  if($mail->send()) {
  }
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
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>TopSpeedCenter Solothurn</title>
</head>
<body>

  <?php
    include '../templates/header_tsc.php';
  ?>

  <main id="main-contact">
    <div class="contact-form">
      <h1><?= $translation->t('pages.tsc.kontakt.title') ?></h1>
      <p><?= $translation->t('pages.tsc.kontakt.subtext') ?></p>
      <form name="contact" method="post" action="kontakt.php" onsubmit="return validateForm()">
        <input type="text" id="vorname" name="vorname" value="" placeholder="<?= $translation->t('pages.tsc.kontakt.vorname') ?>">
        <input type="text" id="nachname" name="nachname" value="" placeholder="<?= $translation->t('pages.tsc.kontakt.nachname') ?>">
        <input type="email" id="email" name="email" value="" placeholder="Email">
        <textarea id="message" name="message" value="" placeholder="<?= $translation->t('pages.tsc.kontakt.mitteilung') ?>" rows="7"></textarea>
        <button type="submit" name="submit"><?= $translation->t('pages.tsc.kontakt.senden') ?></button>
      </form>
    </div>
    <div class="contact-info">
      <p><?= $translation->t('pages.tsc.kontakt.info') ?>:<br><br>
      TOPSPEEDCENTER SOLOTHURN<br>
      Glutz-Blotzheim-Strasse 3<br>
      4500 Solothurn<br>
      <?= $translation->t('pages.tsc.kontakt.schweiz') ?><br><br>
      +41 32 310 76 60<br>
      <a href="mailto:info@topspeedcenter.ch">info@topspeedcenter.ch</a></p>
      <div class="contact-icons">
        <a href="https://tinyurl.com/2cpzted3"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://tinyurl.com/3xznjs3k"><i class="fa-brands fa-square-facebook"></i></a>
      </div>
      <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2710.687223223171!2d7.5273279201100145!3d47.20313416934962!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791d800a3a1fc97%3A0xe8eae74959be4f27!2sGlutz-Blotzheim-Strasse%203%2C%204500%20Solothurn!5e0!3m2!1sen!2sch!4v1673297725943!5m2!1sen!2sch" width="600px" height="450px; style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </main>

</body>
<script type="text/javascript" src="../assets/code.js"></script>
</html>