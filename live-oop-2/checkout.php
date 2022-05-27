<?php

//require_once __DIR__ . '/Models/Customer.php';
require __DIR__ . '/Models/Payment.php';
require __DIR__ . '/Models/CreditCard.php';


$user = json_decode($_COOKIE['user']);
var_dump($user);


$customerCard = new CreditCard('123123123122', '113', '06', '22');

$payment = new Payment($user, $customerCard);
///$payment->order($customerCard);

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

  <h1><?= $payment->order($customerCard); ?></h1>
  <a href="/">Keep shopping</a>

</body>

</html>