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
