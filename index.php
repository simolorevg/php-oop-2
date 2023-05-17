<?php
require_once __DIR__ . '/models/product.php';
require_once __DIR__ . '/models/animals.php';
require_once __DIR__ . '/database/db.php';
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
            <li><?php echo ($animal->printAll()) ?></li>
        <?php } ?>
    </ul>
</body>

</html>