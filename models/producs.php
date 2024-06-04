<?php
require_once __DIR__ . "/category.php";
class Producs {
  private string $name;
  private float $price;
  private string $urlImg;
  public Category $categoty;

  public function __construct(string $_name, float $_price) {
    $this->name = $_name;
    $this->price = $_price;
  }

  public function setUserImg($_urlImg) {
    if(str_contains($_urlImg, 'https:')) {
      $this->urlImg = $_urlImg;
    }
  }
}