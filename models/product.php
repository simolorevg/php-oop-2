<?php
class Product
{
    private $brand;
    private $type;
    private $description;
    private $photo;
    private $price;
    public function __construct($_brand, Type $_type, $_description, $_photo, $_price)
    {
        $this->brand = $_brand;
        $this->type = $_type;
        $this->description = $_description;
        $this->photo = $_photo;
        $this->price = $_price;
    }
    public function printBrand()
    {
        return "Marca: " . $this->brand;
    }
    public function printType()
    {
        return $this->type->typology;
    }
    public function printDescription()
    {
        return "Descrizione: " . $this->description;
    }
    public function printPhoto()
    {
        return $this->photo;
    }
    public function thisPrice()
    {
        return $this->price . " €";
    }
    public function checkPrice($_price)
    {
        if ($_price <= 0) {
            throw new Exception('Non puoi mettere prezzo minore o uguale a zero');
        }
    }
}
