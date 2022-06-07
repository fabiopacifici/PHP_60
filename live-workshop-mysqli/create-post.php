<?php

if (count($_POST) === 3) {
  require_once __DIR__ . '/Models/Posts.php';
  $data = $_POST;
  Posts::create($data);
  // redirect to a get route
  header('Location: /');
}

require_once __DIR__ . '/Layout/head.php';
?>

<main>
  <div class="p-5 bg-light mb-5">
    <div class="container">
      <h1 class="display-3">Add a new Post</h1>
    </div>
  </div>
  <div class="container py-5">
    <form action="/create-post.php" method="post">

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Learn php" aria-describedby="titleHelper" required>
        <small id="titleHelper" class="text-muted">Help text</small>
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" name="content" id="content" rows="10" required></textarea>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" name="image" id="image" class="form-control" placeholder="https://" aria-describedby="imageHelper" required>
        <small id="imageHelper" class="text-muted">Help text</small>
      </div>


      <button type="submit" class="btn btn-primary">Add Post</button>

    </form>
  </div>

</main>

<?php require_once __DIR__ . '/Layout/footer.php';
