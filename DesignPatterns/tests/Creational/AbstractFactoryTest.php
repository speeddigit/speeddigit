<?php

namespace DesignPatterns\Creational\Tests;

include __DIR__ . '/../../vendor/autoload.php';
include __DIR__ . '/../../src/Creational/AbstractFactory.php';

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\{Square, RoundedSquare, Rectangle, RoundedRectangle, Shape, ShapeFactory, AbstractFactory, FactoryProducer};

class AbstractFactoryTest extends TestCase
{
    /** @test */
    public function test_can_create_raw_objects()
    {
        $this->assertEquals("Drawn from DesignPatterns\Creational\Square", (new Square)->draw());
        $this->assertEquals("Drawn from DesignPatterns\Creational\Rectangle", (new Rectangle)->draw());
        $this->assertEquals("Drawn from DesignPatterns\Creational\RoundedRectangle", (new RoundedRectangle)->draw());
        $this->assertEquals("Drawn from DesignPatterns\Creational\RoundedSquare", (new RoundedSquare)->draw());
    }

    /** @test */
    public function test_shape_factory_create_shapes()
    {
        $shapeFactory = FactoryProducer::getFactory(false);
        $shapeSquare = $shapeFactory->getShape('square');
        $shapeRectangle = $shapeFactory->getShape('rectangle');

        $this->assertEquals('Drawn from DesignPatterns\Creational\Square', $shapeSquare->draw());
        $this->assertEquals('Drawn from DesignPatterns\Creational\Rectangle', $shapeRectangle->draw());
    }

    /** @test */
    public function test_rounded_shape_factory_create_shapes()
    {
        $roundedShapeFactory = FactoryProducer::getFactory(true);
        $roundedShapeSquare = $roundedShapeFactory->getShape('square');
        $roundedShapeRectangle = $roundedShapeFactory->getShape('rectangle');

        $this->assertEquals('Drawn from DesignPatterns\Creational\RoundedSquare', $roundedShapeSquare->draw());
        $this->assertEquals('Drawn from DesignPatterns\Creational\RoundedRectangle', $roundedShapeRectangle->draw());
    }
}
