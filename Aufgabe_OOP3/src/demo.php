<?php
include 'autoload.php';

function printFigure($figure)
{
    echo 'Circumference: ' . $figure->getCircumference() . PHP_EOL;
    echo 'Diagonal: ' . $figure->getDiagonal() . PHP_EOL;
    echo 'Area: ' . $figure->getArea() . PHP_EOL;
    echo PHP_EOL;
}

$circle = new Circle(5.0);
printFigure($circle);

$rectangle = new Rectangle(9.0, 9.0);
printFigure($rectangle);


$square = new Square(4.0);
printFigure($square);

