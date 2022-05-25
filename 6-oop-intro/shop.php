<?php

require __DIR__ . '/db.php';
//var_dump($products);
include __DIR__ . '/layout/head.php'; ?>

<main>
  <?php include __DIR__ . '/partials/jumbo_shop.php'; ?>
  <div class="container my-5">
    <?php include __DIR__ . '/partials/products.php'; ?>

  </div>

</main>

<?php
include __DIR__ . '/layout/footer.php';
