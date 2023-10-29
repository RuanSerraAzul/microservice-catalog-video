<?php

namespace Core\Domain\Entity\Traits;

use Exception;

trait MethodsMagicTrait{
    public function __get($proprerty){
        if(isset($this->{$proprerty})){
            return $this->{$proprerty};
        }

        $className = get_class($this);

    throw new Exception("Proprerty {$proprerty} not found in class {$className}");

    } 

    }