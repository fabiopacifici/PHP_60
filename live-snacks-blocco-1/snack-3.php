<?php

$data = [

  '10/01/2019' => [
    [
      'title' => 'Post 1',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 1',
      'img' => "<img src='https://picsum.photos/400/200' alt='' />"

    ],
    [
      'title' => 'Post 2',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 2',
      'img' => "<img src='https://picsum.photos/400/200' alt='' />"
    ],
  ],
  '10/02/2019' => [
    [
      'title' => 'Post 3',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 3',
      'img' => "<img src='https://picsum.photos/400/200' alt='' />"
    ]
  ],
  '15/05/2019' => [
    [
      'title' => 'Post 4',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 4',
      'img' => "<img src='https://picsum.photos/400/200' alt='' />"
    ],
    [
      'title' => 'Post 5',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 5',
      'img' => "<img src='https://picsum.photos/400/200' alt='' />"
    ],
    [
      'title' => 'Post 6',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 6',
      'img' => "<img src='https://picsum.photos/400/200' alt='' />"
    ]
  ],
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live Snacks Blocco 1</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>
  <!-- Snack 3 -->
  <div class="container">

    <?php foreach ($data as $date => $posts) : ?>
      <h6 class="pt-4"><?= $date ?></h6>
      <div class="row row-cols-2 g-3">


        <?php foreach ($posts as $post) : ?>

          <div class="col">
            <div class="card">
              <?= $post['img'] ?>
              <div class="card-body">
                <small>Author: <?= $post['author'] ?></small>
                <h2><?= $post['title'] ?></h2>
                <p><?= $post['text'] ?></p>
              </div>
            </div>

          </div>

        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>

  </div>
</body>

</html>