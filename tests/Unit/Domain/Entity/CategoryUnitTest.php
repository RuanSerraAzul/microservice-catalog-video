<?php

namespace Tests\Unit\Domain\Entity;

use Core\Domain\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase{

    public function testAttributes(){

        $category = new Category(
            id: '1',
            name: 'New Cat',
            description: 'New desc',
            isActive: true
        );

        $this->assertEquals('New Cat', $category->name);
        $this->assertEquals('New desc', $category->description);
        $this->assertEquals(true, $category->isActive);


    }

    public function testActivated(){
        $category = new Category(
            name: 'New Cat',
            isActive:false
        );

        $this->assertFalse($category->isActive);
        $category->activate();
        $this->assertTrue($category->isActive);
    }


    public function testDisabled(){
        $category = new Category(
            name: 'New Cat',
            
        );

        $this->assertTrue($category->isActive);
        $category->desable();
        $this->assertFalse($category->isActive);
    }
}