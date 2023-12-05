<?php
class Books {
    private $title;
    private $img;
    private $description;
    private $authors;
    private $pages;
    private $categories;
    public function __construct($title, $img, $description, $authors, $pages, $categories) {
        $this->title = $title;
        $this->img = $img;
        $this->description = substr($description, 0, 100) . '...';
        $this->authors = $authors;
        $this->pages = $pages;
        $this->categories = $categories;
    }
    public function getCard() {
        $title = $this->title;
        $img = $this->img;
        $description = $this->description;
        $authors = $this->authors;
        $pages = $this->pages;
        $categories = $this->categories;
        include __DIR__ .'/../Components/Books_Card.php';
    }
    public static function getBooks($list) {
        $items = [];
        foreach($list as $book) {
            $bookInfo = new Books($book['title'],$book['thumbnailUrl'],$book['longDescription'],$book['authors'],$book['pageCount'],$book['categories']);
            array_push($items, $bookInfo);
        }
        return $items;
    }

}
$books=Books::getBooks($booksList);
?>