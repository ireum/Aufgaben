<?php


use PHPUnit\Framework\TestCase;

class SubjectTest extends TestCase
{
    public function testObservesAreUpdated()
    {
        // Mock Observer class with method update only
        $observer = $this->getMockBuilder(Observer::class)
                         ->setMethods(['update'])
                         ->getMock();

        // Set update() with expectation to be called only once with 'something' as argument
        $observer->expects($this->once())
                 ->method('update')
                 ->with($this->equalTo('something'));

        $subject = new Subject('TestSubject');
        $subject->attach($observer);

        $subject->doSomething();
    }

    public function testErrorGetsReported()
    {
        $observer = $this->getMockBuilder(Observer::class)
            ->setMethods(['reportError'])
            ->getMock();

        $observer->expects($this->once())
                 ->method('reportError')
                 ->with(
                     $this->greaterThan(0),
                     $this->stringContains('Something'),
                     $this->anything()
                 );

        $subject = new Subject('TestSubject');
        $subject->attach($observer);

        $subject->doSomethingBad();
    }

    public function testCallFunctionTwoTimesWithSpecificArguments()
    {
        $mock = $this->getMockBuilder(stdClass::class)
                     ->setMethods(['set'])
                     ->getMock();

        $mock->expects($this->exactly(2))
             ->method('set')
             ->withConsecutive(
                 [$this->equalTo('foo'), $this->greaterThan(0)],
                 [$this->equalTo('bar'), $this->greaterThan(0)]
             );

        $mock->set('foo', 21);
        $mock->set('bar', 48);
    }

    public function testErrorGetsReportedWithCallbackVerification()
    {
        $observer = $this->getMockBuilder(Observer::class)
            ->setMethods(['reportError'])
            ->getMock();

        $observer->expects($this->once())
            ->method('reportError')
            ->with(
                $this->greaterThan(0),
                $this->stringContains('Something'),
                $this->callback(
                    function($subject){
                    return is_callable([$subject, 'getName']) &&
                           $subject->getName() == 'TestSubject';
                    }
                )
            );

        /** @var $subject */
        $subject = new Subject('TestSubject');
        $subject->attach($observer);

        $subject->doSomethingBad();
    }

    public function testObserversAreUpdatedWithProphecy()
    {
        $subject = new Subject('TestSubject');

        // Create prophecy
        $observer = $this->prophesize(Observer::class);

        // set expectation
        $observer->update('something')->shouldBeCalled();

        // reveal prophecy
        $subject->attach($observer->reveal());

        $subject->doSomething();
    }
}
