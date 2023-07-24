<?php
class Category {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Product {
    private $name;
    private $imageUrl;
    private $category;

    public function __construct($name, $imageUrl, $category) {
        $this->name = $name;
        $this->imageUrl = $imageUrl;
        $this->category = $category;
    }

    public function getName() {
        return $this->name;
    }

    public function getImageUrl() {
        return $this->imageUrl;
    }

    public function getCategory() {
        return $this->category;
    }

    public function printCard() {
        echo "<div class='card' style='width: 18rem;'>";
        echo "<img src='".$this->imageUrl."' class='card-img-top' alt='".$this->name."'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>".$this->name."</h5>";
        echo "<p class='card-text'>Category: ".$this->category->getName()."</p>";
        echo "</div>";
        echo "</div>";
    }
}

?>