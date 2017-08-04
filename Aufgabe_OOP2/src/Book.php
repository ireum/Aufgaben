<?php


class Book
{
    /** @var  string */
    private $title;
    /** @var  string */
    private $author;
    /** @var  DateTime */
    private $releaseYear;
    /** @var  int */
    private $numberOfPages;
    /** @var  string */
    private $genre;

    public function __construct(string $title, string $author, DateTime $releaseYear, int $numberOfPages, string $genre)
    {
        
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
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

    public function setTitle($value)
    {
        $this->title = $value;
    }

    public function setAuthor($value)
    {
        $this->author = $value;
    }

    public function setReleaseYear($value)
    {
        $this->releaseYear = $value;
    }

    public function setNumberOfPages($value)
    {
        $this->numberOfPages = $value;
    }

    public function setGenre($value)
    {
        $this->genre = $value;
    }
}