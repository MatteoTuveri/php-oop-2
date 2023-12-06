<?php
include __DIR__ ."/Product.php";
class Games extends Product {
    private $name;
    private $img;
    private $playTime;
    private $authors;
    private $pages;
    private $categories;
    public function __construct($name, $img, $playTime,$type) {
        parent::__construct($type);
        $this->name = $name;
        $this->img = $img;
        $this->playTime = $playTime;
    }
    public function getCard() {
        $title = $this->name;
        $img = $this->img;
        $playTime = $this->playTime;
        $type = $this->type ;
        $prezzoPieno = $this->prezzoPieno;
        $sconto = $this->sconto;
        $prezzo = $this->prezzo;
        include __DIR__ .'/../Components/Card.php';
    }
    public static function getBooks($list) {
        $items = [];
        foreach($list as $game) {
            $bookInfo = new Games($game['name'],$game['img_icon_url'],$game['playtime_forever'],'Game');
            array_push($items, $bookInfo);
        }
        return $items;
    }

}
$games=Games::getBooks($gamesList);
?>