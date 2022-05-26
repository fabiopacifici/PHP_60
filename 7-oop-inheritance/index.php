<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/MyCar.php';


$desk = new Product('Standing Desk', 'Lorem ipsum dolor sit amet.', 'https://picsum.photos/400/200', 500, false, 0);

$tesla_x = new MyCar('TeslaX', 'Lorem ipsum dolor sit amet.', 'https://picsum.photos/400/200', 35000, false, 0, 5);

var_dump($desk);
var_dump($tesla_x);

/* Methods in a parent class */
var_dump($desk->calcStockValue(10));
var_dump($tesla_x->calcStockValue(10));

/* Mthods in a sub-class */
var_dump($tesla_x->start());
//var_dump($desk->start()); // Uncaught Error: Call to undefined method

/* VISIBILITY: Access Public Properties */

// var_dump($desk->title); // If its public its ok

// protected
//var_dump($desk->getTitle());

//var_dump($desk->title); // Uncaught Error: Cannot access protected property Product::$title
//Oppure se privaa: Uncaught Error: Cannot access private property Product::$title

//var_dump($tesla_x->getTitle()); Uncaught Error: Call to private method Product::getTitle() from global scope

var_dump($tesla_x->getFullProduct());

var_dump($tesla_x->calcStockValue(100));

var_dump($tesla_x);
