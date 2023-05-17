<?php
require_once __DIR__ . '/../models/product.php';
require_once __DIR__ . '/../models/animals.php';
require_once __DIR__ . '/../models/type.php';

$animalsArray = [
    new Animal('Cane', 'Barilla', new Type('Cibo'), 'Bocconi di pollo')
];
