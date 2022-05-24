<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
  <?php foreach ($products as $product) : ?>
    <div class="col">
      <div class="card">
        <div class="badge bg-danger position-absolute top-0 end-0"><?= $product['price'] ?></div>
        <img class="img-fluid" src="<?= $product['image'] ?>" alt="image <?= $product['title'] ?>">
        <div class="card-body">
          <h3><?= $product['title'] ?></h3>
          <p><?= $product['description'] ?></p>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>