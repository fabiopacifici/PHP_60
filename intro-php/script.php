#!/usr/bin/php
<!-- La shebang si usa per istruire il sistema operativo su dove trovare l'eseguibile dell'interprete del linguaggio da usare -->
<?php
var_dump($argc); // restituisce un numero intero che indice quanti argomenti vengono passati allo script

var_dump($argv); // restituisce un array con gli argomenti passati allo script.


if ($argc != 2 || in_array($argv[1], array('--help', '-help', '-h', '-?'))) {
?>

  Script per generare un progetto html

  Usage:
  <?php echo $argv[0]; ?> <option>

  [-H] Scaffold HTML 
  [-V] Scaffold a VUE project

  <?php
} else {
  echo $argv[1];
  echo "Scaffold a project X";
}
