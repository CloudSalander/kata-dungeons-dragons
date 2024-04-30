<?php
include_once('class/Player.php');
include_once('class/Warrior.php');
include_once('class/Archer.php');
include_once('class/Mage.php');

$warrior = new Warrior("Cecil","Doombringer");

$warrior->attack();
for($i = 0; $i <= 9; ++$i) {
    $warrior->run(MoveDirection::LEFT);
    echo $warrior->getY().PHP_EOL;
}

$mage = new Mage("Vivi");

$archer = new Archer("Freya","Windforce",5);

for($i = 0; $i <= 5; ++$i) {
    $archer->shoot();
}


?>