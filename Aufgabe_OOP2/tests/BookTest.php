<?php

use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    /** @var  Book */
    private $book;
    private $author;

    protected function setUp()
    {
        $this->author = new Author('lastname', 'firstname', 'example@email.com');
        $this->book = new Book('title', $this->author, DateTime::createFromFormat('Y', 2000), 100, 'genre');
    }

    public function testGetTitleReturnsTitleInsertedByConstructor()
    {
        $this->assertSame('title', $this->book->getTitle());
    }

    public function testGetAuthorReturnsAuthorInsertedByConstructor()
    {
        $this->assertSame($this->author, $this->book->getAuthor());
    }


    public function testGetReleaseYearReturnsReleaseYearInsertedByConstructor()
    {
        $this->assertSame('2000', date_format($this->book->getReleaseYear(), 'Y'));
    }

    public function testGetNumberOfPagesReturnsNumberOfPagesInsertedByConstructor()
    {
        $this->assertSame(100, $this->book->getNumberOfPages());
    }

    public function  testSetNumberOfPagesThrowsExceptionIfNumberIsInvalid()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('invalid number of pages');
        $this->book->setNumberOfPages(0);
    }

    public function testGetGenreReturnsGenreInsertedByConstructor()
    {
        $this->assertSame('genre', $this->book->getGenre());
    }
}
