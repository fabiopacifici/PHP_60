<?php

// riceve richiesta post

// dampa a schermo i dati


// verifica se il cookie basket esiste
// se non esiste crealo
if (!$_COOKIE['basket']) {
  var_dump('Il cookie non esiste');
  var_dump($_POST);
  $product = $_POST;
  $basket = json_encode($product);

  setcookie('basket', $basket);
  header('Location: /');
} else {
  // altrimenti 
  var_dump('Il cookie basket esiste gia!');
  // decodifica il cookie
  $basketArray = json_decode($_COOKIE['basket'], true);
  var_dump($basketArray);
  var_dump($_POST);
  // crea array di array associative

  // aggiungi il nuovo prodotto all'array e quello prima


}
