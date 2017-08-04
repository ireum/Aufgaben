<?php


class Book
{
    /** @var  string */
    private $title;
    /** @var  Author */
    private $author;
    /** @var  DateTime */
    private $releaseYear;
    /** @var  int */
    private $numberOfPages;
    /** @var  string */
    private $genre;

    public function __construct(string $title, Author $author, DateTime $releaseYear, int $numberOfPages, string $genre)
    {
        $this->$title = $title;
        $this->author = $author;
        $this->releaseYear = $releaseYear;
        $this->setNumberOfPages($numberOfPages);
        $this->genre = $genre;

    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function getReleaseYear(): DateTime
    {
        return $this->releaseYear;
    }

    public function getNumberOfPages(): int
    {
        return $this->numberOfPages;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setNumberOfPages(int $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_INT, array('options' => array('min_range' => 1, 'max_range' => 99999)))) {
            throw new Exception('invalid number of pages');
        }
        $this->numberOfPages = $value;
    }
}