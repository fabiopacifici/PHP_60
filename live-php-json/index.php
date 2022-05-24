<?php
$products = [
  [
    'id' => 1,
    'title' => 'PHP Course',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda.',
    'image' => 'https://picsum.photos/id/' . rand(100, 150) .  '/400/200',
    'price' => 199,
    'has_discount' => false,
    'discount' => ''
  ],
  [
    'id' => 2,
    'title' => 'PHP Course',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda.',
    'image' => 'https://picsum.photos/id/' . rand(100, 150) .  '/400/200',
    'price' => 199,
    'has_discount' => false,
    'discount' => ''
  ],
  [
    'id' => 3,
    'title' => 'PHP Course',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda.',
    'image' => 'https://picsum.photos/id/' . rand(100, 150) .  '/400/200',
    'price' => 199,
    'has_discount' => false,
    'discount' => ''
  ],
  [
    'id' => 4,
    'title' => 'PHP Course',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda.',
    'image' => 'https://picsum.photos/id/' . rand(100, 150) .  '/400/200',
    'price' => 199,
    'has_discount' => false,
    'discount' => ''
  ],
  [
    'id' => 5,
    'title' => 'PHP Course',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda.',
    'image' => 'https://picsum.photos/id/' . rand(100, 150) .  '/400/200',
    'price' => 199,
    'has_discount' => false,
    'discount' => ''
  ],
  [
    'id' => 6,
    'title' => 'PHP Course',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda.',
    'image' => 'https://picsum.photos/id/' . rand(100, 150) .  '/400/200',
    'price' => 199,
    'has_discount' => false,
    'discount' => ''
  ],
  [
    'id' => 7,
    'title' => 'PHP Course',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda.',
    'image' => 'https://picsum.photos/id/' . rand(100, 150) .  '/400/200',
    'price' => 199,
    'has_discount' => false,
    'discount' => ''
  ]
];

header('Content-Type: application/json');
//header('Content-Type', 'text/json');
// o senza
header('Access-Control-Allow-Origin: *');
echo json_encode($products);
