<?php
/* Class declaration */

/**
 * # Car Class
 * This class is for a car
 * @author Fabio Pacifici
 * @copyright 2022 Fabio Pacifici
 * @license MIT 
 */
class Car
{
  /**
   * @var name The car name
   */
  public $name;
  public $model;
  public $color;
  // public $color = 'Black'; valore condiviso su tutte le istanze
  /**
   * Function Constructor
   * @param name The name of the car
   */
  function __construct(String $name, String $model, String $color = 'Black')
  {
    $this->name = $name;
    $this->model = $model;
    $this->color = $color;
  }

  /**
   * Start function
   * @return String
   */
  public function start()
  {
    $car_full_name = $this->getFullCarName();
    return "Starting $car_full_name";
  }

  /**
   * Start function
   * @return String
   */
  public function stop()
  {
    return 'Starting...';
  }

  public function getFullCarName()
  {
    return $this->name . ' ' . $this->model;
  }

  public function setName(String $name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

/* Class object instance */
$tesla_x = new Car('Tesla', 'Model X');
$tesla_y = new Car('Tesla', 'Model Y');
var_dump($tesla_x, $tesla_y);


/* Access and set data of an object */
$tesla_x->name = 'My Tesla';
$tesla_x->model = 'Model XX';

$tesla_y->name = 'My Tesla';
$tesla_y->model = 'Model YY';

var_dump($tesla_x, $tesla_y);


var_dump($tesla_x->start());
$tesla_y->setName('Tesla electric');
var_dump($tesla_y);


$carName = $tesla_y->getName();
var_dump($tesla_y->name);
var_dump($carName);
