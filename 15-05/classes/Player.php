<?php

require_once('classes/Panel.php');

class Player {

    private string $name;
    private int $score;


    public function __construct(string $name) {
        $this->name = $name;
        $this->score = 0;
    }
    
    public function get_letter(): string {
        $letter = readline("{$this->name}, introduce una letra: ");
        return $letter;
    }
}