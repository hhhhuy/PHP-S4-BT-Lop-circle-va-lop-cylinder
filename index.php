<?php
include "Circle.php";
include "Cylinder.php";
$circle = new Circle();
$circle->setRadius(3);
$circle->setColor(Pink);
echo $circle . "<br/>";
echo "<br/>";
echo "<br/>";
$cylinder = new Cylinder();
$cylinder->setRadius(8);
$cylinder->setColor(Blue);
$cylinder->setHeight(6);
echo $cylinder;