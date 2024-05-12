<?php
include_once __DIR__ . '/Product.php';
class Movie extends Product
{
    protected string $language;
    public function __construct($id, $title, $language, $price, $rating, $cover, $category, $overview)
    {
        parent::__construct($id, $title, $price, $rating, $cover, $category, $overview);
        $this->language = $language;
    }
    

    public function formatItem(){
        $item = [
            'image' => $this->cover,
            'title'=> $this->title,
            'custom' => $this->language,
            'vote'=> $this->getVote(),
            'price'=> $this->price,
            'overview'=> $this->overview

        ];
            return $item;
    }
    
}
