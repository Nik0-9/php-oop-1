<?php


class Product
{
    public $id;
    public $name;
    public $img;
    public $description;
    public $rating;
    public function __construct($id, $name, $img, $description, $rating){
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
        $this->description = $description;
        $this->rating = $rating;
    }

}