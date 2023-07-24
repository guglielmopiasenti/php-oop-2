<?php
class Product {
    protected $category;
    protected $name;
    protected $price;
    protected $imageURL;

    public function __construct($name, $imageURL, $category) {
        $this->name = $name;
        $this->imageURL = $imageURL;
        $this->category = $category;
    }

    public function getName() {
        return $this->name;
    }

    public function getImageURL() {
        return $this->imageURL;
    }

    public function getCategory() {
        return $this->category;
    }

    public function printCard() {
        echo "
        <div class=\"card\" style=\"width: 18rem;\">
            <img src=\"{$this->imageURL}\" class=\"card-img-top\" alt=\"{$this->name}\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{$this->name}</h5>
                <p class=\"card-text\">Category: {$this->category->getName()}</p>
                <p class=\"card-text\">Price: \${$this->price}</p>
                <a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
            </div>
        </div>
        ";
    }
}
?>