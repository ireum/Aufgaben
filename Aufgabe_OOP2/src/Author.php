<?php


class Author
{
    /** @var  string */
    private $lastName;
    /** @var  string */
    private $firstName;
    /** @var  string */
    private $email;

    public function __construct(string $lastName, string $firstName, string $email)
    {
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
        $this->setEmail($email);
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function  setLastName(string $value)
    {
        $this->lastName = $value;
    }

    public function  setFirstName(string $value)
    {
        $this->firstName = $value;
    }

    public function  setEmail(string $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception('invalid email');
        }
        $this->email = $value;
    }
}