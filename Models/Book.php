<?php
include_once __DIR__ . '/Product.php';

class Book extends Product
{
    public $numPages;
    public $longDescription;
    public function __construct($id, $title, $numPages, $price, $rating, $cover, $category, $longDescription)
    {
        parent::__construct($id, $title, $price, $rating, $cover, $category);
        $this->numPages = $numPages;
        $this->longDescription = $longDescription;


    }

    public static function fetchBooks()
    {
        $data = file_get_contents(__DIR__ . "/books_db.json");
        $booksPhp = json_decode($data, true);
        $books = [];
        $categories = Category::fetchCategories();
        foreach ($booksPhp as $item) {
            $category = null;
            foreach ($categories as $cat) {
                if ($cat->cate_name == $item["category"]) {
                    $category = $cat;
                }
            }
            $longDescription = array_key_exists('longDescription', $item) ? $item['longDescription'] : null;

            $books[] = new Book($item["id"], $item["title"],$item["numPages"], $item["price"], $item["rating"], $item["cover"], $category, $longDescription);
        }
        return $books;
    }
  
}
