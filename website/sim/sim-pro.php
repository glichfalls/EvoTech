<?php include '../bootstrap.php'; global $formData; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="/assets/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/assets/code.js"></script>
  <title><?= $translation->t('pages.sim-pro.title') ?></title>
</head>
<body>


  <?php
    include '../templates/header_sim.php';
  ?>

  <main id="main-angebot">

      <form id="form-container" style="margin-top: 100px;">

          <?php foreach ($formData as $category => $row): ?>
              <h2><?= $category ?></h2>
            <select name="<?= $category ?>">
                <?php foreach ($row as $column): ?>
                    <option value="<?= $column['label'] ?>" data-price="<?= $column['price'] ?>">
                        <?= $column['label'] ?> (<?= $column['price'] ?>)
                    </option>
                <?php endforeach ?>
            </select>

          <?php endforeach ?>

          <h1 id="total">0</h1>

      </form>

  </main>

</body>
</html>