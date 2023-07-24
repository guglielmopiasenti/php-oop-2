<?php
require_once 'oop_products.php';

class Cat extends Product {
    public function __construct($name, $price, $imageURL) {
        $this->category = 'Cat';
        $this->name = $name;
        $this->price = $price;
        $this->imageURL = $imageURL;
    }
}


?>