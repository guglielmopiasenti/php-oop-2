<?php
require_once 'oop_products.php';

$dog = new Category("Dog");

$dogProducts = array(
    new Product("Royal Canin Mini Adult", "https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg", $dog),
    new Product("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", $dog),
    new Product("Kong Classic", "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", $dog),
);

?>