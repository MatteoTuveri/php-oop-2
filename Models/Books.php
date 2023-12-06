<?php
include __DIR__ ."/printCard.php";
include __DIR__ ."/Product.php";
class Books extends Product {
    use PrintCard;
    private $title;
    private $img;
    private $description;
    private $authors;
    private $pages;
    private $categories;
    public function __construct($title, $img, $description, $authors, $pages, $categories,$type) {
        parent::__construct($type);
        $this->title = $title;
        $this->img = $img;
        $this->description = substr($description, 0, 100) . '...';
        $this->authors = $authors;
        $this->pages = $pages;
        $this->categories = $categories;
    }
    public function getCard() {
        $itemBook=[
        'title' => $this->title,
        'img' => $this->img,
        'description' => $this->description,
        'authors' => $this->authors,
        'pages' => $this->pages,
        'categories' => $this->categories,
        'type' => $this->type,
        'prezzoPieno' => $this->prezzoPieno,
        'sconto' => $this->sconto,
        'prezzo' => $this->prezzo 
        ];
        return $itemBook;
    }   
    public static function getBooks($list) {
        $items = [];
        foreach($list as $book) {
            $bookInfo = new Books($book['title'],$book['thumbnailUrl'],$book['longDescription'],$book['authors'],$book['pageCount'],$book['categories'],'Book');
            array_push($items, $bookInfo);
        }
        return $items;
    }

}
$books=Books::getBooks($booksList);
?>