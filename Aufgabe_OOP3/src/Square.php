<?php


class Square extends Rectangle implements Figure
{
    public function __construct(float $sideLength)
    {
        $this->width = $sideLength;
        $this->length = $sideLength;
    }

    public function getSide(): float
    {
        return $this->width;
    }
}
