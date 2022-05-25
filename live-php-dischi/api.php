<?php
require_once __DIR__ . '/db.php';
//var_dump($dataArray);
$respose = [
  'disks' => $disks,
  'genres' => $genres
];

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

echo json_encode($respose);
