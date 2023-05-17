<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/type.php';
class Animal extends Product
{
    public $pet_type;
    public function __construct($_pet_type, $_brand, Type $_type, $_description, $_photo, $_price)
    {
        $this->pet_type = $_pet_type;
        parent::__construct($_brand, $_type, $_description, $_photo, $_price);
    }
    public function printAll()
    {
        // return $this->pet_type . "<br>" . parent::printBrand() . "<br>" . parent::printType() . "<br>" . parent::printDescription();
        return $this->pet_type . "<br>" . $this->printType() . "<br>" . $this->printBrand() . "<br>" . $this->printDescription();
    }
    public function printProductPhoto()
    {
        return $this->printPhoto();
    }
    public function printPrice()
    {
        return $this->thisPrice();
    }
}
