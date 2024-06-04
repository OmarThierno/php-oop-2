<?php
require_once __DIR__ . "/models/producs.php";
require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/games.php";

$dogCategory = new Category("Cani");
$dogCategory->setIcon("fa-solid fa-dog");
var_dump($dogCategory);

$catCategory = new Category("Gatti");
$catCategory->setIcon("fa-solid fa-cat");
var_dump($catCategory);

$dogFood = new Food('Felix', 2.50, 3000);
$dogFood->categoty = $dogCategory;
var_dump($dogFood);

$catFood = new Food('Pesce alla qualcosa', 12.30, 5000);
$catFood->categoty = $catCategory;
var_dump($catFood);

$gameDog = new Games('Osso di Carne', 3.12);
$gameDog->categoty = $dogCategory;
var_dump($gameDog);
