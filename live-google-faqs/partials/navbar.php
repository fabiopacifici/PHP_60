<nav class="nav">
  <?php foreach ($menu as $item) : ?>
    <a href="<?= $item['href']; ?>" class="nav-link"><?= $item['text'] ?></a>
  <?php endforeach; ?>
</nav>