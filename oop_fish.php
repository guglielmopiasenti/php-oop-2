<?php
require_once 'oop_products.php';

$fish = new Category("Fish");

class Fish extends Product {
    public function __construct($name, $price, $imageURL) {
        $this->category = 'Fish';
        $this->name = $name;
        $this->price = $price;
        $this->imageURL = $imageURL;
    }
}

?>