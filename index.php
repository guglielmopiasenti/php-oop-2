<?php

require_once 'oop_dog.php';
require_once 'oop_cat.php';
require_once 'oop_bird.php';
require_once 'oop_fish.php';

// Combine all products into a single array
$allProducts = array_merge($dogProducts, $catProducts, $birdProducts, $fishProducts);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boolshop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/img/pet_store_copy.jpeg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    BoolShop
                </a>
            </div>
        </nav>
        <section id="products-card" class="d-flex flex-wrap justify-content-center gap-3 py-5">
            <?php
                // Print products on the page in the form of cards
                foreach($allProducts as $product) {
                    $product->printCard();
                }
            ?>
    </section>
</body>
</html>