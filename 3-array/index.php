<?php 


$users = [
  'Arianna',
  'Roberto',
  'Francesca',
  'Federico'
];

var_dump($users);
var_dump($users[1]);

$user = [
  'name' => 'Fabio',
  'age' => '42',
  'job' => 'fullstack dev'
];

var_dump($user);
var_dump($user['job']);

//echo $user; Array
echo $user['job']; // fullstack dev


// Add elements to an array

$users[] = 'Alessio';
var_dump($users);

$user['lastname'] = 'Pacifici';
var_dump($user);


/* Multidimentional Array  */

$team = [ // primo livello: array "contenitore" con indici numerici
   
   [ // secondi livelli: array associtativi
       "name" => "Fabio",
       "lastname" => "Forghieri",
       "role" => "Co-Founder",
   ],
   [
       "name" => "Michele",
       "lastname" => "Papagni",
       "role" => "Head of Teaching",
   ]
];

var_dump($team);
var_dump($team[1]['lastname']);


var_dump(rand(2, 100));
