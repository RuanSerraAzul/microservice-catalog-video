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
}