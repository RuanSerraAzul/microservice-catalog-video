<?php

namespace Core\Domain\Entity;
use Core\Domain\Entity\Traits\MethodsMagicTrait;
use Core\Domain\Exception\EntityValidationException;

class Category{

    use MethodsMagicTrait;

    public function __construct( 
        protected string $name,
        protected string $description = '',
        protected bool $isActive = true,
        protected string $id = '',
        )
    {
        $this->validate();

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

        $this->validate();
    }

    public function validate(){ 
        if(empty($this->name))   {
            throw new EntityValidationException("Nome inválido");
        }

        if(strlen ($this->name) > 255 || strlen ($this->name) <= 2)   {
            throw new EntityValidationException("Descrição inválida");
        }

        if($this->description != '' &&  (strlen ($this->description) > 255 && strlen ($this->description) <= 2))   {
            throw new EntityValidationException("Descrição inválida");
        }
    }
}