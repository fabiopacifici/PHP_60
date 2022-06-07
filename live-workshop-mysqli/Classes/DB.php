<?php

trait DB
{

  public static function connect()
  {
    # Establish a db connection
    $mysqli = new mysqli('localhost', 'fab', 'password', 'php_blog', 3307);
    //var_dump($mysqli);

    if ($mysqli->connect_error) {
      $error = $mysqli->connect_error;
      throw new Exception("Error, Can't connect with the DB $error", 1);
    }

    return $mysqli;
  }
}
