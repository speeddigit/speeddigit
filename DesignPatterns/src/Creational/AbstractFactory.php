<?php

declare(strict_types=1);

namespace DesignPatterns\Creational;

interface Shape
{
	function draw(): string;
}

class Rectangle implements Shape
{
	public function draw(): string
	{
		return "Drawn from " . __CLASS__;
	}
}

class RoundedRectangle implements Shape
{
	public function draw(): string
	{
		return "Drawn from " . __CLASS__;
	}
}

class Square implements Shape
{
	public function draw(): string
	{
		return "Drawn from " . __CLASS__;
	}
}

class RoundedSquare implements Shape
{
	public function draw(): string
	{
		return "Drawn from " . __CLASS__;
	}
}


abstract class AbstractFactory
{
	abstract function getShape(string $shapeType): Shape;
}

enum ShapeType: string
{
	const SQUARE = 'square';
	const RECTANGLE = 'rectangle';
}

class ShapeFactory extends AbstractFactory
{
	public function getShape(string $shapeType): Shape
	{
		if ($shapeType == ShapeType::SQUARE) {
			return new Square();
		} else if($shapeType == ShapeType::RECTANGLE) {
			return new Rectangle;
		}
		return null;
	}
}

class RoundedShapeFactory extends AbstractFactory
{
	public function getShape(string $shapeType): Shape
	{
		if($shapeType == ShapeType::SQUARE) {
			return new RoundedSquare;
		} else if($shapeType == ShapeType::RECTANGLE) {
			return new  RoundedRectangle;
		}
		return null;
	}
}

class FactoryProducer 
{
	public static function getFactory(bool $rounded): AbstractFactory
	{
		if($rounded) {
			return new RoundedShapeFactory;
		} else {
			return new ShapeFactory;
		}
	}
}

