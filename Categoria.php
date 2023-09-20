<?php

require_once __DIR__ . '/Prodotto.php';

class Categoria
{
    public $categoria;

    public function __construct($categoria)
    {
        $this->categoria = $categoria;
    }
}

$cani = new Categoria('Cane');
$gatti = new Categoria('Gatto');
