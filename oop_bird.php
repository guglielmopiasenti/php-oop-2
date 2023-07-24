<?php

require_once 'oop_products.php';

class Bird extends Product {
    public function __construct($name, $price, $imageURL) {
        $this->category = 'Bird';
        $this->name = $name;
        $this->price = $price;
        $this->imageURL = $imageURL;
    }
}


?>