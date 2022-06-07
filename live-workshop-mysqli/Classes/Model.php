<?php
require_once __DIR__ . '/DB.php';
class Model
{

  use DB;

  # 1 define static method all
  public static function all()
  {
    # code...
    # 2. connect with the db
    try {
      $mysqli = DB::connect();
    } catch (Exception $ex) {
      echo $ex->getMessage();
      echo $ex->getFile();
      echo 'Line: ' . $ex->getLine();
    }

    // 2. fare la query
    $response = static::make_query($mysqli);

    $data = [];
    if ($response && $response->num_rows > 0) {
      //var_dump('Ci sono dei records');

      for ($i = 0; $i < $response->num_rows; $i++) {
        # code...
        array_push(
          $data,
          $response->fetch_object(static::class)
        );
      }
    }

    $mysqli->close();
    //var_dump($data);

    return $data;
  }

  public static function create(array $data)
  {
    /* 
    INSERT INTO `posts` (`title`, `content`, `image`) VALUES ('lean docker', 'asdsfsdfsdf', 'https://picsum.photos/300');
    */
    # code...
    //var_dump($data);

    // connect with the db
    /* TODO: refactor into a custom method */
    try {
      $mysqli = DB::connect();
    } catch (Exception $ex) {
      echo $ex->getMessage();
      echo $ex->getFile();
      echo 'Line: ' . $ex->getLine();
    }
    // estrarre i campi del colonne
    $response = static::make_query($mysqli);
    $fields = $response->fetch_fields();
    //var_dump($fields);

    $colsList = [];
    foreach ($fields as $field) {
      if ($field->name != 'id') {
        array_push($colsList, $field->name);
      }
    }
    //var_dump($colsList);
    $columns = "`" . implode('`,`', $colsList) . "`";
    //var_dump($columns);
    $values = "'" . implode("','", $data) . "'";
    //var_dump($values);
    // get table name
    $table_name = static::get_table_name();
    // make query
    $query = "INSERT INTO $table_name ($columns) VALUES ($values);";
    //var_dump($query);

    // mostrare un messaggio
    if ($mysqli->query($query) === true) {
      echo "Records created in the db!";
      session_start();
      $_SESSION['message'] = "Records created in the db!";
    } else {
      $mysqli->error;
    }
  }

  public static function find()
  {
    # code...
  }


  /* Private methods */
  private static function get_table_name()
  {
    # code...
    return strtolower(static::class);
  }

  private static function make_query($db)
  {
    # code...
    $table_name = static::get_table_name();
    $query = "SELECT * from $table_name ORDER BY `id` DESC";
    $response = $db->query($query);
    return $response;
  }
}
