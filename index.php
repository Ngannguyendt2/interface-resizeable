<?php
const PERCENT = 2;
include 'interface/Resizeable.php';
include 'class/Circle.php';
include 'class/Rectangle.php';
include 'class/Square.php';
$circle = new Circle(6);
$rectangle = new Rectangle(10, 12);
$square = new Square(5);
echo 'Entry area of circle: ' . $circle->getArea() . '<br>';
echo 'Area of circle then: ' . $circle->resize(PERCENT) . '<br>';
echo 'Entry area of rectangle:' . $rectangle->getArea() . '<br>';
echo 'Area of rectangle then: ' . $rectangle->resize(PERCENT) . '<br>';
echo 'Entry area of square:' . $square->getArea() . '<br>';
echo 'Area of square then: ' . $square->resize(PERCENT);
