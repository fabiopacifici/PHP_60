<?php
/* 
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/
$name = 'Fabio';
$text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis tempora officia sequi animi culpa eaque ipsam. Modi ullam consequuntur non maxime. $name Nulla quod corrupti laboriosam a? Accusamus ea labore vero?";

#echo $text;
#echo strlen($text);
#var_dump($_GET);

$word = $_GET['word'];

//var_dump(str_replace($word, '***', $text))
$new_text = str_replace($word, '***', $text);
//var_dump($new_text);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>

<body>

  <h2>
    Paragrafo originale: <?= strlen($text); ?> caratteri
  </h2>
  <p>
    <?= $text; ?>
  </p>

  <h2>Paragrafo Originale <?= strlen($new_text); ?> caratteri</h2>
  <p>
    <?= $new_text; ?>
  </p>


</body>

</html>