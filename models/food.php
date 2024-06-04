<?php
require_once __DIR__ . "/producs.php";

class Food extends Producs {
  private int $weight;

  public function __construct($_name, $_price, $_weight) {
    parent::__construct($_name, $_price);

    $this->weight = $_weight;
  }

}