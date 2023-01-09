<?php
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

  $mail->Subject = "Webanfrage";
  $mail->Body = 
  "Vorname: " . $_POST["vorname"] .
  "\r\n \r\n Nachname: " . $_POST["nachname"] .
  "\r\n \r\n Email: " . $_POST["email"] .
  "\r\n \r\n Nachricht: \r\n \r\n" . $_POST["message"];

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
    include '../templates/header.php';
  ?>

  <main id="main-contact">
    <div class="contact-form">
      <h1>kontakt</h1>
      <p>Gerne stehen wir Ihnen für anfällige Fragen zur Verfügung.</p>
      <form method="post" action="kontakt.php">
        <input type="text" id="vorname" name="vorname" value="" placeholder="Vorname">
        <input type="text" id="nachname" name="nachname" value="" placeholder="Nachname">
        <input type="email" id="email" name="email" value="" placeholder="Email">
        <textarea id="message" name="message" value="" placeholder="Ihre Mitteilung" rows="7"></textarea>
        <button type="submit" name="submit">senden</button>
      </form>
    </div>
    <div class="contact-info">
      <p>Kontaktinformationen:<br><br>
      TOPSPEEDCENTER SOLOTHURN<br>
      Glutz-Blotzheim-Strasse 3<br>
      4500 Solothurn<br>
      Schweiz<br><br>
      +41 12 345 67 89<br>
      <a href="mailto:info@topspeedcenter.ch">info@topspeedcenter.ch</a></p>
      <div class="contact-icons">
        <a href="https://tinyurl.com/2cpzted3"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://tinyurl.com/3xznjs3k"><i class="fa-brands fa-square-facebook"></i></a>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d307.6817732341548!2d7.528045993930082!3d47.20243094052432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791d800a3a1fc97%3A0xe8eae74959be4f27!2sGlutz-Blotzheim-Strasse%203%2C%204500%20Solothurn!5e0!3m2!1sen!2sch!4v1673278400416!5m2!1sen!2sch" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </main>




</body>
</html>