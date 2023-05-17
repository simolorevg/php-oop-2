<?php
require_once __DIR__ . '/models/product.php';
require_once __DIR__ . '/models/animals.php';
$first_product = new Animal('Cane', 'Barilla', 'Croccantini', 'mmh buono il pollo');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>

<body>
    <?php var_dump($first_product) ?>
    <?php echo ($first_product->printAll()) ?>
</body>

</html>