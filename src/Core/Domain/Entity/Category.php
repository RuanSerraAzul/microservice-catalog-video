<?php

namespace Core\Domain\Entity;
use Core\Domain\Entity\Traits\MethodsMagicTrait;
use Core\Domain\Exception\EntityValidationException;
use Core\Domain\Validation\DomainValidation;

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

    public function disable(): void{
        $this->isActive = false;
    }

    public function update(string $name, string $description = '') : void{
        $this->name = $name;
        $this->description = $description;

        $this->validate();
    }

    public function validate(){ 
        DomainValidation::notNull($this->name);
        DomainValidation::strMaxLength($this->name);
        DomainValidation::strMinLength($this->name);
        DomainValidation::StrCanNullAndMaxLength($this->description);
    
    
    
    
    }
}