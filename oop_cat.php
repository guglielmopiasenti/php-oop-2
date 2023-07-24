<?php
require_once 'oop_products.php';

$cat = new Category("Cat");

$catProducts = array(
    new Product("Almo Nature Cat Daily Lattina", "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", $cat),
    new Product("Topini di peluche Trixie", "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", $cat)
);

?>