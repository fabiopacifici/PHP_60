<div class="container">
  <div class="row">
    <?php foreach ($movies as $movie) : ?>
      <div class="col">
        <div class="card">
          <img class="img-fluid" src="<?= $movie->poster; ?>" alt="">
          <div class="card-body">
            <h4><?= $movie->title; ?></h4>
            <p><?= $movie->desc; ?></p>
            <small><?= $movie->getLength(); ?></small>
          </div>
        </div>
      </div>
    <?php endforeach ?>

  </div>
</div>