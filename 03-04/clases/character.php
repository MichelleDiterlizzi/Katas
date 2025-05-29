<?php

declare(strict_types=1);


class Character {
    private $name;
    private $health;
    private $magic;
    private $commands;

    public function __construct(string $name, int $health, int $magic, array $commands) {
        $this->name = $name;
        $this->health = $health;
        $this->magic = $magic;
        $this->commands = $commands;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getCommands(): array {
        return $this->commands;
    }

    public function getHealth(): int {
        return $this->health;
    }

    public function useCommand(string $commandName): string {
        foreach ($this->commands as $command) {
            if ($command->getName() === $commandName) {
                return $command->makeAnAction();
            }
        }
        return "Command not found!";
    }

}




?>