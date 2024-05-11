<?php
include_once __DIR__ . '/Product.php';
class Movie extends Product
{
    public $language;
    public function __construct($id, $title, $language, $price, $rating, $cover, $category)
    {
        parent::__construct($id, $title, $price, $rating, $cover, $category);
        $this->language = $language;
    }
    public function getVote()
    {
        $vote = ceil($this->rating / 2);
        $template = "<p>";
        for ($n = 1; $n <= 5; $n++) {
            $template .= $n <= $vote ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
        }
        $template .= "</p>";
        return $template;
    }

    public static function fetchMovies()
    {
        $data = file_get_contents(__DIR__ . "/movies_db.json");
        $dataPhp = json_decode($data, true);
        $movies = [];
        $categories = Category::fetchCategories();
        foreach ($dataPhp as $item) {
            $category = null;
            foreach ($categories as $cat) {
                if ($cat->cate_name == $item["category"]) {
                    $category = $cat;
                }
            }
            $movies[] = new Movie($item["id"], $item["title"],$item["language"], $item["price"], $item["rating"], $item["cover"], $category);
        }
        return $movies;
    }
}
