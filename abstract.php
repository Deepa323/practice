<?php

abstract class Shape {
    public $color;

    public function __construct($color = "Black") {
        $this->color = $color;
    }

   
    abstract public function calculateArea();

    public function getColor() {
        return "Color: {$this->color}<br>";
    }
}


class Circle extends Shape {
    private $radius;

    public function __construct($radius, $color = "Black") {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function calculateArea() {
        return "Circle Area: " . (pi() * pow($this->radius, 2)) . "<br>";
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height, $color = "Black") {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return "Rectangle Area: " . ($this->width * $this->height) . "<br>";
    }
}

$circle = new Circle(5, "Red");
$rectangle = new Rectangle(4, 6, "Blue");

echo "<h2>PHP Abstraction Example</h2>";
echo $circle->getColor();
echo $circle->calculateArea();
echo "<hr>";
echo $rectangle->getColor();
echo $rectangle->calculateArea();
?>
