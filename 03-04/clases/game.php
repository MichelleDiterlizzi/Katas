<?php

declare(strict_types=1);

require_once 'character.php';
require_once 'command.php';
require_once 'commands/attack.php';
require_once 'commands/defend.php';
require_once 'commands/item.php';
require_once 'commands/escape.php';


class Game {
    private $characters = [];

    public function __construct(array $characters) {
        $this->characters = $characters;
    }

    public function addCharacter(Character $character): void {
        $this->characters[] = $character;
    }

    public function getCharacters(): array {
        return $this->characters;
    }

    public function charactersTurn(): void {
        foreach ($this->characters as $character) {

            $commands = array_map(fn($command) => $command->getName(), $character->getCommands());
            $action = readline("It's " . $character->getName() . " turn, choose a command: " . PHP_EOL . implode(", ", $commands) . PHP_EOL);
            if (!in_array($action, $commands)) {
                echo "Invalid command. You have lose your turn." . PHP_EOL;
            }
            else { echo $character->useCommand($action) . PHP_EOL;
            }

        }
    }

    public function getWeakestCharacter():array {
        $weakestCharacter =  $weakestCharacter = array_reduce($this->characters, function ($actualWeakest, $character) {
            return $actualWeakest === null || $character->getHealth() < $actualWeakest->getHealth() ? $character : $actualWeakest;
        });

        return array_filter($this->characters, function($character) use($weakestCharacter) {
            return $character->getHealth() <= $weakestCharacter->getHealth();
        });
    }
}

?>