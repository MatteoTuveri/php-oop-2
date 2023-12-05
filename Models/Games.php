<?php
class Games {
    private $name;
    private $img;
    private $playTime;
    private $authors;
    private $pages;
    private $categories;
    public function __construct($name, $img, $playTime) {
        $this->name = $name;
        $this->img = $img;
        $this->playTime = $playTime;
    }
    public function getCard() {
        $name = $this->name;
        $img = $this->img;
        $playTime = $this->playTime;
        include __DIR__ .'/../Components/Games_Card.php';
    }
    public static function getBooks($list) {
        $items = [];
        foreach($list as $game) {
            $bookInfo = new Games($game['name'],$game['img_icon_url'],$game['playtime_forever']);
            array_push($items, $bookInfo);
        }
        return $items;
    }

}
$games=Games::getBooks($gamesList);
?>