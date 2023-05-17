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
    public function printBrand()
    {
        return "Marca: " . $this->brand;
    }
    public function printType()
    {
        return $this->type;
    }
    public function printDescription()
    {
        return "Descrizione: " . $this->description;
    }
}
