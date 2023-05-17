<?php
require_once __DIR__ . '/models/product.php';
require_once __DIR__ . '/models/animals.php';
require_once __DIR__ . '/models/type.php';
require_once __DIR__ . '/database/db.php';
$beta_product = new Animal('Criceti', 'Pippo&Paperino S.R.L.', new Type('Sanitari'), 'Sabbia per gabbia');
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
    <ul>
        <?php foreach ($animalsArray as $animal) { ?>
            <li><?php var_dump($animal) ?></li>
            <li><?php echo ($animal->printAll()) ?></li>
        <?php } ?>
        <li><?php echo ($beta_product->printAll()) ?></li>
    </ul>
</body>

</html>