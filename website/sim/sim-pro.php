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
  $mail->Password = "tbhqmjafghaegojk";

  $mail->setFrom("robin.ingold22@gmail.com", "sender");
  $mail->addAddress("robin.ingold@hotmail.com", "robin");

  $mail->Subject = "Webanfrage Simulatoren";
  $mail->Body = 
  "Vorname: " . $_POST["vorname"] .
  "\r\n \r\n Nachname: " . $_POST["nachname"] .
  "\r\n \r\n Strasse: " . $_POST["strasse"] .
  "\r\n \r\n Ort: " . $_POST["ort"] .
  "\r\n \r\n Email: " . $_POST["email"] .
  "\r\n \r\n Tel: \r\n" . $_POST["tel"] .
  "\r\n \r\n Konfiguration: \r\n" . $_POST["tel"] .
  "\r\n \r\n Einsatz: " . $_POST["Einsatz"] .
  "\r\n \r\n Headset: " . $_POST["Headset"] .
  "\r\n \r\n Lautsprecher: " . $_POST["Lautsprecher"] .
  "\r\n \r\n 4-Punkt-Gurte: " . $_POST["4-Punkt-Gurte"] .
  "\r\n \r\n Kabeleingang: " . $_POST["Kabeleingang"] .
  "\r\n \r\n Simulatorfarbe: " . $_POST["Simulatorfarbe"] .
  "\r\n \r\n Spezielle Farbangabe: " . $_POST["Spezielle Farbangabe"] .
  "\r\n \r\n Sitzfarbe: " . $_POST["Sitzfarbe"] .
  "\r\n \r\n Polsterfarbe: " . $_POST["Polsterfarbe"] .
  "\r\n \r\n Fadenfarbe: " . $_POST["Fadenfarbe"] .
  "\r\n \r\n Startnummer: " . $_POST["Startnummer"] .
  "\r\n \r\n Farbe der Startnummer: " . $_POST["Farbe der Startnummer"] .
  "\r\n \r\n Nummer-Design: " . $_POST["Nummer-Design"] .
  "\r\n \r\n Hintergrund Startnummer: " . $_POST["Hintergrund Startnummer"] .
  "\r\n \r\n Fahrername: " . $_POST["Fahrername"];

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
  <script type="text/javascript" src="../assets/code.js"></script>
  <title>TopSpeedCenter Solothurn</title>
</head>
<body>


  <?php
    include '../templates/header_sim.php';
  ?>

  <main id="main-sim-item">
    <h1><?= $translation->t('pages.sim.shop.sim-pro') ?></h1>
    <div class="sim-item">
      <div class="slideshow">
        <div class="left"></div>
        <div class="slides">
          <img id="slide_1" src="../images/sneaker/img01.jpg" alt="" class="slide">
          <img id="slide_2" src="../images/sneaker/img09.jpg" alt="" class="slide">
          <img id="slide_3" src="../images/sneaker/img17.jpg" alt="" class="slide">
          <img id="slide_4" src="../images/sneaker/img25.jpg" alt="" class="slide">
        </div>
        <div class="right"></div>
      </div>
      <div class="thumbnails">
        <img id="thumbnail_1" src="../images/sneaker/img09.jpg" alt="" class="thumbnail">
        <img id="thumbnail_2" src="../images/sneaker/img17.jpg" alt="" class="thumbnail">
        <img id="thumbnail_3" src="../images/sneaker/img17.jpg" alt="" class="thumbnail">
        <img id="thumbnail_4" src="../images/sneaker/img25.jpg" alt="" class="thumbnail">
      </div>
    </div>
    <form id="form-container" style="margin-top: 100px;">
      <?php foreach ($formData as $category => $row): ?>
        <p><?= $category ?></p>
        <select name="<?= $category ?>">
          <?php foreach ($row as $column): ?>
            <option value="<?= $column['label'] ?>" data-price="<?= $column['price'] ?>">
              <?= $column['label'] ?> (<?= $column['price'] ?>)
            </option>
          <?php endforeach ?>
        </select>
      <?php endforeach ?>
      <input type="text" id="vorname" name="vorname" value="" placeholder="Vorname">
      <input type="text" id="nachname" name="nachname" value="" placeholder="Nachname">
      <input type="text" id="strasse" name="strasse" value="" placeholder="Strasse, Nr.">
      <input type="text" id="ort" name="ort" value="" placeholder="PLZ, Ort">
      <input type="email" id="email" name="email" value="" placeholder="Email">
      <input type="text" id="tel" name="tel" value="" placeholder="Tel. Nr.">
      <button type="submit" name="submit"><?= $translation->t('pages.sim.shop.send') ?></button>
      <p id="total">0</h1>
    </form>
  </main>

</body>
</html>