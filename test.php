<?php
require_once "Square.php";
require_once "Rectangle.php";
require_once "Circle.php";


$shapes[0] = new Circle('hinh tron',20);
$shapes[1] = new Square('hinh vuong',10);
$shapes[2] = new Rectangle('hinh chu nhat',10,8);

foreach ($shapes as $shape){
   echo $shape->name."<br>";
   if ($shape instanceof Colorable){
      echo $shape->howToColor()."<br>";
   }
   echo 'S : '.$shape->calculateArea()."<br>";
}
