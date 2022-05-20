<?php
// Sintassi 
if (condizione) {
} elseif (condizione) {
} else {
}

// sintasssi alternativa
if (condizione) :

elseif (condizione) :

else :

endif;


// Terario

$retVal = (condition) ? a : b ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditionals PHP</title>
</head>

<body>
  <!-- Sintassi semplificata -->
  <?php if (5 > 10) : ?>

    <p class="<?php echo (5 < 10) ? 'lead' : ''; ?>">Ciao</p>

  <?php elseif (5 < 10) : ?>

    <p>Hi</p>

  <?php else : ?>

    <p>Lorem ipsum dolor?</p>

  <?php endif; ?>

  <!-- Sintassi if classica -->
  <?php if (5 > 10) { ?>

    <p>Ciao</p>

  <?php } elseif (5 < 10) { ?>

    <p>Hi</p>

  <?php } else { ?>

    <p>Lorem ipsum dolor?</p>

  <?php } ?>

</body>

</html>