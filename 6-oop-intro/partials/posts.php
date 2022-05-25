<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
  <?php foreach ($posts as $post) : ?>
    <div class="col">
      <div class="card">

        <div class="card-body">
          <h3><?= $post['title'] ?></h3>
          <p><?= $post['content'] ?></p>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>