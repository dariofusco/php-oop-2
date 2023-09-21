<?php

require_once __DIR__ . '/Categoria.php';

class Prodotto
{
    public $cibo;
    public $gioco;
    public $cuccia;
    public $categoria;

    public function __construct($cibo, $gioco, $cuccia, Categoria $categoria)
    {
        $this->cibo = $cibo;
        $this->gioco = $gioco;
        $this->cuccia = $cuccia;
        $this->categoria = $categoria;
    }
}



