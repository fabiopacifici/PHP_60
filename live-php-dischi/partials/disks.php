  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 ">
      <?php foreach ($disks as $disk) : ?>
        <div class="col">
          <div class="disk card bg-dark p-3">
            <img class="img-fluid" src="<?= $disk['poster']; ?>" alt="">
            <div class="card-body text-center ">
              <h4 class="text-uppercase"><?= $disk['title']; ?></h4>
              <p class="text-white-50">
                <?= $disk['author']; ?> <br>
                <?= $disk['year']; ?>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>