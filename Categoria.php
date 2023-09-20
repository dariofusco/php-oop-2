<?php

//require_once __DIR__ . '/Prodotto.php';

class Categoria 
{
    public $cani;
    public $gatti;

    public function __construct($cani, $gatti)
    {
        $this->cani = $cani;
        $this->gatti = $gatti;
    }
}

$categoria = new Categoria('Cane', 'Gatto');
var_dump($categoria);