<?php
require_once __DIR__ . "/producs.php";

class Category {
  private string $name;
  private string $icon;

  public function __construct(string $_name) {
    
    if(strtolower($_name) != 'cani' && strtolower($_name) != 'gatti') {
      throw new Exception ('La specie inserita non è valida');
    }
    $this->name = $_name;
  }

  public function getName() {
    return $this->name;
  }

  public function setIcon (string $_icon) {
    $this->icon = $_icon;
  }

  public function getIcon () {
    return $this->icon;
  }
}