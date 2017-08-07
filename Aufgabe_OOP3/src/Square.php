<?php


class Square extends Rectangle
{
    /** @var  float */
    private $side;

    public function __construct(float $sideLength)
    {
        $this->side = $sideLength;
        parent::__construct($sideLength, $sideLength);
    }

    public function getCircumference(): float
    {
        return $this->side * 4;
    }

    public function getDiagonal(): float
    {
        return $this->side * sqrt(2);
    }
    
}

