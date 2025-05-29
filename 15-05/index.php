<?php 
require_once('classes/Panel.php');
require_once('classes/Player.php');
require_once('classes/Game.php');
//TODO: Should be validate this input? Why/Why not?
$panel1 = new Panel("Es van enamorar en un tren","Before Sunrise");
$panel2 = new Panel("Lorca","La casa de Bernarda Alba");

$panel1->show();
echo PHP_EOL;
$panel2->show();


$game = new Game($panel1, [new Player("Javi", 0), new Player("Ana", 0), new Player("Luis", 0)]);

$game->start_turn();

?>