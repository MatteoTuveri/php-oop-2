<?php
class Product{
    protected $prezzo;
    protected $prezzoPieno;
    protected $sconto;
    protected $type;
    public function __construct($type){
        $this->prezzoPieno = $this->getFullPrice();
        $this->sconto = $this->getDiscount();
        $this->prezzo = $this->getPrice();
        $this->type = $type;
    }
    public function getFullPrice(){
        return rand(20,80);
    }
    public function getPrice(){
        $prezzo = $this->prezzoPieno - ($this->sconto/100 * $this->prezzoPieno);
        return ceil($prezzo);
    }
    public function getDiscount(){
        return rand(0,9)*10;
    }
}
?>