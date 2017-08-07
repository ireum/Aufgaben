<?php


use PHPUnit\Framework\TestCase;

/**
 * @covers Rectangle
 *
 */
class RectangleTest extends TestCase
{
    /** @var  Rectangle */
    private $rectangle;

    public function setUp()
    {
        $this->rectangle = new Rectangle(5.0, 12.0);
    }

    public function testGetWidthReturnsWidthInsertedByConstructor()
    {
        $this->assertSame(5.0, $this->rectangle->getWidth());
    }

    public function testGetLengthReturnsLengthInsertedByConstructor()
    {
        $this->assertSame(12.0, $this->rectangle->getLength());
    }

    public function testGetCircumferenceReturnsCorrectCircumference()
    {
        $this->assertSame(34.0, $this->rectangle->getCircumference());
    }

    public function testGetDiagonalReturnsCorrectDiagonal()
    {
        $this->assertSame(13.0, $this->rectangle->getDiagonal());
    }

    public function testGetAreaReturnsCorrectArea()
    {
        $this->assertSame(60.0, $this->rectangle->getArea());
    }


}
