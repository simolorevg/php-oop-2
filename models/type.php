<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/animals.php';
class Type
{
    public $typology;
    public function __construct($_typology)
    {
        $this->typology = $_typology;
    }
    public function emptyType($_typology)
    {
        if ($_typology = '') {
            throw new Exception('La tipologia non può essere vuota');
        } else {
            return $_typology;
        }
    }
}
