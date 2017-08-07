<?php


class Rectangle implements Figure
{
    /** @var float */
    protected $width;
    /** @var float */
    protected $length;

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function __construct(float $width, float $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function getCircumference(): float
    {
        return 2 * ($this->width + $this->length);
    }

    public function getArea(): float
    {
        return $this->width * $this->length;
    }

    public function getDiagonal(): float
    {
        return sqrt(pow($this->width, 2) + pow($this->length, 2));
    }

}
