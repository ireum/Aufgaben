<?php
include 'autoload.php';

$author = new Author('sudarta', 'Agus', 'agus@sudarta.ch');
$book = new Book('Octocat\'s Adventure', $author, DateTime::createFromFormat('Y', 2007), 40, 'Fantasy');

echo $book->getAuthor()->getEmail() . PHP_EOL;
