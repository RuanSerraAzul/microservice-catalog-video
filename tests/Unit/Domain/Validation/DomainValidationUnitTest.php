<?php 

namespace Tests\Unit\Domain\Validation;

use Core\Domain\Exception\EntityValidationException;
use Core\Domain\Validation\DomainValidation;
use PHPUnit\Framework\TestCase;
use Throwable;

class DomainValidationUnitTest extends TestCase{
    public function testNotNull(){
        
        
        try {
            $value = '';
            DomainValidation::notNull($value, 'sdshadj');

            $this->assertTrue(false);
        } catch (Throwable $th) {
            $this->assertInstanceOf(EntityValidationException::class, $th); 
        }
        

    }


    public function testNotNullCustomMessageException(){
        
        
        try {
            $value = '';
            DomainValidation::notNull($value, 'Mensagem customizada de erro');

            $this->assertTrue(false);
        } catch (Throwable $th) {
            $this->assertInstanceOf(EntityValidationException::class, $th, 'Mensagem customizada de erro'); 
        }
        

    }

    public function testStrMaxLenght(){
        
        
        try {
            $value = 'Teste';
            DomainValidation::strMaxLength($value, 5, 'Mensagem customizada de erro 2');

            $this->assertTrue(false);
        } catch (Throwable $th) {
            $this->assertInstanceOf(EntityValidationException::class, $th, 'Mensagem customizada de erro 2'); 
        }
        

    }

    public function testStrMinLenght(){
        
        
        try {
            $value = 'Test';
            DomainValidation::strMinLength($value, 8, 'Mensagem customizada de erro 3');

            $this->assertTrue(false);
        } catch (Throwable $th) {
            $this->assertInstanceOf(EntityValidationException::class, $th, 'Mensagem customizada de erro 3'); 
        }
        

    }


    public function testStrCanNullAndMaxLength(){
        
        
        try {
            $value = 'teste';
            DomainValidation::StrCanNullAndMaxLength($value, 3, 'Mensagem customizada de erro 4');

            $this->assertTrue(false);
        } catch (Throwable $th) {
            $this->assertInstanceOf(EntityValidationException::class, $th, 'Mensagem customizada de erro 4'); 
        }
        

    }
}