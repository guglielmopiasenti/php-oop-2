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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid shadow ">
                <a class="navbar-brand d-flex align-items-center gap-3" href="#">
                    <img src="img/pet_store_copy.jpeg" alt="" width="100" height="70" class="d-inline-block align-text-top">
                    <h1>BoolShop</h1>
                    <span>  - The best online shop for animal products -</span>
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
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container d-flex justify-content-between align-items-center ">
            <span class="text-muted">© 2023 BoolShop. All rights reserved.</span>
            <div class="mt-2">
                <a href="https://facebook.com/" target="_blank" class="btn btn-outline-primary btn-sm me-2">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
                <a href="https://twitter.com/" target="_blank" class="btn btn-outline-primary btn-sm me-2">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
                <a href="https://instagram.com/" target="_blank" class="btn btn-outline-primary btn-sm">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
            </div>
        </div>
    </footer>
</body>
</html>