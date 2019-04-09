<?php
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function Volume()
    {
        return parent::Area() * $this->height;
    }

    public function __toString()
    {
        return "Radius is: " . $this->getRadius() . " Color is: " . $this->getColor() . " Area is: " . $this->Area() . " Volume is: " . $this->Volume();
    }
}