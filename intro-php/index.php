

<?php
  // Scrivo codice php
  $title = 'Ciao PHP';
  $content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos exercitationem, magnam adipisci enim delectus quia voluptatibus ex minima reprehenderit. Iste minus labore suscipit voluptatem eius at perspiciatis dignissimos molestiae incidunt!";

/* var_dump($_GET);
var_dump($_GET['name']); */

$names = ["Grogu", "Luke", "Yoda"];

echo "<pre>";
var_dump($names);
echo "</pre>";
?>

  <!doctype html>
  <html lang='en'>

  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Intro PHP</title>
  </head>

  <body>

    <!-- Learn php -->
    <h1> <?php echo $title; ?></h1>
    <p><?= $content; ?></p>

  </body>

  </html>