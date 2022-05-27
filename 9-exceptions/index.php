<?php


function multiplication($int)
{
  if (!is_int($int)) {
    throw new Exception('Is not a number');
  }
  return $int * 5;
}

try {
  multiplication('ciao');
} catch (Exception $e) {
  echo $e->getMessage();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Ciao</h1>
</body>

</html>