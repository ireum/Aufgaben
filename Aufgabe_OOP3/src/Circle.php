<?php


class Circle implements Figure
{
    /** @var float */
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function getCircumference(): float
    {
        return 2 * pi() * $this->radius;
    }

    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

    public function getDiagonal(): float
    {
        return $this->radius * 2;
    }

}
