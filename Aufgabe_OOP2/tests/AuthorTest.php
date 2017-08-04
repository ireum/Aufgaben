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







}
