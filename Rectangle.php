<?php

class Rectangle
{
    public $width;
    public $height;

    public function getSquare() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return ($this->width + $this->height) * 2;
    }
}