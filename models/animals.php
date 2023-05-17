<?php
require_once __DIR__ . '/product.php';
class Animal extends Product
{
    public $pet_type;
    public function __construct($_pet_type, $_brand, $_type, $_description)
    {
        $this->pet_type = $_pet_type;
        parent::__construct($_brand, $_type, $_description);
    }
    public function printAll()
    {
        return "Tipologia:{$this->pet_type} " . parent::printProduct();
    }
}
