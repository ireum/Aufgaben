<?php


class Observer
{
    public function update(string $argument)
    {
        // Do Something
    }

    public function reportError(int $errorCode, string $errorMessage, Subject $subject)
    {
        // Do Something
    }

}
