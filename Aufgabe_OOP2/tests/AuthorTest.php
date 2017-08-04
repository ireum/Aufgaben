<?php
use PHPUnit\Framework\TestCase;

class AuthorTest extends TestCase
{
    /** @var  Author */
    private $author;

    protected function setUp()
    {
        $this->author = new Author('lastname', 'firstname', 'example@email.com');
    }

    public function testGetLastNameReturnsLastNameInsertedByConstructor()
    {
        $this->assertSame('lastname', $this->author->getLastName());
    }

    public function testGetFirstNameReturnsFirstNameInsertedByConstructor()
    {
        $this->assertSame('firstname', $this->author->getFirstName());
    }

    public function testGetEmailReturnsEmailInsertedByConstructor()
    {
        $this->assertSame('example@email.com', $this->author->getEmail());
    }

    public function testSetEmailThrowsExceptionIfEmailIsInvalid()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('invalid email');
        $this->author->setEmail('invalidemail.com');
    }




}
