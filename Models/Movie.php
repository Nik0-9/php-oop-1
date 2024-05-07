<?php
include_once __DIR__ . "/Product.php";


class Movie extends Product
{
    public $language;

    public function __construct($language, $id, $name, $img, $description, $rating)
    {
        $this->language = $language;
        parent:: __construct($id, $name, $img, $description, $rating);
    }
    public function getVote(){
        $vote = ceil($this->rating / 2 );
        $template = "<p>";
        for($n=1; $n <= 5; $n++){
            $template .= $n <=$vote ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
        }
        $template .= "</p>";
        return $template;
    }

}
