<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../assets/PHPMailer/PHPMailer.php';
require '../assets/PHPMailer/SMTP.php';
require '../assets/PHPMailer/Exception.php';

if(isset($_POST["submit"])){
  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "robin.ingold22@gmail.com";
  $mail->Password = "tbhqmjafghaegojk";

  $mail->setFrom("robin.ingold22@gmail.com", "sender");
  $mail->addAddress("robin.ingold@hotmail.com", "robin");

  $mail->Subject = "Webanfrage";
  $mail->Body = 
  "Vorname: " . $_POST["vorname"] .
  "\r\n Nachname: " . $_POST["nachname"] .
  "\r\n Email: " . $_POST["email"] .
  "\r\n Nachricht: \r\n" . $_POST["message"];
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
    include '../templates/header.php';
  ?>

  <main id="main-contact">
    <h1>kontakt</h1>
    <p>Gerne stehen wir Ihnen für anfällige Fragen zur Verfügung.</p>
    <form method="post" action="kontakt.php">
      <input type="text" id="vorname" name="vorname" value="" placeholder="Vorname">
      <input type="text" id="nachname" name="nachname" value="" placeholder="Nachname">
      <input type="email" id="email" name="email" value="" placeholder="Email">
      <textarea id="message" name="message" value="" placeholder="Ihre Mitteilung" rows="7"></textarea>
      <button type="submit" name="submit">senden</button>
    </form>
    <div class="contact-info">
      <p>Kontaktinformationen:<br><br>
      TOPSPEEDCENTER SOLOTHURN<br>
      STRASSENNAME 99<br>
      4500 Solothurn<br>
      Schweiz<br><br>
      +41 12 345 67 89<br>
      info@topspeedcenter.ch</p>
      <div class="contact-icons">
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-square-facebook"></i>
      </div>
    </div>
  </main>




</body>
</html>