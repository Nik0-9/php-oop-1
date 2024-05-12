<?php
include_once __DIR__ . '/Product.php';

class Book extends Product
{
    protected string $numPages;
    public function __construct($id, $title, $numPages, $price, $rating, $cover, $category, $overview)
    {
        parent::__construct($id, $title, $price, $rating, $cover, $category, $overview);
        $this->numPages = $numPages;
    }

    public function formatItem(){
        $item = [
            'image' => $this->cover,
            'title'=> $this->title,
            'custom' => $this->numPages,
            'vote'=> $this->getVote(),
            'price'=> $this->price,
            'overview'=> $this->overview

        ];
            return $item;
    }

}
