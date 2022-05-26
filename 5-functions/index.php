<?php

function reverseWord(String $word)
{
  //var_dump($word);
  return strrev($word);
}

var_dump(reverseWord('Ciao'));

function dd(...$params)
{
  var_dump($params);
  foreach ($params as $param) {
    var_dump($param);
  }
  die();
}

$users = ['Alessandro', 'Adrea', 'Fabio'];
dd('ciao', [12, 123, 44], $users);
