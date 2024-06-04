<?php
require_once __DIR__ . "/models/producs.php";
require_once __DIR__ . "/models/category.php";

$dogCategory = new Category("Cani");
var_dump($dogCategory);

$catCategory = new Category("Gatti");
var_dump($catCategory);
