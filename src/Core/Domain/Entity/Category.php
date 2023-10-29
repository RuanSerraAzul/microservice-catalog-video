<?php

namespace Core\Domain\Entity;
use Core\Domain\Entity\Traits\MethodsMagicTrait;

class Category{

    use MethodsMagicTrait;

    public function __construct( 
        protected string $name,
        protected string $description = '',
        protected bool $isActive = true,
        protected string $id = '',
        )
    {

    }

    public function activate(): void{
        $this->isActive = true;
    }

    public function desable(): void{
        $this->isActive = false;
    }

    public function update(string $name, string $description = '') : void{
        $this->name = $name;
        $this->description = $description;
    }
}