<?php


use PHPUnit\Framework\TestCase;

/**
 * @covers Square
 * @uses Rectangle
 */
class SquareTest extends TestCase
{
    /** @var  Square */
    private $square;

    public function setUp()
    {
        $this->square = new Square(4.0);
    }

    public function testGetWidthReturnsSideInsertedByConstructor()
    {
        $this->assertSame(4.0, $this->square->getWidth());
    }

    public function testGetLengthReturnsSideInsertedByConstructor()
    {
        $this->assertSame(4.0, $this->square->getLength());
    }

    public function testGetSideReturnsSideInsertedByConstructor()
    {
        $this->assertSame(4.0, $this->square->getSide());
    }

    public function testGetCircumferenceReturnsCorrectCircumference()
    {
        $this->assertSame(16.0, $this->square->getCircumference());
    }

    public function testGetDiagonalReturnsCorrectDiagonal()
    {
        $this->assertSame(5.6568542494924, $this->square->getDiagonal());
    }

    public function testGetAreaReturnsCorrectArea()
    {
        $this->assertSame(16.0, $this->square->getArea());
    }




}
