<?php

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo $this->name . " borrowed '" . $book->getTitle() . "'." . PHP_EOL;
        } else {
            echo $this->name . " could not borrow '" . $book->getTitle() . "' (no copies available)." . PHP_EOL;
        }
    }

    public function returnBook($book) {
        $book->returnBook();
        echo $this->name . " returned '" . $book->getTitle() . "'." . PHP_EOL;
    }
}

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print Available Copies with their names
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . PHP_EOL;
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . PHP_EOL;

?>
