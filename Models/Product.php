<?php
include_once __DIR__ . '/Category.php';
abstract class Product
{
    protected int $id;
    protected string $title;
    protected Category $category;

    protected float $price;
    protected float $rating;
    protected string $cover;
    protected $overview;

    public function __construct($id, $title, $price, $rating, $cover, $category, $overview)
    {
        $this->id = $id;
        $this->title = $title;
        $this->rating = $rating;
        $this->cover = $cover;
        $this->category = $category;
        $this->price = $price;
        $this->overview = $overview;
        
    }

    public static function fetchAll($path ,$Class)
    {
        $data = file_get_contents(__DIR__ . "/". $path.".json");
        $dataPhp = json_decode($data, true);
        $movies = [];
        $categories = Category::fetchCategories();
        $field = ($Class == 'Movie') ? 'language':'numPages';
        foreach ($dataPhp as $item) {
            $category = null;
            foreach ($categories as $cat) {
                if ($cat->cate_name == $item["category"]) {
                    $category = $cat;
                }
            }
            $movies[] = new $Class($item["id"], $item["title"],$item[$field], $item["price"], $item["rating"], $item["cover"], $category, $item["overview"]);
        }
        return $movies;
    }
    
    abstract function formatItem();
    
    protected function getVote()
    {
        $voteINT = ceil($this->rating / 2);
        $template = '<p>';
        for ($n = 1; $n <= 5; $n++) {
            $template .= $n <= $voteINT ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
        }
        $template .= '</p>';
        return $template;
    }

    public function printCard($item){
        
        extract($item);
        include __DIR__.'/../card.php';
    }

}