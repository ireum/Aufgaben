<?php


use PHPUnit\Framework\TestCase;
/**
 * @covers Circle
 */
class CircleTest extends TestCase
{
    /** @var  Circle */
    private $circle;

    public function setUp()
    {
        $this->circle = new Circle(5.0);
    }

    public function testGetRadiusReturnsRadiusInsertedByConstructor()
    {
        $this->assertSame(5.0, $this->circle->getRadius());
    }

    public function testGetCircumferenceReturnsCorrectCircumference()
    {
        $this->assertSame(2 * pi() * 5.0, $this->circle->getCircumference());
    }

    public function testGetDiagonalReturnsCorrectDiagonal()
    {
        $this->assertSame(2 * 5.0, $this->circle->getDiagonal());
    }

    public function testGetAreaReturnsCorrectArea()
    {
        $this->assertSame(pi() * pow(5.0, 2), $this->circle->getArea());
    }

}
