<?php

$posts =
  [

    [
      'title' => 'learn php',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, veniam nulla animi expedita nisi ad eligendi eum voluptatibus perferendis harum, maxime distinctio quo nesciunt eos nam provident aspernatur aperiam sequi!`'
    ],
    [
      'title' => 'learn html',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, veniam nulla animi expedita nisi ad eligendi eum voluptatibus perferendis harum, maxime distinctio quo nesciunt eos nam provident aspernatur aperiam sequi!`'
    ],
    [
      'title' => 'learn js',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, veniam nulla animi expedita nisi ad eligendi eum voluptatibus perferendis harum, maxime distinctio quo nesciunt eos nam provident aspernatur aperiam sequi!`'
    ],
    [
      'title' => 'learn vue',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, veniam nulla animi expedita nisi ad eligendi eum voluptatibus perferendis harum, maxime distinctio quo nesciunt eos nam provident aspernatur aperiam sequi!`'
    ],
    [
      'title' => 'learn SASS',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, veniam nulla animi expedita nisi ad eligendi eum voluptatibus perferendis harum, maxime distinctio quo nesciunt eos nam provident aspernatur aperiam sequi!`'
    ],
    [
      'title' => 'Learn Python',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, veniam nulla animi expedita nisi ad eligendi eum voluptatibus perferendis harum, maxime distinctio quo nesciunt eos nam provident aspernatur aperiam sequi!`'
    ]

  ];
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($posts);
