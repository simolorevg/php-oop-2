<?php
class Product
{
    private $brand;
    private $type;
    private $description;
    public function __construct($_brand, $_type, $_description)
    {
        $this->brand = $_brand;
        $this->type = $_type;
        $this->description = $_description;
    }
    public function printProduct()
    {
        return "Marca: {$this->brand}, Tipologia:{$this->type}, Descrizione: {$this->description}";
    }
}

$first_product = new Product('Esselunga', 'Alimentare', 'Bocconcini di pollo');
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
</body>

</html>