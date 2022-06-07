<?php
require_once __DIR__ . '/Models/Posts.php';
require_once __DIR__ . '/Models/Categories.php';


$posts = Posts::all();
//$cats = Categories::all();

//var_dump($posts);
//var_dump($cats);
session_start();
if ($_SESSION['message']) :
  $msg = $_SESSION['message'];
  echo "
<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  <strong>Message</strong> $msg
</div>
";
endif;
session_destroy();

require_once __DIR__ . '/Layout/head.php';
?>

<main>
  <div class="p-5 bg-light mb-5">
    <div class="container">
      <h1 class="display-3">Welcome to my Blog</h1>
      <p class="lead">Lorem, ipsum dolor.</p>
    </div>
  </div>
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      <?php foreach ($posts as $post) : ?>
        <div class="col">
          <div class="card">
            <img class="img-fluid" src="<?= $post->image; ?>" alt="<?= $post->title; ?> Cover image">
            <div class="card-body">
              <h3><?= $post->title; ?></h3>
              <a href="#">Read more</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</main>
<?php require_once __DIR__ . '/Layout/footer.php';
