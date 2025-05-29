<?php
declare(strict_types=1);

require_once 'config.php';

$attack = new Attack('attack');
$defend = new Defend('defend');
$item = new Item('item');
$escape = new Escape('escape');

$cloud = new Character('Cloud', 100, 50, [$attack, $defend, $item]);
$tifa = new Character('Tifa', 90, 60, [$attack, $item]);
$barret = new Character('Barret', 100, 50, [$attack, $defend, $item]);

$game = new Game([$cloud]);

$game->addCharacter($tifa);
$game->addCharacter($barret);


$game->charactersTurn();

echo "The weakest character is: ";
var_dump($game->getWeakestCharacter());



?>