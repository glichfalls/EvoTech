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
    include '../templates/header_sim.php';
  ?>

  <main id="main-shop">
    <h1><?= $translation->t('pages.sim.shop.title') ?></h1>
    <div class="sim-items">
      <div class="simulator">
        <h2>race</h2>
        <img src="../images/angebot_3.jpg" alt="simulator race version">
        <h3>info 1</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat adipisci veniam dolorem aperiam hic iste consequatur repellat non omnis repudiandae sunt, assumenda ea eveniet doloribus inventore facilis porro voluptate nesciunt.
        Sint, eaque ut quam iure quos perspiciatis sed numquam amet aut facere deserunt excepturi reiciendis ducimus eos, delectus nostrum atque libero tempora cupiditate dolor optio dicta voluptatum culpa voluptatem! Quis!
        Impedit iusto accusamus, magni nam corporis unde sit, sed amet hic harum blanditiis. Cumque iusto ipsa, ab voluptatem nostrum minus! Quisquam adipisci, repellat architecto corrupti modi neque eius facere sequi.
        Eaque excepturi blanditiis est, sit nam magnam nobis expedita quis saepe impedit? Beatae eum, voluptatibus officiis, quibusdam praesentium totam iste quod laboriosam distinctio ad modi sunt ducimus corporis, cupiditate saepe.
        Minus dolorum ex, error aspernatur dolores debitis sapiente officiis! Laborum adipisci maiores a, porro quo odio nihil, provident facilis fugiat aperiam tempore dignissimos animi molestias id voluptate quidem consectetur commodi!</p>
        <button onclick="location.href='sim-race.php'" type="button">
          <?= $translation->t('pages.sim.shop.button') ?>
        </button>
      </div>
      <div class="simulator">
        <h2>pro</h2>
        <img src="../images/angebot_3.jpg" alt="simulator pro version">
        <h3>info 1</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat adipisci veniam dolorem aperiam hic iste consequatur repellat non omnis repudiandae sunt, assumenda ea eveniet doloribus inventore facilis porro voluptate nesciunt.
        Sint, eaque ut quam iure quos perspiciatis sed numquam amet aut facere deserunt excepturi reiciendis ducimus eos, delectus nostrum atque libero tempora cupiditate dolor optio dicta voluptatum culpa voluptatem! Quis!
        Impedit iusto accusamus, magni nam corporis unde sit, sed amet hic harum blanditiis. Cumque iusto ipsa, ab voluptatem nostrum minus! Quisquam adipisci, repellat architecto corrupti modi neque eius facere sequi.
        Eaque excepturi blanditiis est, sit nam magnam nobis expedita quis saepe impedit? Beatae eum, voluptatibus officiis, quibusdam praesentium totam iste quod laboriosam distinctio ad modi sunt ducimus corporis, cupiditate saepe.
        Minus dolorum ex, error aspernatur dolores debitis sapiente officiis! Laborum adipisci maiores a, porro quo odio nihil, provident facilis fugiat aperiam tempore dignissimos animi molestias id voluptate quidem consectetur commodi!</p>
        <button onclick="location.href='sim-pro.php'" type="button">
          <?= $translation->t('pages.sim.shop.button') ?>
        </button>
      </div>
      </div>
  </main>

</body>
</html>