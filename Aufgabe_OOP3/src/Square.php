<?php


class Square extends Rectangle
{
    public function __construct(float $sideLength)
    {
        parent::__construct($sideLength, $sideLength);
    }

    public function getCircumference(): float
    {
        return $this->getWidth() * 4;
    }

    public function getDiagonal(): float
    {
        return $this->getWidth() * sqrt(2);
    }

}

