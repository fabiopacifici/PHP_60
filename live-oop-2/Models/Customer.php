<?php
class Customer
{

  public function __construct(string $name, string $email, String $password, string $address, bool $is_registered = false, Int $discount = 0)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->address = $address;
    $this->is_registered = $is_registered;
    $this->discount = $discount;
  }

  public function register()
  {
    $this->is_registered = true;
    $this->discount = 20;
  }
}
