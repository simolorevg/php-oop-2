<?php
require_once __DIR__ . '/../models/product.php';
require_once __DIR__ . '/../models/animals.php';
require_once __DIR__ . '/../models/product.php';
require_once __DIR__ . '/../models/type.php';
$toys = new Type('Gioco');
$food = new Type('Cibo');
$beauty = new Type('Cura');
$animalsArray = [
    new Animal('Cane', 'Morando', $food, 'Bocconi di pollo', 'https://content.dambros.it/uploads/2016/11/21155935/0000184912.jpg', 22),
    new Animal('Gatto', 'Morando', $food, 'Tranci di manzo', 'https://www.foodintavola.com/21162-home_default/6601913-miglior-gatto-croccantini-con-pesce-per-gatti-12-da-400-grammi.jpg', 12),
    new Animal('Cani', 'Pork S.P.A.', $toys, 'Tira Porchi per cani', 'https://www.ofba.it/41011-large_default/gioco-per-cani-maiale-con-sonaglio.jpg', 5),
    new Animal('Gatti', 'Boxe S.A.S', $toys, 'Pungiball per Gatti', 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/ferplast/flashlight/6/400/491124_katzenkarussell_flashlight_6.jpg', 16),
    new Animal('Cani', 'Dog Shower & CO', $beauty, 'Guanto doccia per Cani', 'https://img.fruugo.com/product/8/02/702914028_max.jpg', 33),
    new Animal('Gatti', 'FrontLine', $beauty, 'Frontline antizecche', 'https://www.exoticlife.it/3697-thickbox_default/frontline-combo-spot-on-per-cani.jpg', 44),
    new Animal('', 'Balconi', $food, 'Croccantini alla mela cotta', '...', 0),
];
$productsArray = [
    new Product('Barilla', $food, 'Bocconi di pollo e manzo', '..', 0)
];
foreach ($productsArray as $product) {
    try {
        $product->checkPrice($product->$_price);
    } catch (Exception $error) {
        $error->getMessage();
    }
}
