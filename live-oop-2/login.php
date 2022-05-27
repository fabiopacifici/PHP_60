<?php
require __DIR__ . '/Models/Customer.php';

//var_dump($_POST);
$username = $_POST['name'];
$password = $_POST['password'];

$sere = new Customer('Sere', 'Pecci', '123.c', 'via del parco');
if ($sere->password == $password) {
  setcookie('registeredUser', 'true');
}

header('Location: /');
