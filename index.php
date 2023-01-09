<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do not say BadWords!</title>
</head>

<body>

  <section class="paragraphLength">
    <!-- TITOLO -->
    <h1>
      <?php
      echo "Testo:";
      ?>
    </h1>

    <!-- TESTO -->
    <p>
      <?php

      $str = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque necessitatibus quasi sunt aperiam ea omnis impedit maxime molestias, distinctio, harum illum, at minima voluptas iusto sed ab nostrum nemo voluptate!";

      echo $str;
      ?>
    </p>

    <!-- LUNGHEZZA TESTO -->
    <h3>
      <?php
      echo "Lunghezza: " . strlen($str);
      ?>
    </h3>
  </section>

  <hr>

  <section class="censuredText">
    <?php
    $paragraph = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur repellat ex ut itaque numquam perferendis, alias cupiditate veniam amet ea, consectetur iste repellendus nemo vitae animi quia voluptates, quibusdam voluptatibus.";
    $badWord = $_GET["badword"];
    $censured = str_replace($badWord, "***", $paragraph);
    ?>

    <h1>
      <?php
      echo $censured;
      ?>
    </h1>
    <h2>
      string length:
      <?php
      echo strlen($censured);
      ?>
    </h2>
  </section>


</body>

</html>