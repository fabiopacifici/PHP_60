<?php

trait Position
{
  public $lat;
  public $lng;

  public function getAddress($lat, $lng)
  {
    $this->lat = $lat;
    $this->lng = $lng;

    return $lat . $lng;
  }
}

trait Actions
{
  public function speak()
  {
    return "Ciao";
  }
}

class User
{
  //use Position;
  public $nome;
  public $email;
  public $sconto = 0;

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function setSconto($eta)
  {
    if ($eta > 65) {
      $this->sconto = 40;
    }
  }

  public function getSconto()
  {
    return $this->sconto;
  }
}


class Employee extends User
{
  use Position, Actions;

  public $livello;

  public function __construct($name, $email, $livello)
  {
    parent::__construct($name, $email);
    $this->livello = $livello;
  }

  public function setLivello($livello)
  {
    $this->livello = $livello;
  }

  public function setSconto($eta)
  {
    if ($eta > 65) {
      $this->sconto = 50;
    } else {
      $this->sconto = $this->livello * 10;
    }
  }
}


class Robot
{
  use Position, Actions;

  public $id;
  public $name;

  public function __construct($id, $name)
  {
    $this->id = $id;
    $this->name = $name;
  }
}


$user = new User('Aurel', 'aurel@gmail.com');
$employee = new Employee('Arianna', 'arianna@gmail.com', 10);
$robot = new Robot('1234', 'Mazinga');

var_dump($employee->speak());
var_dump($robot->speak());

var_dump($user, $employee, $robot);
