<?php
require_once 'oop_products.php';

$fish = new Category("Fish");

$fishProducts = array(
    new Product("Mangime per Pesci Guppy in Fiocchi", "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", $fish),
    new Product("Cartucce Filtranti per Filtro EasyCrystal", "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", $fish),
);

?>