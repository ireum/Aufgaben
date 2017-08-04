<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Book
 * @uses Author
 */
class BookTest extends TestCase
{
    /** @var  Book */
    private $book;
    /** @var PHPUnit_Framework_MockObject_MockObject|Author */
    private $author;

    protected function setUp()
    {
        $this->author = $this->getMockBuilder(Author::class)->disableOriginalConstructor()->getMock();
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

    public function testGetAuthorNameReturnsNameOfTheAuthor()
    {
        $this->author->expects($this->once())->method('getFirstName')->willReturn('sdfsdf');
        $this->author->expects($this->once())->method('getLastName')->willReturn('sudarta');
        $this->assertSame('sdfsdf sudarta', $this->book->getAuthorName());
    }
}
