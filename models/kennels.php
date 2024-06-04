<?php
require_once __DIR__ . "/producs.php";
require_once __DIR__ . "/weightable.php";
class Kennels extends Producs {
  private string $nameModel;
  private string $material;
  use Weightable;

  public function __construct($_name, $_price, string $_nameModel) {
    parent::__construct($_name, $_price);
    $this->nameModel = $_nameModel;
  }

  public function getNameModel() {
    return $this->nameModel;
  }

  public function setMaterial($_material) {
    $this->material = $_material;
  }

  public function getMaterial() {
    return $this->material;
  }
}