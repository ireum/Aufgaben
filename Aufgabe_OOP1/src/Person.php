<?php

class Person
{
    /** @var string */
    private $lastName;
    /** @var string  */
    private $firstName;
    /** @var  string */
    private $adress;
    /** @var int */
    private $postalCode;
    /** @var  string */
    private $city;
    /** @var DateTime */
    private $dateOfBirth;
    /** @var  string */
    private $phoneNumber;
    /** @var  string */
    private $favouriteColor;
    /** @var bool */
    private $askedAlready = false;

    public function __construct(string $lastName, string $firstName, DateTime $dateOfBirth)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getAdress(): string
    {
        return $this->adress;
    }

    public function getPostalCode(): int
    {
        return $this->postalCode;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getDateOfBirth(): DateTime
    {
        return $this->dateOfBirth;
    }

    public function getNumber(): string
    {
        $this->askedAlready = true;
        return $this->phoneNumber;
    }

    public function getColor(): string
    {
        return $this->favouriteColor;
    }

    public function getAskedAlready(): bool
    {
        return $this->askedAlready;
    }

    public function setName(string $value)
    {
        $this->lastName = $value;
    }

    public function setAdress(string $value)
    {
        $this->adress = $value;
    }

    public function setPostalCode(int $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_INT, array('options' =>  array('min_range'=>1000, 'max_range'=>9999)))){
            throw new Exception('invalid postalcode');
        }

        $this->postalCode = $value;
    }

    public function setCity(string $value)
    {
        $this->city = $value;
    }

    public function setNumber(string $value)
    {
        $this->phoneNumber = $value;
    }

    public function setColor(string $value)
    {
        $this->favouriteColor = $value;
    }

    public function getFullName(): string
    {
        return $this->lastName . ' ' . $this->firstName;
    }

    public function getFullAdress(): string
    {
        return $this->adress . ' ' . $this->postalCode . ' ' . $this->city;
    }

    public function getAge(): int
    {
        return date_diff($this->dateOfBirth, date_create('now'))->y;
    }
}
