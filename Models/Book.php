<?php
include_once __DIR__ . "/Product.php";


class Book extends Product
{
    public $numPages;

    public function __construct($numPages, $id, $name, $img, $description, $rating)
    {
        $this->numPages = $numPages;
        parent:: __construct($id, $name, $img, $description, $rating);
    }
  
}
