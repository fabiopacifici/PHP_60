<?php
# String $name, Float $price, Category $category, Bool is_available, Int $quantity 

/**
 * Store Product Class
 * 
 */
class Product
{
  public $name;
  public $price;
  public $image;
  public $category;
  public $is_available;
  public $quantity;

  function __construct(String $name, Float $price, String $image, Category $category, Bool $is_available, Int $quantity)
  {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;

    $this->category = $category;
    $this->is_available = $is_available;
    $this->quantity = $quantity;
  }
}
