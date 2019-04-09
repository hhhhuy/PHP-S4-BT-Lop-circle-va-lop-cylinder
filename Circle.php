<?php

class Circle
{
    public $radius;
    public $color;

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function Area()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function __toString()
    {
        return "Radius is: " . $this->getRadius() . " Color is: " . $this->getColor() . " Area is: " . $this->Area();
    }
}