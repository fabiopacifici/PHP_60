<?php
/* 

 'title' => 'PHP Course',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda.',
    'image' => 'https://picsum.photos/id/' . rand(100, 150) .  '/400/200',
    'price' => 199,
    'has_discount' => false,
    'discount' => ''
*/

class Product
{
  public $title;
  public $description;
  public $image;
  public $has_discount;
  public $discount;
  public $price;

  function __construct($title, $description, $image, $price, $has_discount, $discount)
  {
    $this->title = $title;
    $this->description = $description;
    $this->image = $image;
    $this->price = $price;
    $this->has_discount = $has_discount;
    $this->discount = $discount;
  }
}
