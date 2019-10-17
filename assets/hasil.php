<?php include('header.php') ?>

<div class="container">
  <div class="row">

    <?php

    include 'hitung.php';

    $num1 = $_POST['first_number'];
    $num2 = $_POST['second_number'];
    $calc = $_POST['operation'];

    $calculator = new Calculator($num1, $num2, $calc);
    // echo $calculator->calcMethod();

    ?>

    <h1 class="display-4 mt-3">Hasil Dari <?= $num1; ?> <?= $calc; ?> <?= $num2; ?> Adalah <?= $calculator->calcMethod(); ?></h1>

  </div>
</div>

<?php include('footer.php') ?>