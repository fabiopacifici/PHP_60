<?php

class Person
{

  public static function create()
  {
    return 'Creo un nuovo oggetto Person';
  }
}

//var_dump(new Person());
var_dump(Person::create());  // Creo un nuovo oggetto Person
//new Person()
Person::create();
