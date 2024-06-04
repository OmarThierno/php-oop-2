<?php
require_once __DIR__ . "/models/producs.php";
require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/games.php";
require_once __DIR__ . "/models/kennels.php";

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

$kennel1 = new Kennels('Cuccia super ultra conoda', 120, 'Medello X3');
$kennel1->categoty = $dogCategory;
$kennel1->setMaterial("Legno pregato");
$kennel1->setWeight(2000);
var_dump($kennel1);

$catalogs = [$dogFood, $catFood, $gameDog, $kennel1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <?php foreach ($catalogs as $catalog) { ?>
        <div class="col">
          <h2><?php echo $catalog->getName(); ?></h2>
          <div><?php echo $catalog->getPrice(); ?> €</div>
          <i class="<?php echo $catalog->categoty->getIcon() ?>"></i>

        </div>
    <?php } ?>
      </div>

  </div>
  
</body>
</html>


