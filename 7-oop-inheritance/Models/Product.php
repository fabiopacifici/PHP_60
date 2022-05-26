<?php


class Product
{
  protected $title;
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

  public function calcStockValue(Int $quantity)
  {
    /* Implementation */
    return $this->price * $quantity;
  }


  private function getTitle()
  {
    return $this->title;
  }

  public function getFullProduct()
  {
    $title = $this->getTitle();
    return [
      $title,
      $this->description,
      $this->image
    ];
  }

  public static function calcStock(Float $price, Int $quantity)
  {
    /* Implementation */
    return $price * $quantity;
  }
}

//Product::calcStock(12.50, 1000);
