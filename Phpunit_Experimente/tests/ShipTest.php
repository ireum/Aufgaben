<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Ship
 *
 */
class ShipTest extends TestCase
{
    // Returning e.g. a string
    public function testReturnStub()
    {
        $stub = $this->createMock(Ship::class);
        $stub->method('swim')
            ->willReturn('fly');
        $this->assertSame('fly', $stub->swim());
    }

    // Custom stub
    public function testStub()
    {
        /** @var PHPUnit_Framework_MockObject_MockObject|Ship $stub */
        $stub = $this->getMockBuilder(Ship::class)
                     ->disableOriginalConstructor()
                     ->disableOriginalClone()
                     ->disableArgumentCloning()
                     ->disallowMockingUnknownTypes()
                     ->getMock();

        $stub->method('swim')
             ->willReturn('foo');

        $this->assertSame('foo', $stub->swim());

    }


    // Returning Arguments
    public function testReturnArgumentStub()
    {

        $stub = $this->createMock(Ship::class);
        $stub->method('swim')
            ->will($this->returnArgument(0));
        $this->assertSame('args0', $stub->swim('args0'));
    }

    // Returning itself
    public function testReturnSelfStub()
    {
        $stub = $this->createMock(Ship::class);
        $stub->method('swim')
            ->will($this->returnSelf());
        $this->assertSame($stub, $stub->swim());
    }

    // throwing an Exception
    public function testThrowExceptionStub()
    {
        $this->expectException(Exception::class);

        $stub = $this->createMock(Ship::class);
        $stub->method('swim')
            ->will($this->throwException(new Exception()));
        $stub->swim();
    }

    // Call a method two times with specific args
    public function testFunctionTwoTimesWithSpecificArgs()
    {
        /** @var PHPUnit_Framework_MockObject_MockObject|Ship $mock */
        $mock = $this->getMockBuilder(Ship::class)
            ->setMethods(['swim'])
            ->getMock();

        $mock->expects($this->exactly(2))
            ->method('swim')
            ->withConsecutive(
                [$this->equalTo('foo'), $this->lessThan(0)],
                [$this->equalTo('bar'), $this->greaterThan(0)]
            );

        $mock->swim('foo', -1);
        $mock->swim('bar', 88);
    }




}
