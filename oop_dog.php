<?php
require_once 'oop_products.php';

class Dog extends Product {
    public function __construct($name, $price, $imageURL) {
        $this->category = 'Dog';
        $this->name = $name;
        $this->price = $price;
        $this->imageURL = $imageURL;
    }
}

?>