<main class="mt-5">

  <div class="container">
    <?php foreach ($faqs as $faq) : ?>
      <h2><?= $faq['question'] ?></h2>
      <div class="content">
        <?= $faq['answer'] ?>
      </div>
    <?php endforeach; ?>
  </div>

</main>