<?php

require_once('classes/Panel.php');
require_once('classes/Player.php');

class Game{

    private Panel $panel;
    private array $players;
    private array $guessed_letters = [];
    

    public function __construct(Panel $panel, array $players) {
        $this->panel = $panel;
        $this->players = $players;
    }

    public function updated_panel() {
        $panel_guessed = true;
        foreach(str_split($this->panel->get_text()) as $char){
            if(in_array(strtolower($char), $this->guessed_letters)){
                echo $char;
            }
            elseif($char == ' '){
                echo ' ';
            }
            else{
                echo Panel::HIDDEN_CHAR;
                $panel_guessed = false;
            }
        }
        return $panel_guessed;
    }

    public function start_turn() {
        foreach($this->players as $player){
            do{
                $letter = $player->get_letter();
                $this->guessed_letters[] = strtolower($letter);

                $panel_guessed = $this->updated_panel();
                echo PHP_EOL;

                if($panel_guessed){
                    echo "¡Enhorabuena! Has completado el panel." . PHP_EOL;
                    return;
                }
            } while(in_array(strtolower($letter),str_split(strtolower($this->panel->get_text()))));   
        }
    }

    public function get_panel(): Panel {
        return $this->panel;
    }


}