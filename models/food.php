<?php
require_once __DIR__ . "/producs.php";
require_once __DIR__ . "/weightable.php";

class Food extends Producs {
  use Weightable;

  public function __construct($_name, $_price, $_weight) {
    parent::__construct($_name, $_price);

    $this->weight = $_weight;
  }

}