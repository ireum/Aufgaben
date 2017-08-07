<?php


class Subject
{
    private $observers = [];
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function doSomething()
    {
        // Code
        $this->notify('something');
    }

    public function doSomethingBad()
    {
        foreach ($this->observers as $observer){
            $observer->reportError(51, 'Something bad happened', $this);
        }
    }

    public function notify(string $argument)
    {
        foreach ($this->observers as $observer) {
            $observer->update($argument);
        }
    }
}
