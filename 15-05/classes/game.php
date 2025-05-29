<?php

require_once('classes/Panel.php');
require_once('classes/Player.php');

class Game{

    private Panel $panel;
    private array $players;

    public function __construct(Panel $panel, array $players) {
        $this->panel = $panel;
        $this->players = $players;
    }

    public function start_turn() {
        foreach($this->players as $player){
            $letter = $player->get_letter();
            foreach(str_split($this->panel->get_text()) as $char){
                if($char == $letter){
                    $player->add_score();
                    echo $char;
                }
                else{
                    echo Panel::HIDDEN_CHAR;
                }
            }


        }
    }


}