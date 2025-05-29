<?php

declare(strict_types=1);

abstract class Command {
    protected string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function makeAnAction(){}

}
?>