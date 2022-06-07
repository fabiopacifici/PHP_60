<?php
require_once __DIR__ . '/Models/Posts.php';
# Establish a db connection
$mysqli = new mysqli('localhost', 'fab', 'password', 'php_blog', 3307);

//var_dump($mysqli);

# make the first test query

/* $restults = $mysqli->query('SELECT * from posts')->fetch_all();
var_dump($restults); */

# Fetch results as an object

// 2. fare la query
$response = $mysqli->query('SELECT * from posts');
//var_dump($response);  // num_rows => 14
// 3. verifica il reponso

$posts = [];
if ($response && $response->num_rows > 0) {
  //var_dump('Ci sono dei records');

  for ($i = 0; $i < $response->num_rows; $i++) {
    # code...
    array_push(
      $posts,
      $response->fetch_object('Posts', ['id', 'title', 'content', 'image'])
    );
  }
}

var_dump($posts);

$mysqli->close();

## Approccio OOP
//$posts = Posts::all();