<?php
include_once('class/Player.php');
include_once('class/Warrior.php');
include_once('class/Archer.php');
include_once('class/Mage.php');

$warrior = new Warrior("Cecil","Doombringer");

$warrior->attack();
for($i = 0; $i <= 9; ++$i) {
    $warrior->walk(MoveDirection::UP);
}

$mage = new Mage("Vivi");
$mage->useSpell("Fireball");
$mage->addSpell("Fireball");
$mage->useSpell("Fireball");

$archer = new Archer("Freya","Windforce",5);

for($i = 0; $i <= 5; ++$i) {
    $archer->shoot();
}


?>