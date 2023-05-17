<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/type.php';
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
        return $this->pet_type . "<br>" . parent::printBrand() . "<br>" . parent::printType() . "<br>" . parent::printDescription();
    }
}