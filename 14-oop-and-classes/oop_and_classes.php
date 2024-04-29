<?php

echo "<h1>Object-Oriented Programming (OOP) & Classes</h1>";

/* ---------------- Object Oriented Programming (OOP) & Classes ---------------- */
/*
From PHP5 onwards you can write PHP in either a procedural or object-oriented way.
OOP consists of classes that can hold "properties" and "methods".
Objects can be created from classes.
*/

class User {

    // Access Modifiers: public, private, protected
    // public       - Can be accessed from anywhere
    // private      - Can only be accessed from inside the class
    // protected    - Can only be accessed from inside the class and by inheriting class

    // Properties are attributes that belong to a class.
    public $name;
    public $surname;
    public $email;
    public $password;

    public function __construct($name, $surname, $email, $password)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a class.
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

}

echo "<h3>Instatiating an Object - Properties of a Class - Access Modifiers</h3>";
// Instatiate a user object
$user1 = new User("Mert", "Bağ", "bagmert1996@gmail.com", "12345");
$user1->name = "Mert";
var_dump($user1);
echo "<hr>";

echo "<h3>Defining Methods</h3>";
$user2 = new User("Jack", "Davidson", "jackdavidson@example.com", "54321");
$user2->set_name("Brad");
var_dump($user2);
echo "<br><br>", $user2->get_name(), "<hr>";

class Book
{

    public $name;
    public $author;
    public $page_number;

    // A constructor is a method that runs when an object is created.
    public function __construct($name, $author, $page_number)
    {
        $this->name = $name;
        $this->author = $author;
        $this->page_number = $page_number;
    }

}

echo "<h3>Constructor</h3>";
$favorite_book = new Book("Pride and Prejudice", "Jane Austen", 424);
var_dump($favorite_book);
echo "<hr>";

echo "<h3>Inheritance</h3>";

class Employee extends User {

    public $title;

    public function __construct($name, $surname, $email, $password, $title)
    {
        parent::__construct($name, $surname, $email, $password);
        $this->title = $title;
    }

    public function get_title()
    {
        return $this->title;
    }

}

$employee1 = new Employee("Mert", "Bağ", "bagmert1996@gmail.com", "12345","Full Stack Developer");
echo "Employee's name: " . $employee1->get_name(), "<br><br>";
echo "Employee's surname: " . $employee1->surname, "<br><br>";
echo "Employee's email: " . $employee1->email, "<br><br>";
echo "Employee's password: " . $employee1->password, "<br><br>";
echo "Employee's title: " . $employee1->get_title();

?>