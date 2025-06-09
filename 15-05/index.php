<?php 
require_once('classes/Panel.php');
require_once('classes/Player.php');
require_once('classes/Game.php');
$panel1 = new Panel("Es van enamorar en un tren","Before Sunrise");
$panel2 = new Panel("Lorca","La casa de Bernarda Alba");

$game = new Game($panel1, [new Player("Javi", 0), new Player("Ana", 0), new Player("Luis", 0)]);

$game->get_panel()->show();
echo PHP_EOL;
$game->start_turn();

?>