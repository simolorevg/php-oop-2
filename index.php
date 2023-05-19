<?php

require_once __DIR__ . '/models/product.php';
require_once __DIR__ . '/models/animals.php';
require_once __DIR__ . '/models/type.php';
require_once __DIR__ . '/database/db.php';
//$beta_product = new Animal('Criceti', 'Pippo&Paperino S.R.L.', new Type('Sanitari'), 'Sabbia per gabbia');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--LINK BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP OOP 2</title>
</head>

<body class="bg-warning">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <img src="Piccol.jpg" alt="Piccol Logo">
        <h2>Amici a 4 zampe</h2>
        <?php if ($checkException = false) { ?>
            <div class="row row-cols-3 d-flex justify-content-center">
                <?php foreach ($animalsArray as $animal) { ?>
                    <div class="card m-2" style="width: 18rem;">
                        <img src="<?php echo ($animal->printProductPhoto()) ?>" class="card-img-top" style="max-width: 400px" alt="...">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <p class="card-text"><?php echo ($animal->printAll()) ?></p>
                            <p class="fw-bold">Prezzo: <?php echo ($animal->printPrice()) ?> </p>
                            <a href="#infos" class="btn btn-primary">Altre Info</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
            <h2 class="text-danger text-center">DATO/I NON INSERITI CORRETTAMENTE, CONTROLLARE!!!</h2>
        <?php } ?>
    </div>
</body>

</html>