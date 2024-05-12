<?php
include_once __DIR__ . '/Category.php';
abstract class Product
{
    public int $id;
    public string $title;
    public Category $category;

    public float $price;
    public float $rating;
    public string $cover;


    public function __construct($id, $title, $price, $rating, $cover, $category, )
    {
        $this->id = $id;
        $this->title = $title;
        $this->rating = $rating;
        $this->cover = $cover;
        $this->category = $category;
        $this->price = $price;
        
    }

    public function getVote()
    {
        $voteINT = ceil($this->rating / 2);
        $template = "<p>";
        for ($n = 1; $n <= 5; $n++) {
            $template .= $n <= $voteINT ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
        }
        $template .= "</p>";
        return $template;
    }

}