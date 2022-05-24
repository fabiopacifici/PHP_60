<?php

# Live Snacks blocco 1 
/* Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 

Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60
*/
$matches = [
  [
    'home_team' => 'Brooklin',
    'guest_team' => 'Lakers',
    'home_points' => 5,
    'guest_points' => 10,
  ],
  [
    'home_team' => 'Celtics',
    'guest_team' => 'Bulls',
    'home_points' => 10,
    'guest_points' => 5,
  ],
  [
    'home_team' => 'Mets',
    'guest_team' => 'Miami',
    'home_points' => 5,
    'guest_points' => 10,
  ],

];


/* Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

var_dump(strlen($name) > 3);
var_dump(strpos($email, '.') && strpos($email, '@'));
var_dump(is_numeric($age));

if (strlen($name) > 3 && strpos($email, '.') && strpos($email, '@') && is_numeric($age)) {

  echo "<h2>Accesso Riuscito</h2>";
} else {
  echo "<h2>Accesso Negato</h2>";
}


/* 
## Snack 4

Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

*/

$numbers = [];

while (count($numbers) < 15) {
  $number = rand(20, 2000);

  if (!in_array($number, $numbers)) {
    array_push($numbers, $number);
  }
}
sort($numbers);
var_dump($numbers);


/* 

## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$class = [
  [
    "name" => "Alessandro",
    "lastname" => "Boccardi",
    "votes" => [10, 9, 8, 7]
  ],
  [
    "name" => 'Martina',
    "lastname" => 'Gangemi',
    "votes" => [10, 9, 10, 7]
  ],
  [
    "name" => 'Francesca',
    "lastname" => 'Huda',
    "votes" => [10, 9, 10, 7]
  ]
];

for ($i = 0; $i < count($class); $i++) {
  $student = $class[$i];
  $votes_avg = array_sum($student['votes']) / count($student['votes']);
  $student_name = $student['name'];
  $student_lastname = $student['lastname'];
?>

  <h3> <?= "$student_name $student_lastname" ?></h3>
  <p><?= $votes_avg; ?></p>


<?php } ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snacks PHP 1</title>
</head>

<body>

  <?php //for ($i = 0; $i < count($cast); $i++) :
  //$actor = $cast[$i]; 
  ?>
  <h3><?php //echo $actor; 
      ?></h3>
  <?php //endfor;  
  ?>

  <!-- Snack 1 -->
  <h2>Snack 1</h2>

  <?php for ($j = 0; $j < count($matches); $j++) :
    $match = $matches[$j];
  ?>
    <p>
      <?= $match['home_team'] . " - " . $match['guest_team'] . ' | ' . $match['home_points'] . '-' . $match['guest_points'] ?>
    </p>

  <?php endfor; ?>
</body>

</html>