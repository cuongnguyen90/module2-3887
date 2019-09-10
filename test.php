<?php
require_once "Square.php";
require_once "Rectangle.php";
require_once "Circle.php";


$shapes[0] = new Circle('hinh tron',9);
$shapes[1] = new Square('hinh vuong',10);
$shapes[2] = new Rectangle('hinh chu nhat',10,8);

foreach ($shapes as $shape){
   if ($shape instanceof Colorable){
      echo $shape->howToColor()."<br>";
   }
   echo $shape->calculateArea()."<br>";
}
