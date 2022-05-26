<?php

class MyCar extends Product
{
  protected $doors_number;

  function __construct($title, $description, $image, $price, $has_discount, $discount, $doors_number)
  {
    parent::__construct($title, $description, $image, $price, $has_discount, $discount);
    $this->doors_number = $doors_number;
  }



  public function start()
  {
    return 'Stating car...';
  }

  public function calcStockValue(Int $quantity)
  {
    /* Implementation */

    $stock_value = $this->price * $quantity;
    $this->stock_value = $stock_value;
    return "$this->title $stock_value";
  }
}
